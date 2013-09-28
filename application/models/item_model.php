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
    public  $iId = NULL;
    private $iName = NULL;
    private $iClass = NULL;
    private $iNumber = NULL;
    private $iDeadline = NULL;
    private $iWeight = NULL;
    private $iNote = NULL;
    private $fullset = false;
    private $data_array = array("iName","iClass","iNumber","iDeadline","iWeight","iNote");
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
        $this->reset();
        foreach($arr as $key =>$value )
        {
            if($value == NULL && $key!= "note" )
                throw new Exception("$key would't be NULL.");
            if($value == 0 && $key== "weight" )
                throw new Exception("You cann't set weight to 0.");
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
                case "weight":
                    $this->iWeight = $value;
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
        if(!$this->fullset)
            throw new Exception("you should call set() first");
        $arr = array();//存set資料
        foreach ($this->data_array as $name) 
        {
            $arr = $arr + array($name => $this->$name);
        }
        if($this->iId == NULL)
        {
            $this->db->insert('item', $arr);
            $this->iId = $this->db->insert_id();
        }
        else
        {
            $this->db->where('iId',$this->iId);
            $this->db->update('item', $arr); 
        }
    }
    public function reset()//刪除設定
    {
        $this->iId = NULL;
        $this->iName = NULL;
        $this->iClass = NULL;
        $this->iNumber = NULL;
        $this->iDeadline = NULL;
        $this->iWeight = NULL;
        $this->iNote = NULL;
        $this->fullset = false;
    }
    public function delete()//刪除資料
    {
        if($this->iId == NULL)
            throw new Exception("you should set(id) first");
        $this->db->where('iId',$this->iId);
        $arr = array('iWeight' => 0);
        $this->db->update('item', $arr); 
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