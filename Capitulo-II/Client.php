<?php
include_once("Dogs.php");
include_once("Cats.php");

class Client{
    function _contruct() {

        $dogs=new Dogs();
        $cats=new Cats();
    }
}
$worker=new Client();
?>