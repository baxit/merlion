<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Menu extends CI_Controller {

	public function add()
	{

		if($this->input->post('title')){
			$arr=[
				'title'=> $this->input->post('title'),
				'text'=> $this->input->post('text'),
				'date'=> date("Y-m-d H:i:s"),
			];
			$this->db->insert('menu', $arr);
			redirect('menu');
		}
        $this->view_lib->render('menu/add');
	}

	public function index() {
		$data['menu']=$this->db->order_by('id','DESC')->get('menu')->result_array();
		$this->view_lib->render('menu/list',$data);
	}
    
    public function show($id){
       $r = $this->db->where('id',$id)->get('menu')->row_array();
		
	       $data['info'] = $r;
        $this->view_lib->render('menu/show',$data);
	}
	 public function delete($id){
		$this->db->where('id',$id)->delete('menu');
		redirect('menu'); //napravlenie na menu/all 
	 }
     
     public function update($id){
        if($this->input->post('title')){
			$arr=[
				'title'=> $this->input->post('title'),
				'text'=> $this->input->post('text'),
				'date'=> date("Y-m-d H:i:s"),
			];
			$this->db->where('id',$id)->update('menu', $arr);
			redirect('menu');
		}
        $n = $this->db->where('id',$id)->get('menu')->row_array(); //получили из БД новость №8
        $data['x'] = $n; //записали эту новость в массив data
        $this->view_lib->render('menu/update',$data); //передали data в вид menu/update
     }
	 public function q(){
	 $sql = $this->db->get_compiled_select('mytable');
	 echo $sql;
	 }
    
}