<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FoodController extends CI_Controller {

	public function index()
	{
        // echo $this->load->view('mobile_page');

		// test commit 

        $data = array();
		$this->load->view('layout/nabar');
		// $this->load->view('mobilePgae',$data);
		$this->load->view('layout/footer');
    }
}
