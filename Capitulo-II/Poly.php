<?php

interface ISpeed{
    function fast();
    function cruise();
    function slow();
}

class Jet implements ISpeed{
    function slow(){
        return 120;
    }
    function cruise(){
        return 1200;
    }
    function fast(){
        return 1500;
    }
}

class Car implements ISpeed{
    function slow(){
        $carSlow=15;
        return $carSlow;
    }

    function cruise(){
        $carCruise=65;
        return $carCruise;
    }
    function fast(){
        $carFast=110;
        return $carFast;
    }
}

$f22=new Jet();
$jetSlow=$f22->slow();
$jetCruise=$f22->cruise();
$jetFast=$f22->fast();

echo "\n" . "My jet can take off at $jetSlow mph and cruises at $jetCruise mph.
However, I can crank it up to $jetFast mph if I'm in a hurry" . "\n";

$ford=new Car();
$fordSlow=$ford->slow();
$fordCruise=$ford->cruise();
$fordFast=$ford->fast();

echo "\n". "My car pokes along at $fordSlow mph in a school zone and cruises at $fordCruise
mph on the highway. However, I can crack it up to $fordFast mph if I'm in a hurry." . "\n";
?>