<?php
abstract class IAbstact{
    //Ppropriedades disponível a todas as implementações
    protected $valueNow;

    //Todas as implementações evem incluir os 2 métodos a seguir.
    //deve retornar um valor decimal
    abstract protected function giveCost();

    //deve retornar uma string
    abstract protected function giveCity();

    //esta função concreta está disponível a todas as implementações da classe
    //sem sobrescrita do conteúdo
    public function displayShow(){
        $stringCost = $this->giveCost();
        $stringCost = (string)$stringCost;
        $allTogether=("Cost: $ " . $stringCost . " For " . $this->giveCity());
        
        return $allTogether;

    }
}

?>