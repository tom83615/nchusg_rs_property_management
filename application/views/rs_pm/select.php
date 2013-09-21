<div id = "select">
  <form>
      <select name="selection">
      <?php
          foreach($iName as $key => $option)echo '<option value="'.$iId["$key"].'">'.$option.'</option>'
      ?>
      </select>
  </form>
</div>