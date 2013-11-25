<?php
    if(@fopen("./data/image/$iId.jpg","r"))//有圖片會顯示
    {
        echo heading("圖片：".br(),1,'id="pic_inf"');
        echo img(array('src'=>"data/image/$iId.jpg"));      
    }
?>