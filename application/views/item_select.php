<div id = "add_button">
    <?php
        echo form_open("item/edit_index");
            echo form_submit("submit","登錄新物品");
        echo form_close();
    ?>
</div>

<div id = "item_select">
  <?php
      echo heading("物品列表",3,'id="item_select"');
      $attribute['method'] = 'get';
      echo form_open("item", $attribute);
          echo '<select name="selection">';
            foreach($iName as $key => $option)
              echo '<option value="'.$iId["$key"].'">'.$option.'</option>';
          echo '</select>';
          echo form_submit("","選擇");
      echo form_close();  
  ?>
</div>