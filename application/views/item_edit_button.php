<div id = "edit_button">
    <?php
        echo form_open("item/edit_index");
            echo form_hidden("iId",$iId);
            echo form_submit("submit","修改資料");
        echo form_close();
    ?>
</div>
<div id = "edit_picture_button">
    <?php
        echo form_open("item/picture_edit");
            echo form_hidden("iId",$iId);
            echo form_submit("submit","修改圖片");
        echo form_close();
    ?>
</div>
<div id = "edit_button">
<?php
        echo form_open("item/delete");
            echo form_hidden("iId",$iId);
            echo form_submit("submit","刪除");
        echo form_close();
    ?>
</div>
