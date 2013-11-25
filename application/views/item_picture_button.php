<?php
    if(isset($error))
        echo $error.br();
    echo form_open_multipart("item/picture_edit");
        echo form_hidden("iId",$iId);
        echo form_hidden("sent","1");
        echo form_input(array(
              'type' => 'file',
              'name' => 'pic_upload',
              'size' => '50'));
        echo form_submit("submit","送出");
    echo form_close();

    if(@fopen("./data/image/$iId.jpg","r"))//有圖片會顯示
    {
        echo form_open("item/picture_edit");
            echo form_hidden("iId",$iId);
            echo form_hidden("delete","1");
            echo form_submit("delete","刪除");
        echo form_close();
    }
?>