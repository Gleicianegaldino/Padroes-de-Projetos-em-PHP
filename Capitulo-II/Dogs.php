<?php
include_once('FurryPets.php');

class Dogs extends FurryPets{
    function __construct(){

        echo "Dogs" . $this->fourlegs() . "\n";
        echo $this->makesSound("Woof, woof") . "\n";
        echo $this->guardsHouse() . "\n";
    }
    private function guardsHouse(){
        return "Grrrrrr" . "\n";
    }
}


?>