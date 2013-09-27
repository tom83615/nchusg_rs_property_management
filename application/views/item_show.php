<div id = "item_show_inf">
    <h1 id = "item_show_inf">物品資訊</h1>
    <p id="id">
        <b>ID:</b> <?php echo $iId;?>
    </p>
    <p id="name">
        <b>名稱:</b><?php echo $iName;?>
    </p>
    <p id="class">
        <b>類別:</b><?php echo $iClass;?>
    </p>
    <p id="number">
        <b>數量:</b><?php echo $iNumber;?>
    </p>
    <p id="deadline">
        <b>租用最長期限:</b><?php echo $iDeadline;?>天
    </p>
    <p id="weight">
        <b>權重:</b><?php echo $iWeight;?>
    </p>
    <p id="note">
        <b>備註:</b><?php echo $iNote;?>
    </p>
</div>
<div id = "item_show_picture">
    <b>圖片:</b><br/>
    <img 
    src="<?php echo base_url("data/image/$iId.jpg");?>" alt="<?php echo $iName;?>無法載入圖片"/>
</div>
<div id = "edit">
    <form id = "select" 
        action= <?php echo base_url("index.php/item/edit_index");?> method="post">
        <input type="hidden" name="iId" value="<?php echo $iId;?>" />
        <input type="submit" value="修改" />       
    </form>
</div>