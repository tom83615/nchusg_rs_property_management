<div id="item_edit">
    <?php
        echo heading('登錄物品',1,'id="item_edit"');

        echo form_open("item/edit_to_db");
            echo "名稱:".form_input("name").br(2);
            echo "類別:".form_input("class").br(2);
            echo "數量:".form_input("number").br(2);
            echo "租用最長期限:".form_input("deadline")."天".br(2);
            echo "權重:".form_input("weight").br(2);
            echo "備註:".form_input("note").br(2);
            echo form_submit("submit","確認送出");
        echo form_close();
    ?>
</div>