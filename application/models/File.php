<?php
class File extends CI_Model {



	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
	}


public function set_name($id_vk,$name,$female)
{
  $this->load->database();


//	print_r($this->db->query("SELECT id_vk FROM users WHERE id_vk='$id_vk'")->result()[0]->id_vk->count());
   if(empty(!@$this->db->query("SELECT *FROM users WHERE id_vk='$id_vk'")->result()[0]->id_vk))
      {
        $this->db->query("UPDATE users SET name='$name',female='$female' WHERE id_vk='$id_vk'");
      }
      else
      {
        $this->db->query("INSERT INTO users(name,female,id_vk) VALUES ('$name','$female','$id_vk')");

      }

      if(($this->db->query("SELECT organ FROM users WHERE id_vk='$id_vk'")->result()[0]->organ)==1)
      {
        return 1;
      }
      else
      {
        return 0;
      }
  }

public function get_id_user($id_vk)
{
	  $this->load->database();
	$result=$this->db->query("SELECT id_user FROM users WHERE id_vk='$id_vk'")->result();
	return $result;
}

public function get_organ($id_vk)
{
  $this->load->database();
  	$result=$this->db->query("SELECT organiz.name,organiz.female,organiz.second_name,organiz.pasport,organiz.inn,organiz.conf,users.id FROM organiz,users WHERE users.id_vk ='$id_vk'")->result();
	return $result;
}




public function get_pl()
{
  $this->load->database();
  $result= $this->db->query("SELECT not_pay_pl.name,not_pay_pl.point1,not_pay_pl.point2,category.category,not_pay_pl.id_pl,not_pay_pl.PorN,not_pay_pl.pay,not_pay_pl.begin,not_pay_pl.end,not_pay_pl.id_organ FROM not_pay_pl,category WHERE not_pay_pl.id_category=category.id_category")->result();
  return $result;
}

public function get_pl_filter($category)
{
		  $this->load->database();
			  $result= $this->db->query("SELECT not_pay_pl.name,not_pay_pl.point1,not_pay_pl.point2,category.category,not_pay_pl.id_pl,not_pay_pl.PorN,not_pay_pl.pay,not_pay_pl.begin,not_pay_pl.end,not_pay_pl.id_organ FROM not_pay_pl,category WHERE not_pay_pl.id_category=category.id_category AND category.category='$category'")->result();
					return $result;
}


public function get_event($id_pl,$date)
{
		 $this->load->database();
		  $result[0]= $this->db->query("SELECT event.id_event,event.header,event.time_begin, event.count_people,event.max_people FROM event WHERE event.id_pl='$id_pl' AND event.data='$date' ")->result();
			$result[1]=$this->db->query("SELECT  not_pay_pl.name,not_pay_pl.id_pl,not_pay_pl.PorN,not_pay_pl.pay,not_pay_pl.begin,not_pay_pl.end FROM not_pay_pl WHERE id_pl='$id_pl'")->result();
			return $result;
}

/*public function get_event_info($id_event)
{

}*/
public function get_my_event($id)
{
	  $this->load->database();


	$result= $this->db->query("SELECT ev.id_event,ev.header,ev.time_begin,(SELECT category.category FROM category,event WHERE event.id_category=category.id_category LIMIT 1) AS category, ev.count_people,ev.max_people FROM event ev,who_go w WHERE w.id_user='$id' AND ev.id_event=w.id_event")->result();
	return $result;
}

public function delete_event($id,$id_event)
{
	  $this->load->database();
		$result= $this->db->query("DELETE FROM who_go WHERE id_user = '$id' and id_event = '$id_event'");
		$result= $this->db->query("SELECT count_people FROM event WHERE id_event = '$id_event'")->result()[0]->count_people;
		$result--;
		$this->db->query("UPDATE event SET count_people = '$result' WHERE id_event = '$id_event'");
	return $result;
}

public function get_full_event_info($id_event,$id)
{

	$this->load->database();
	$temp=$this->db->query("SELECT count_people FROM event WHERE id_event = '$id_event' ")->result()[0]->count_people;
	$temp++;
	$this->db->query("UPDATE event SET count_people='$temp' WHERE id_event ='$id_event'");
	$this->db->query("INSERT INTO who_go(id_user,id_event) VALUES ('$id','$id_event')");


	}

public function get_full_event_info_real($id_event)
{
	$this->load->database();
	$result['eventInfoFull'] = $this->db->query("SELECT description,tel_num_org  FROM event WHERE id_event = '$id_event'")->result();
	//print_r($id_event);
	$result['listMember'] = $this->db->query("SELECT name,female,id_vk  FROM users WHERE   users.id_user IN (SELECT who_go.id_user FROM who_go WHERE who_go.id_event = '$id_event')")->result();
	$result['id_event']=$id_event;
	return $result;
}


	public function insertEvents($id_user,$header,$description,$time_begin,$tel_num_org,$max_people,$count_people,$data,$id_pl)
	{
		  $this->load->database();
				$resu=$this->db->query("SELECT id_category FROM not_pay_pl WHERE not_pay_pl.id_pl='$id_pl'")->result()[0]->id_category;

		$result= $this->db->query("INSERT INTO event(header,description,time_begin,tel_num_org,max_people,count_people,data,id_pl,id_category) VALUES ('$header','$description','$time_begin','$tel_num_org','$max_people','$count_people','$data',$id_pl,'$resu')");

	//	$u = $this->db->query("SELECT * FROM event")->num_rows();
		$idlast = $this->db->insert_id();
	//	print_r($idlast);
//		$u=$u+26;
	//[0]->['COUNT(*)'];

		$this->db->query("INSERT INTO who_go(id_user,id_event) VALUES ('$id_user','$idlast')");
		return $result;
	}


}
?>
