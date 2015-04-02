<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Numeral extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->helper('roman_numeral');
  }

  public function generate() {
    echo to_numeral((int) $this->uri->segment(3));
  }
}
