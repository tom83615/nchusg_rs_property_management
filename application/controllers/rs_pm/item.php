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
  
  public function index()//預設
  {
      try
      {
      $header_data['title'] = '物品管理'; //header所需要的值
      $this->load->view('rs_pm/header',$header_data);
      $this->item_model->check_user();//確定權限
      if(isset($_GET["selection"]))
          $this->show();//in this file
      $this->selection();//in this file
      $this->load->view('rs_pm/footer');
      }
      catch(Exception $e){
			echo $e->getMessage(), "\n" and die;
		}
  }
  
  public function edit_index()//編輯時呼叫
  {
      try
      {
      $header_data['title'] = '物品管理'; //header所需要的值
      $this->load->view('rs_pm/header',$header_data);
      $this->item_model->check_user();//確定權限
      if(isset($_POST["iId"]))
          $this->edit();//in this file
      else
          $this->add();//in this file
      $this->load->view('rs_pm/footer');
      }
      catch(Exception $e){
			echo $e->getMessage(), "\n" and die;
		}
  }
  public function edit_to_db()
  {
    try
      {
      $header_data['title'] = '物品管理'; //header所需要的值
      $this->load->view('rs_pm/header',$header_data);
      $this->item_model->check_user();//確定權限
      foreach($_POST as $key => $value)
      echo $key."=>".$value;
      $this->load->view('rs_pm/footer');
      }
      catch(Exception $e){
			echo $e->getMessage(), "\n" and die;
		}
  } 
   
  private function selection()//選擇物品
  {
        $item_base = $this->item_model->get_item_all(
                                                array('iId','iName'),
                                                $this->input->cookie('weight',true));
        $this->load->view('rs_pm/item_select',$item_base);   
  }
  
  private function show()//顯示已選擇物品
  {
        $item_inf = $this->item_model->get_item_single($_GET["selection"]);
        $this->load->view('rs_pm/item_show',$item_inf[0]);
  }
  
  private function edit()//編輯 有ID
  {
      $item_inf = $this->item_model->get_item_single($_POST["iId"]);
      $this->load->view('rs_pm/item_edit',$item_inf[0]);
  }
  private function add()//新增 無ID
  {
      $this->load->view('rs_pm/item_add');
      
  }

}
?>