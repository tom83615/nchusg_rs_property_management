<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();    //讀取必要模組
		$this->load->helper('url');
    $this->load->helper('cookie');
		$this->load->model('rs_pm/item_model');
	}
  
  public function index()
  {
      try
      {
      $header_data['title'] = '物品管理'; //header所需要的值
      $this->load->view('rs_pm/header',$header_data);
      $this->item_model->check_user();//確定權限
      if(isset($_GET["item"]))
          $this->show();//in this file
      $this->selection();//in this file
      $this->load->view('rs_pm/footer');
      }
      catch(Exception $e){
			echo $e->getMessage(), "\n" and die;
		}
  }
  
  
  private function selection()//選擇物品
  {
        $item_base = $this->item_model->get_item_all(array('iId','iName'),10);
        $this->load->view('rs_pm/select',$item_base);   
  }
  
  private function show()//顯示已選擇物品
  {
        $item_inf = $this->item_model->get_item_single($_GET["item"]);
        $this->load->view('rs_pm/show',$item_inf[0]);
  }
}
?>