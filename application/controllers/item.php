<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();    //讀取必要模組
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->model('item_model');
        $this->load->model('check_model');
    }
      
    public function index()//預設
      {
        try
        {
            $header_data['title'] = '物品管理'; //header所需要的值
            $this->load->view('header',$header_data);
            $this->check_model->check_user();//確定權限
            if(isset($_GET["selection"]))
                $this->show($_GET["selection"]);//in this file
            $this->selection();//in this file
            $this->load->view('footer');
        }
        catch(Exception $e){
        	echo $e->getMessage(), "\n" ;
        }
      }
      
      public function edit_index()//編輯時呼叫
      {
            try
            {
            $header_data['title'] = '物品管理'; //header所需要的值
            $this->load->view('header',$header_data);
            $this->check_model->check_user();//確定權限
            $this->edit();//in this file
            $this->load->view('footer');
            }
            catch(Exception $e){
                echo $e->getMessage(), "\n" ;
            }
      }

    public function edit_to_db()
    {
        try
        {
        $this->to_db();//in this file
        $this->load->view('edit_success');
        $this->show_change();
        $this->load->view('footer');
        }
        catch(Exception $e){
            echo $e->getMessage(), "\n" ;
        }
    } 
       
    private function selection()//選擇物品
    {
        $item_base = $this->item_model->get_item_all(array('iId','iName'),$this->input->cookie('weight',true));
            $this->load->view('item_select',$item_base);
    }
      
    private function show($id)//顯示已選擇物品
    {
        $item_inf = $this->item_model->get_item_single($id);
        $this->load->view('item_show',$item_inf[0]);
    }
      
    private function edit()//編輯
    {
        if(isset($_POST["iId"]))
        {
            $item_inf = $this->item_model->get_item_single($_POST["iId"]);
            $this->load->view('item_edit',$item_inf[0]);
        }
        else
        {
            $this->load->view('item_add');
        }   
        
    }

    private function to_db()//進入資料庫
    {
        $this->item_model->set($_POST);
        $this->item_model->edit();        
    }
    private function show_change()//顯示成功的資料
    {
        if(isset($_POST['id']))
            $this->show($_POST['id']);
        else
            $this->show($this->item_model->iId);        
    }
}
?>