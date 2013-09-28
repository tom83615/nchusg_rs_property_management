<div id = "add_button">  
  <form id = "add_button" action=<?php echo base_url("index.php/item/edit_index");?> >
      <input type="submit" value="登錄新物品" />
  </form>
</div>

<div id = "item_select">
  <h3 id = "item_select">物品列表</h3>
    
  <form id="item_select" 
         action=<?php echo base_url("index.php/item");?> method="get">
      <select name="selection">
      <?php
          foreach($iName as $key => $option)echo '<option value="'.$iId["$key"].'">'.$option.'</option>'
      ?>
      </select>
      <input type="submit" value="選擇" />
  </form>
</div>