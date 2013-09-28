<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" http-equiv="refresh" content="5;url=<?php echo base_url("index.php/item");?>">
    <?php
        if(isset($css_location))
            foreach($css_location as $element)echo '<link rel="stylesheet" type="text/css" href="'.$element.'"/>';
        if(isset($js_location))
            foreach($js_location as $element)echo '<script type="text/javascript" src="'.$element.'"></script>';
    ?>
    <title><?php echo $title;?></title>    
</head>
    <body>
        <h1 id="success">恭喜，刪除成功!!<br/>5秒回到編輯畫面。</h1>
        <h3>或是點擊<a href=<?php echo base_url("index.php/item");?>>這裡</a></h3>
        <div id="roll_back">
            <form id = "edit" 
                action= <?php echo base_url("index.php/item/edit_to_db");?> method="post">
            <?php var_dump($delete_inf)?>
            <input type="hidden" name="id" value="<?php echo $delete_inf['iId'];?>" />
            
            <input type="hidden" name="name" value="<?php echo $delete_inf['iName'];?>"/>
            
            <input type="hidden" name="class" value="<?php echo $delete_inf['iClass'];?>" />
            
            <input type="hidden" name="number"value="<?php echo $delete_inf['iNumber'];?>" />
            
            <input type="hidden" name="deadline" value="<?php echo $delete_inf['iDeadline'];?>" />
            
            <input type="hidden" name="weight" value="<?php echo $delete_inf['iWeight'];?>" />
            
            <input type="hidden" name="note" value="<?php echo $delete_inf['iNote'];?>" />
            
            <input type="submit" value="取消刪除" />
        </div>