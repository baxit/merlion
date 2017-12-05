<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class About extends CI_Controller {


	public function contact()
    {
		$data['talabalar']=$this->db->order_by('h_tel','DESC')->get('talabalar')->result_array();
	
		$this->load->view('contact/contact',$data);
	}
 
    public function index()
    {
        $t=$this->db->where('id_guruh',12)->get('talabalar')->result_array();
      
        $data['talabalar']=$t;
        $this->load->view('contact/about',$data);
    }
    
    public function feedback()
    {
        //здесь будет код для фидбека
    }

}