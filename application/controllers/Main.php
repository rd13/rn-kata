<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->helper('roman_numeral');
  }

	public function index()
  {
    $view_params['number'] = rand(1,3999);
    $view_params['numeral'] = to_numeral($view_params['number']);
    $this->load->view('main', $view_params);
	}

}
