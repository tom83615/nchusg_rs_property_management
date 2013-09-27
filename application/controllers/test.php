<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		
		//讀取必要模組
		$this->load->helper('url');
		$this->load->model('item_model');
	}
public function b()
{
  try{
        $this->item_model->get_item();
        }catch (Exception $e) {
         echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
}  
}?>