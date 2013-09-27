<div id = "item_select">
  <h3 id = "item_select">物品列表</h3>
  <form id = "item_add" action=<?php echo base_url("index.php/rs_pm/item/edit_index");?> >
      <input type="submit" value="登錄新物品" />
  </form>
  
  
  <form id="item_select" 
         action=<?php echo base_url("index.php/rs_pm/item");?> method="get">
      <select name="selection">
      <?php
          foreach($iName as $key => $option)echo '<option value="'.$iId["$key"].'">'.$option.'</option>'
      ?>
      </select>
      <input type="submit" value="選擇" />
  </form>
</div>