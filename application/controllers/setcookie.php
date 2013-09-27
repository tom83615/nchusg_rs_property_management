<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setcookie extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
  public function index()
  {
    $cookie = array(
    'name'   => 'weight',
    'value'  => '10',
    'expire' => '600'
    );
    $this->input->set_cookie($cookie);
    echo "<br/> success!!";
  }
}