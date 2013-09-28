<div id = "edit_button">
    <form id = "edit_button"
        action= <?php echo base_url("index.php/item/edit_index");?> method="post">
        <input type="hidden" name="iId" value="<?php echo $iId;?>" />
        <input type="submit" value="修改" />       
    </form>
</div>

<div id = "edit_button">
    <form id = "edit_button"
        action= <?php echo base_url("index.php/item/delete");?> method="post">
        <input type="hidden" name="iId" value="<?php echo $iId;?>" />
        <input type="submit" value="刪除" />       
    </form>
</div>