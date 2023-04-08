<?php
include_once('FurryPets.php');

class Cats extends FurryPets{
    function __construct() {

        echo "Cats" . $this->fourlegs() . "\n";
        echo $this->makesSound("Meow, purrr") . "\n";
        echo $this->ownsHouse() . "\n";
    }
    private function ownsHouse(){
        return "I'll just walk on this keyboard" . "\n";
    }
}

?>