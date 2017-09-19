<?php
  /**
   *
   */
  class Home extends CI_Controller {
    public function index(){
        $data = array('title' => 'Inicio',
          'message' => 'Hola CI'
        );
        $this->load->view('home/Home', $data);
    }
  }
