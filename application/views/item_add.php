<div id="item_edit">
    <h1 id="item_edit" >登錄物品</h1>
    <form id = "edit" 
          action= <?php echo base_url("index.php/item/edit_to_db");?> method="post">
    <?php ?>
    <br/><br/>
    <b>名稱:</b><input type="text" name="name" /><br/><br/>
    
    <b>類別:</b><input type="text" name="class" /><br/><br/>
    
    <b>數量:</b><input type="text" name="number" /><br/><br/>
    
    <b>租用最長期限:</b><input type="text" name="deadline" />天<br/><br/>
    
    <b>權重:</b><input type="text" name="weight" /><br/><br/>
    
    <b>備註:</b><input type="text" name="note" /><br/><br/>
    
    <input type="submit" value="確認送出" />  
    
    </form>
</div>