<?php
include_once("DoMath.php");

class InheritMatch extends DoMath{

    private $textOut;
    private $fullFace;

    public function numToText($num){
        $this->textOut= (string)$num;
        return $this->textOut;
    }

    public function addFace($face, $msg){
        $this->fullFace= " $face $msg ";
        return $this->fullFace;
    }
}

?>