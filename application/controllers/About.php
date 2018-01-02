<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class About extends CI_Controller {


	public function contact()
    {
		$data['about']=$this->db->order_by('h_tel','DESC')->get('about')->result_array();
	
		$this->load->view('about',$data);
	}
 
    public function index()
    {
        $t=$this->db->where('id',1)->get('about')->result_array();
        $data['about']=$t;
        $this->load->view('about',$data);
    }
    

}