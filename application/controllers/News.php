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
}/*
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
        $t=$this->db->where('id_guruh',12)->get('talabalar')->result_array();
      
        $data['talabalar']=$t;
        $this->load->view('talabalar',$data);
	}
	public function test(){
		$this->load->view('asd');
	}
}
*/
