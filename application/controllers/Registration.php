<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function index()
	{

		//authorize vk
		$ur= 'https://oauth.vk.com/access_token?client_id=6996347&redirect_uri=http://localhost/vl.php&client_secret=Y4brGtnSrEmMD2D2UXbt';
		$token = json_decode(file_get_contents('https://oauth.vk.com/access_token?client_id=6996347&redirect_uri=http://localhost/index.php/registration&client_secret=Y4brGtnSrEmMD2D2UXbt&code='.$this->input->get('code')),true);
		$dataUser = json_decode(file_get_contents('https://api.vk.com/method/users.get?user_ids='.$token['user_id'].'&fields=bdate&access_token='.$token['access_token'].'&v=5.95'),true);
		//print_r($dataUser['response'][0]);


		//проверка организатор или нет
		$this->load->model('File');
		$this->load->library('session');
	if ($this->File->set_name($dataUser['response'][0]['id'],$dataUser['response'][0]['first_name'],$dataUser['response'][0]['last_name'])==1)
	{

				$data = $this->File->get_organ($dataUser['response'][0]['id']);
				$this->session->set_userdata('org_flag', $data['org_flag']=1);
				$this->session->set_userdata('name',$dataUserOrg['name'] = $data[0]->name  );
				$this->session->set_userdata('female',$dataUserOrg['female'] = $data[0]->female  );
				$this->session->set_userdata('second_name',$dataUserOrg['second_name'] = $data[0]->second_name );
				$this->session->set_userdata('pasport',$dataUserOrg['pasport'] = $data[0]->pasport  );
				$this->session->set_userdata('inn',$dataUserOrg['inn'] = $data[0]->inn  );
					$this->session->set_userdata('id_user',$dataUserOrg['id_user'] = $data[0]->id_user);
				//добавить id
				//$this->load->view('viewOrg',$dataUserOrg);

				//$this->load->view('main_view',$data);
				redirect('/app');
		}
		else {

		$this->session->set_userdata('first_name',$dataUser['response'][0]['first_name']);
		$this->session->set_userdata('last_name',$dataUser['response'][0]['last_name']);
		$this->session->set_userdata('id',$dataUser['response'][0]['id']);
		$this->session->set_userdata('orf_flag', $data['org_flag']=0);
		$this->session->set_userdata('id_user',$this->File->get_id_user($dataUser['response'][0]['id'])[0]->id_user);
		redirect('/app');
		}


	}

// public function get_pl($dateTime,)
// {
// 	// code...
// }
}
