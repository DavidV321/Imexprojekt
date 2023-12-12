<?php


// dynamicky seznam stranek

class Stranka {
    private $id;
    private $titulek;
    private $menu;

    function __construct($id, $titulek, $menu){
            $this->id=$id;
            $this->titulek=$titulek;
            $this->menu=$menu;

    }

    function get_id(){
        return $this->id;
    }

    function get_titulek(){
        return $this->titulek;
    }

    function get_menu(){
        return $this->menu;
    }
  
        // funkce pro volani obsahu do administracniho formulare
            function get_obsah () {
            return file_get_contents ("$this->id.html");
    }

        // funkce pro ulozeni editovaneho obsahu
        function set_obsah($obsah){
            file_put_contents("$this->id.html", $obsah);
    }

} // ===== end classa Stranka =====


$texts = array (
    'cs' => array (
        "uvod" => new Stranka ("uvod", "IMEX Projekt: Váš partner v bussines", "ÚVOD"),
        "ucetnictvi" => new Stranka ("ucetnictvi", "IMEX Projekt: účetnictví", "ÚČETNICTVÍ"),
        "facility" => new Stranka ("facility", "IMEX Projekt: facility", "FACILITY"),
        "sluzby" => new Stranka ("sluzby", "IMEX Projekt: služby", "SLUŽBY"),
        "kontakty" => new Stranka ("kontakty", "IMEX Projekt: kontakty", "KONTAKTY"),


    ),

    'en' => array (
        "home" => new Stranka ("home", "IMEX Projekt: Your bussines partner", "HOME"),
        "bookkeping" => new Stranka ("bookkeping", "IMEX Projekt: účetnictví", "BOOKKEPING"),
        "facilityen" => new Stranka ("facilityen", "IMEX Projekt: facility", "FACILITY"),
        "services" => new Stranka ("services", "IMEX Projekt: služby", "SERVICES"),
        "contacts" => new Stranka ("contacts", "IMEX Projekt: kontakty", "CONTACTS"),
    )
 
    
);

