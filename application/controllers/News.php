<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class News extends CI_Controller {

	public function add()
	{

		if($this->input->post('title')){
			$arr=[
				'title'=> $this->input->post('title'),
				'text'=> $this->input->post('text'),
				'date'=> date("Y-m-d H:i:s"),
			];
			$this->db->insert('news', $arr);
			redirect('news/all');
		}
        $this->view_lib->render('news/add');
	}

	public function all() {
		$data['news']=$this->db->order_by('id','DESC')->get('news')->result_array();
		$this->view_lib->render('news/list',$data);
	}
    
    public function show($id){
       $r = $this->db->where('id',$id)->get('news')->row_array();
		
	       $data['info'] = $r;
        $this->view_lib->render('news/show',$data);
	}
	 public function delete($id){
		$this->db->where('id',$id)->delete('news');
		redirect('news/all'); //napravlenie na news/all 
	 }
	 public function q(){
	 $sql = $this->db->get_compiled_select('mytable');
	 echo $sql;
	 }
    
}