<?php
    include('Exemplo.class.php');
    $exemplo = new Exemplo(); // instancia de obj

    $exemplo->setVar1('Lucas');
    echo $exemplo->pegaVar1();

    echo "<br>";

    $exemplo2 = new Exemplo();
    $exemplo2->setVar1('Tenório');
    echo $exemplo2->pegaVar1()
    
    //$exemplo->var1 = 1; -> erro fatal

    //echo $exemplo->var2 = "Lucas";

    /*$exemplo2 = new Exemplo();
    echo $exemplo2->var2 = 'João';

    echo "<br>";

    $exemplo3 = new Exemplo();
    echo Exemplo::$var3 = 'Static'; */
?>