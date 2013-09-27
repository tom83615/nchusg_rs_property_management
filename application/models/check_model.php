<?php
class check_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();                 // 呼叫模型(Model)的建構函數
    }
/*==================================================
檢測用
==================================================*/
    public function check_user()
    {
        if($this->input->cookie('weight',true) < 8)
            throw new Exception("load refuse");
    }
}
?>