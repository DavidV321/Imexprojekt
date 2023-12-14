<?php
    //nastaveni uvodni stranky
    require "./seznam-stranek.php";

    $lang = "cs"; // Defaultní jazyk, může být změněn v URL parametru

    if (array_key_exists("lang", $_GET) && ($_GET["lang"] == "en")) {
        $lang = "en"; // Pokud je v URL parametru zvolen anglický jazyk, použije se
    }

    if (array_key_exists("id-stranky", $_GET)) {
        $id_stranky = $_GET["id-stranky"];
    } else {
        $id_stranky = "uvod";
    }

    $menu = $pole_stranek[$lang]; // Vybere správný jazykový menu
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styly.css">
    <link rel="stylesheet" href="queries.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $menu[$id_stranky]->get_titulek(); ?></title>
    <link rel="icon" type="images/png" href="images/favicona.jpg">
</head>
<body>
    <header>
        <div class="header-img">
            <img src="images/imex-logo-black-white.png">
        </div>
        <nav>
            <ul>
                <!-- vlozeni dynamickeho menu-->
                <?php
                foreach ($menu as $stranka => $instance_stranky) {
                    if ($instance_stranky->get_menu() != "") {
                        $escaped_menu = htmlspecialchars($instance_stranky->get_menu());
                        $escaped_id = htmlspecialchars($stranka);
                        echo "<li><a href='?lang={$lang}&id-stranky={$escaped_id}'>{$escaped_menu}</a></li>";
                    }
                }
                ?>
                <!-- Přepínač jazyků -->
                <?php
                if ($lang === "cs") {
                    echo "<li><a href='?lang=en&id-stranky={$id_stranky}'>English</a></li>";
                } else {
                    echo "<li><a href='?lang=cs&id-stranky={$id_stranky}'>Čeština</a></li>";
                }
                ?>
            </ul>
            <div class="clearfix"></div>
        </nav>
    </header>
    
    <section>
        <?php
        // napojeni obsahu stranek
        echo $menu[$id_stranky]->get_obsah();
        ?>
    </section>
    
    <footer>
        &copy; 2023  WebproDesign &copy; www.WebproDesign.cz
    </footer>
    
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    
</body>
</html>