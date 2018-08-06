<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('logged_in')) {
      redirect('/');
    }
    $this->load->model(array('model'));
  }

  
}
