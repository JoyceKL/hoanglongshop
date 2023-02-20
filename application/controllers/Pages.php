<?php
class Pages extends CI_Controller{
    public function view($page='home'){
        if(!file_exists(APPPATH.'view/page/'.$page.'.php')){
            show_404();
        }

        $data['title']= ucfirst(($page));

        $this->load->view('layou/header');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('layou/footer');
    }
}