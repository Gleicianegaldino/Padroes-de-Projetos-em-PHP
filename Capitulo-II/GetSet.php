<?php
class GetSet{
private $dataWarehouse;

    function _Contruct(){

        $this->setter(200);
        $got= $this->getter();
        echo $got;
    }
    private function getter(){
        return $this->dataWarehouse;
    }
    private function setter($setValue){
        $this->dataWarehouse=$setValue;
    }
}
$worker=new GetSet();

?>