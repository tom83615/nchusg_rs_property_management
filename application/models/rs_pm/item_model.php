<?php
class Item_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();                 // 呼叫模型(Model)的建構函數
    }
    /*==================================================
    全域資料
    ==================================================*/
    private $iId = NULL;
    private $iName = NULL;
    private $iClass = NULL;
    private $iNumber = NULL;
    private $iDeadline = NULL;
    private $iWeight = NULL;
    private $iNote = NULL;
    private $fullset = false;
    private $data_array = array("iName","iClass","iNumber","iDeadline","iWeight","iNote");
    /*==================================================
    檢測用
    ==================================================*/
    public function check_user()
    {
       if($this->input->cookie('weight',true) < 8)
          throw new Exception("load refuse");
    }
    /*================================================
    搜尋
    ================================================*/
    //用於搜索全部
    public function get_item_all($col,$weight=1)//by weight
    {
      if(!isset($col)||!is_array($col))
        throw new Exception("require colum name must be array.");
      foreach($col as $value)
      {
          
          $this->db->select($value);
          $this->db->where('iWeight <=',$weight);
          $this->db->where('iWeight >',0);
          $data = $this->db->get('item');
          $data = $this->xsscln_arr($data);
          $result["$value"] = array();
          foreach($data as $name)
          {
              $result["$value"] = array_merge($result["$value"],array($name["$value"]));
          }
      }
      return($result);
    }
    //用來找一個
    public function get_item_single($id)//by id
    {
      $user = $this->input->cookie('weight',true);
      $this->db->where('iId',$id);
      $data = $this->db->get('item');
      $data = $this->xsscln_arr($data);
      if($data[0]['iWeight'] <= $user)
        return($data);
      else throw new Exception("load refuse");
    }
    /*==================================================
    資料輸入
    ==================================================*/
    public function set($arr)//設定
    {
      if(!is_array($arr))
          throw new Exception("input must be array.");
      foreach($arr as $key =>$value )
      {
          if($value == 0 && $key!= "note" )
              throw new Exception("$key would't be NULL.");
          switch ($key)
          {
            case "id":
              $this->iId = $value;
              break;
            case "name":
              $this->iName = $value;
              break;
            case "class":
              $this->iClass = $value;
              break;
            case "number":
              $this->iNumber = $value;
              break;
            case "deadline":
              $this->iDeadline = $value;
              break;
            case "note":
              $this->iNote = $value;
              break;
          }
          $this->fullset = true; 
      }
    }
    public function edit()//編輯
    {
      
    
    
    }
    /*==================================================
    其他
    ==================================================*/
    //換成arr 以及防止XSS
    public function xsscln_arr($in)
    {
        $result = $in->result_array();
        $result = $this->security->xss_clean($result);
        return $result;
    }
}    
?>