<div id="delete_success_massage">
    <?php
        echo heading("恭喜，刪除成功!!".br()."5秒回到編輯畫面。",1,'id="success"');
        echo heading("或是點擊".anchor("item","這裡"),3,'id="anchor"');
    ?> 
</div>
<div id="roll_back">    
    <?php
        echo form_open("item/edit_to_db");
            echo form_hidden("id",$delete_inf['iId']);
            echo form_hidden("name",$delete_inf['iName']);
            echo form_hidden("class",$delete_inf['iClass']);
            echo form_hidden("number",$delete_inf['iNumber']);
            echo form_hidden("deadline",$delete_inf['iDeadline']);
            echo form_hidden("weight",$delete_inf['iWeight']);
            echo form_hidden("note",$delete_inf['iNote']);
            echo form_submit("submit","取消刪除");
        echo form_close();
    ?>          
</div>