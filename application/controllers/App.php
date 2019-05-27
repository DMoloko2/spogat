<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function index()
	{	$this->load->library('session');

      if(empty(!$this->session->id)){
        $this->load->model('File');
        $data['last_name'] = $this->session->last_name;
        $data['first_name'] = $this->session->first_name;
        $data['event'] = $this->File->get_pl();
			//	print_r($data);
        $this->load->view('index',$data);
      }

		}
public function filter()
{
	$cat=$this->input->get('cat');
	$this->load->library('session');

			if(empty(!$this->session->id)){
				$this->load->model('File');
				$data['last_name'] = $this->session->last_name;
				$data['first_name'] = $this->session->first_name;
				$data['event'] = $this->File->get_pl_filter($cat);
			//	print_r($data);
				$this->load->view('index',$data);
			}
}


public function get_info()
{

  $this->load->model('File');
	$data['data'] = $this->File->get_event($this->input->get('id_pl'),$this->input->get('date'));

	$this->load->view('modal_for_event',$data);

}
public function my_event()
{
	$this->load->library('session');
	$id=$this->session->id_user;
			if(empty(!$this->session->id))
			{
				$this->load->model('File');
				$data['last_name'] = $this->session->last_name;
				$data['first_name'] = $this->session->first_name;
			}

	  $this->load->model('File');
		$data['dataevent'] = $this->File->get_my_event($id);

		$this->load->view('my_event',$data);
}
public function deleteEvent()
{
	$this->load->library('session');
	$this->load->model('File');
	$data= $this->File->delete_event($this->session->id_user,$this->input->get('id_event'));
	redirect('/app/my_event');


}
public function getFullEventInfo()
{

$this->load->library('session');
$this->load->model('File');
$this->File->get_full_event_info($this->input->get('id_event'),$this->session->id_user);
	/*$this->load->model('File');
	$result = $this->File->get_full_event_info($this->input->get('id_event'));
	//print_r($this->input->get('id_event'));
	$this->load->view('fullEventInfo',$result);*/
}

public function add_event()
{
	$this->load->library('session');
	$this->load->model('File');
	$dataForm = json_decode($this->input->get('name'));
	$this->File->insertEvents($this->session->id_user,$dataForm->header,$dataForm->description,$dataForm->time_begin,$dataForm->tel_number,$dataForm->max_people,$dataForm->count_people,$dataForm->datepicker_here,$dataForm->id_pl);

}

}
