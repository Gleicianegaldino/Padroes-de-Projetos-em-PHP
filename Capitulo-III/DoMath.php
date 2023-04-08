<?php
class DoMath{
    private $sum;
    private $quotient;

    public function simpleAdd($first, $second){
        $this->sum=($first + $second);
        return $this->sum;
    }

    public function simpleDevide($devidend, $divisor){
        $this->quotient=($devidend/$divisor);
        return $this->quotient;
    }
}

?>