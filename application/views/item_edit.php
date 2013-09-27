<div id="item_edit">
    <h1 "item_edit">編輯物品資料</h1>
    <form id = "edit" 
        action= <?php echo base_url("index.php/item/edit_to_db");?> method="post">
    <?php ?>
    <b>ID　:</b><input type="text" name="id"   value="<?php echo $iId;?>" disabled 	="disabled"/><br/><br/> <input type="hidden" name="id" value="<?php echo $iId;?>"/>
    
    <b>名稱:</b><input type="text" name="name" value="<?php echo $iName;?>"/><br/><br/>
    
    <b>類別:</b><input type="text" name="class" value="<?php echo $iClass;?>"/><br/><br/>
    
    <b>數量:</b><input type="text" name="number" value="<?php echo $iNumber;?>"/><br/><br/>
    
    <b>租用最長期限:</b><input type="text" name="deadline" value="<?php echo $iDeadline;?>"/>天<br/><br/>
    
    <b>權重:</b><input type="text" name="weight" value="<?php echo $iWeight;?>"/><br/><br/>
    
    <b>備註:</b><input type="text" name="note" value="<?php echo $iNote;?>"/><br/><br/>
    
    <input type="submit" value="確認送出" />  
    
    </form>
</div>