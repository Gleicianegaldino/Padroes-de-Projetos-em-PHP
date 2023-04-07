<?php
include_once("IProduct.php");

class CitrusStore implements IProduct{

    public function apples(){
        return "CitrusStore sez--we do not shell apples." . " \n";
    }

    public function oranges(){
        return "CitrusStore sez--we have citrus fruit" . " \n";
    }

}

?>