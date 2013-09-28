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
        <h1 id="success">恭喜，編輯成功!!<br/>5秒回到編輯畫面。</h1>
        <h3>或是點擊<a href=<?php echo base_url("index.php/item");?>>這裡</a></h3>