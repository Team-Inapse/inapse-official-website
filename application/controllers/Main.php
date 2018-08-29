<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	public function timer()
	{
		$this->load->view('timer');
	}
	public function timer_end()
	{
		$this->load->view('timer-end');
	}
	public function rule()
	{
		$this->load->view('rule');
	}
	public function submit()
	{
		if($this->input->post("team_name") && $this->input->post("team_link")){
			$name = $this->input->post("team_name", true);
			$link = $this->input->post("team_link", true);
			
	
		         $this->load->database();
		         $query = "INSERT INTO no1 ( team_name, team_link)
		         VALUES ( '$name', '$link');";

		         if(!$this->db->simple_query($query))
		         {
		             echo "DB 업로드에 실패하였습니다.";
		             exit;
		         }

		         echo "<script>alert('업로드 성공');";
		         echo "history.back();</script>";
		}
		$this->load->view('submit');
	}
	public function result(){
		$this->load->database();
		$q = $this->db->query("SELECT * FROM no1");
		$a = array();
		$a['q'] = $q;
		$this->load->view('result', $a);
		
	}
	public function q_and_a()
	{
		$this->load->view('q-and-a');
	}
}
