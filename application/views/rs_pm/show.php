<div id = "show_inf">
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
<div id = "show_picture">
    <b>圖片:</b><br/>
    <img 
    src="<?php echo base_url("data/image/rs_pm/$iId.jpg");?>"
    alt="<?php echo $iName;?>無法載入圖片"/>
</div>