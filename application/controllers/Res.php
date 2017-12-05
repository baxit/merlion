<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
        $t=$this->db->where('text')->get('Merlion')->result_array();
      
        $data['Merlion']=$t;
        $this->load->view('Merlion',$data);
	}
	public function test(){
		$this->load->view('news');
	}
}
