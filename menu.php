<?php
 foreach ($pole_stranek as $stranka => $instance_stranky) {

    if ($instance_stranky->get_menu() != "") {
        $escaped_menu = htmlspecialchars($instance_stranky->get_menu());
        $escaped_id = htmlspecialchars($instance_stranky->get_id());
        echo "<li><a href='?id-stranky={$escaped_id}'>{$escaped_menu}</a></li>";
    }
    // echo "<li><a href='?id-stranky={$stranka->get_id()}'>{$stranka->get_menu()}</a></li>";
}

   
