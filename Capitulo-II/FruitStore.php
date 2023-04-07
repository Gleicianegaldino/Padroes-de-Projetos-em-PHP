<?php
include_once("IProduct.php");

class FruitStore implements IProduct {

    public function apples(){
        return "FruitSore sez--we have apples" . " \n";

    }

    public  function oranges(){
        return "FruitStore sez--we have on citrus fruit". " \n";
    }
}
?>