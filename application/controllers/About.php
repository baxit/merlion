<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class About extends CI_Controller {


	public function contact()
    {
		$this->view_lib->render('about',$data);
	}
 
    public function index()
    {
        
        $this->view_lib->render('about');
    }
    

}