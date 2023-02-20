<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TiviController extends CI_Controller {

	public function index()
	{
        // echo $this->load->view('mobile_page');

        $data = array();
		$this->load->view('layout/nabar');
		// $this->load->view('tiviPage',$data);
		$this->load->view('layout/footer');
    }
}