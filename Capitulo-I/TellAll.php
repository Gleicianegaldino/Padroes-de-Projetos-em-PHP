<?php

//A classe TellALl prover informações sobre o agente que está
//visualizando a página PHP.

class TellAll{
    private $userAgent;

    public function __construct(){
        $this->userAgent=$_SERVER['HTTP_USER_AGENT'];
        echo $this->userAgent;
    }
}

$tellAll=new $TellAll();
?>