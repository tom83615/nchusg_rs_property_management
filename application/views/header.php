<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <?php
  if(isset($css_location))
      foreach($css_location as $element)echo '<link rel="stylesheet" type="text/css" href="'.$element.'"/>';
  if(isset($js_location))
      foreach($js_location as $element)echo '<script type="text/javascript" src="'.$element.'"></script>';
  ?>
    <title><?php echo $title;?></title>
</head>
    <body>