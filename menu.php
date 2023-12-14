<?php
  foreach ($pole_stranek[$lang] as $stranka => $instance_stranky) {
    if ($instance_stranky->get_menu() != "") {
        $escaped_menu = htmlspecialchars($instance_stranky->get_menu());
        $escaped_id = htmlspecialchars($stranka);
        echo "<li><a href='?lang={$lang}&id-stranky={$escaped_id}'>{$escaped_menu}</a></li>";
    }
}
   
