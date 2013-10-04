<?php echo doctype('html5'); ?>
<html lang="en">
<head>
    <?php
        echo meta("Content-type","text/html; charset=utf-8");
        if(isset($refresh_url))
                echo meta("refresh",$refresh_url['time'].";url=".$refresh_url['url'],"equiv");
        if(isset($css_location))
             foreach($css_location as $element)
                echo link_tag("$element");
        if(isset($js_location))
            foreach($js_location as $element)
                echo '<script type="text/javascript" src="'.$element.'"></script>';
    ?>
    <title><?php echo $title;?></title>
</head>
    <body>