<?php
include_once('IMethoHolder.php');

class ImplementAlpha implements IMethoHolder {
    public function getInfo($info){
        echo "This is NEWS!" . $info . " \n";

    }

    public function sedInfo($info){
        return $info;
    }
    public function calculate($first, $second){
        $calculated = $first * $second;
        return $calculated;
    }

    public function useMethods(){
        $this->getInfo("The sky is falling...");
        echo $this->sedInfo("Vote for senator Snort!") . " \n";
        echo "You make $ " . $this->calculate(20,15) . " in your part-time job" .  "\n";
    }
}

$worker=new ImplementAlpha();
$worker->useMethods();

?>