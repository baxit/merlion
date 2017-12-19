<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class News extends CI_Controller {

	public function add()
	{
        if (!($this->ion_auth->is_admin())){
            redirect('/');
        }
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

	public function index() {
		$data['news']=$this->db->order_by('id','DESC')->get('news')->result_array();
		$this->view_lib->render('news/list',$data);
	}
    
    public function abc() {
        
        $this->load->library('pagination');
        $config['base_url'] = base_url().'news/abc/';
        $config['total_rows'] = $this->db->count_all('news');
        $config['per_page'] = 3;
        $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a>';
            $config['cur_tag_close'] = '</a></li>';
            $config['first_link'] = '&lt;&lt; Первая';
            $config['last_link'] = 'Последняя &gt;&gt;';
            $config['next_link'] = 'Дальше &gt;';
            $config['prev_link'] = '&lt; Назад';

        $this->pagination->initialize($config);

        $data['links'] = $this->pagination->create_links();
        $current_page = $this->uri->segment(3);
		$data['news']=$this->db->order_by('id','DESC')->limit(3,$current_page)->get('news')->result_array();
		$this->view_lib->render('news/abc',$data);
	}
    
    public function show($id){
       $r = $this->db->where('id',$id)->get('news')->row_array();
		
	       $data['info'] = $r;
        $this->view_lib->render('news/show',$data);
	}
	 public function delete($id){
		$this->db->where('id',$id)->delete('news');
		redirect('news'); //napravlenie na news/all 
	 }
     
     public function update($id){
        if($this->input->post('title')){
			$arr=[
				'title'=> $this->input->post('title'),
				'text'=> $this->input->post('text'),
				'date'=> date("Y-m-d H:i:s"),
			];
			$this->db->where('id',$id)->update('news', $arr);
			redirect('news');
		}
        $n = $this->db->where('id',$id)->get('news')->row_array(); //получили из БД новость №8
        $data['x'] = $n; //записали эту новость в массив data
        $this->view_lib->render('news/update',$data); //передали data в вид news/update
     }
	 public function q(){
	 $sql = $this->db->get_compiled_select('mytable');
	 echo $sql;
	 }
    
}