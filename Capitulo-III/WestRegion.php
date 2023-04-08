<?php
include_once('IAbstract.php');

class WestRegion extends IAbstact{
    //deve retornar um valor decimal
    protected function giveCost(){
        $solarSavings=2;
        $this->valueNow=210.54/$solarSavings;
        return $this->valueNow;
    }

    //deve rtetornar uma string
    protected function giveCity(){
        return "Rattlesnake Gulch";
    }
}


?>