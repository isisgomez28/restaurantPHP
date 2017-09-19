<?php
  /**
   *
   */
  class Dish extends CI_Model
  {

    public function __construct()
    {
      $this->load->database();
    }

    public function get_dishes($id = 0){
      if($id === 0){
        $query = $this->db->get('dishes');
        return $query->result_array();
      }

      $query = $this->db->get_where('dishes', array('id' => $id));
      return $query->row_array(); 
    }
  }

?>
