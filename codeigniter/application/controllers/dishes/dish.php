<?php
  /**
   *
   */
  class Dish extends CI_Controller
  {
    public function index()
    {
      $data = array(
        'title' => 'Platos',
        'message' => 'Lista de Platos'
      );
      $this->load->view('dishes/dish', $data);
    }
  }


?>
