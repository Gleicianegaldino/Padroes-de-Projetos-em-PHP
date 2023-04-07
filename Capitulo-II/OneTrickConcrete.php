<?php
include_once('OneTrickAbstract.php');

class OneTrickAConcrete extends OneTrickAbstract{

    public function trick($whatever)
    {
        $this->storeHere="An abstract property";
        return $whatever . $this->storeHere;
    }
}
    $worker=new OneTrickAConcrete();
    echo $worker->trick("From an abstract origin...");



//public fuction trick($whatever){
// echo $whatever;
//}


//public fucntion trick($whatever){
// $half = $whatever;
//}

//public function trick($whatever){
// $this->storeHere=25;
// $quarter = $whatever * 100;
// return ($quarter / $this->storeHere);
//}
?>