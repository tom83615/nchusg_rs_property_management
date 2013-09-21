<?php
class Item_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();                 // 呼叫模型(Model)的建構函數
    }
    //==================================================//
    //檢測用
    //==================================================//
    public function check_user()
    {
       if($this->input->cookie('weight',true) < 8)
          throw new Exception("load refuse");
    }
    //==================================================//
    //搜尋
    //==================================================//
    //用於搜索全部
    public function get_item_all($col,$weight=1)//by weight
    {
      if(!isset($col)||!is_array($col))
        throw new Exception("require colum name must be array.");
      foreach($col as $value)
      {
          
          $this->db->select($value);
          $this->db->where('iWeight <=',$weight);
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
    
    public function get_item_single($id)//by id
    {
      $this->db->where('iId',$id);
      $data = $this->db->get('item');
      $data = $this->xsscln_arr($data);
      return($data);
    }
    //==================================================//
    //其他
    //==================================================//
    //換成arr 以及防止XSS
    public function xsscln_arr($in)
    {
        $result = $in->result_array();
        $result = $this->security->xss_clean($result);
        return $result;
    }
}    
?>