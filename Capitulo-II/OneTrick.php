<?php

class OneTrack{
    private $storeHere;

    public function trick($whatever){

        $this->storeHere=$whatever;

        return $this->storeHere;
    }
}
    
    $doIt=new OneTrack();
    $dataNow+$doIt->trick("This is perfect.");
    echo $dataNow;

?>