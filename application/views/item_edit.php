<div id="item_edit">
    <?php
        echo heading("編輯物品資料".br(),1,'id="item_edit"');

        echo form_open("item/edit_to_db");
            echo "ID　:".form_input("id",$iId,"disabled=disabled").br(2);
            echo form_hidden("id",$iId);
            echo "名稱:".form_input("name",$iName).br(2);
            echo "類別:".form_input("class",$iClass).br(2);
            echo "數量:".form_input("number",$iNumber).br(2);
            echo "租用最長期限:".form_input("deadline",$iDeadline)."天".br(2);
            echo "權重:".form_input("weight",$iWeight).br(2);
            echo "備註:".form_input("note",$iNote).br(2);
            echo form_submit("submit","確認送出");            
        echo form_close();        
    ?>
</div>