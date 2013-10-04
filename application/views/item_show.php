<div id = "item_show_inf">
    <?php
        echo heading("物品資訊",1,'id="item_show_inf"');     
    ?>
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
    <?php
        echo img(array( 'src'=>"data/image/$iId.jpg",
                        'alt'=>$iName.'沒有圖片'
                ));
    ?>
</div>
