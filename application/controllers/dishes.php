<?php
  /**
   *
   */
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Dishes extends REST_Controller {
  // public function __construct(){
  //   parent::__construct();
  //   $this->load->model('dish');
  //   $this->load->helper('url_helper');
  // }

  public function index_get() {
    echo 'Todos los platos';

    // $data['dishes'] = $this->dish->get_dishes();
    // $data['title'] = 'Platos';
    // $data['title2'] = 'Lista de Platos';
    //
    // $this->load->view('template/header', $data);
    // $this->load->view('dishes/index', $data);
    // $this->load->view('template/footer', $data);
  }

  // public function view($id = 0){
  //   $data['dish'] = $this->dish->get_dishes($id);
  //
  //   if(empty($data['dish'])) {
  //     show_404();
  //   }
  //
  //   $data['name'] = $data['item']['name'];
  //
  //   $this->load->view('template/header', $data);
  //   $this->load->view('dishes/view', $data);
  //   $this->load->view('template/footer', $data);
  // }
}
