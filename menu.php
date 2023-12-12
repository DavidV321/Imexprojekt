

<?php


 foreach ($pole_stranek as $stranka => $instance_stranky) : ?>
    <?php if ($instance_stranky->get_menu() != "") : ?>
        <?php
        $escaped_menu = htmlspecialchars($instance_stranky->get_menu());
        $escaped_id = htmlspecialchars($instance_stranky->get_id());
        ?>  
<a href='?lang=<?php echo $lang; ?>&id-stranky=<?php echo $escaped_id; ?>'><?php echo $escaped_menu; ?></a>
    <?php endif; ?>
       <?php endforeach; ?>





<!-- 
 foreach ($pole_stranek_cs as $stranka => $instance_stranky) {

    if ($instance_stranky->get_menu() != "") {
        $escaped_menu = htmlspecialchars($instance_stranky->get_menu());
        $escaped_id = htmlspecialchars($instance_stranky->get_id());
        echo "<li><a href='?id-stranky={$escaped_id}'>{$escaped_menu}</a></li>";
    }
 
} -->

   
