<?php

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
}

$pole_stranek = array (
    'cs' => array (
        "uvod" => new Stranka ("uvod", "IMEX Projekt: Váš partner v bussines", "ÚVOD"),
        "ucetnictvi" => new Stranka ("ucetnictvi", "IMEX Projekt: účetnictví", "ÚČETNICTVÍ"),
        "facility" => new Stranka ("facility", "IMEX Projekt: facility", "FACILITY"),
        "sluzby" => new Stranka ("sluzby", "IMEX Projekt: služby", "SLUŽBY"),
        "kontakty" => new Stranka ("kontakty", "IMEX Projekt: kontakty", "KONTAKTY"),
    ),

    'en' => array (
        "uvod" => new Stranka ("home", "IMEX Projekt: Váš partner v bussines", "HOME"),
        "ucetnictvi" => new Stranka ("bookkeping", "IMEX Projekt: účetnictví", "BOOKKEPING"),
        "facility" => new Stranka ("facilityen", "IMEX Projekt: facility", "FACILITY"),
        "sluzby" => new Stranka ("services", "IMEX Projekt: služby", "SERVICES"),
        "kontakty" => new Stranka ("contacts", "IMEX Projekt: kontakty", "CONTACTS"),
    )
);

