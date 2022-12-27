<?php
class Exemplo{
    private $var1;
    public $var2;
    
/*
    public static $var3;

    // Funciona em qualquer lugar
    public function metodo(){

    }

    // Funciona apenas dentro da classe
    private function metodo2(){

    }
*/

    public function setVar1($var1){
        $this->var1 = $var1;
    }

    public function pegaVar1(){
        return $this->var1;
    }
}// Exemplo

?>