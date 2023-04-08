<?php
include_once('IAbstract.php');

class NorthRegion extends IAbstact{
    //deve retornar um valor decimal
    protected function giveCost(){
        return 210.54;
    }

    //deve retornar uma string
    protected function giveCity(){
        return "Moose Breath";
    }
}


?>