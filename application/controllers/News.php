<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class News extends CI_Controller {

	public function add()
	{
                $this->load->view('news/add');
	}

	public function all() {
		$data['news']=$this->db->order_by('id','DESC')->get('news')->result_array();
        
		$this->load->view('news/list',$data);
	}
    
    public function show($id){
        $r = $this->db->where('id',$id)->get('news')->result_array();
        
        $data['info'] = $r;
        $this->load->view('news/show',$data);
    }
    
    public function delete($id){
        $r = $this->db->where('id',$id)->delete('news')->result_array();
        
        $data['info'] = $r;
        $this->load->view('news/show',$data);
    }
    
}