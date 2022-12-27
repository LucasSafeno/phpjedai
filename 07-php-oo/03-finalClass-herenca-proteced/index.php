<?php
    // classe finais não pode ser herdadas
    class Filha{

        /*
        protected function funcaoTeste(){
            echo "Função teste";
        }
        Pode ser usdas nas classes filhas
        */

        /*
        private function funcaoTeste(){
            echo "Função teeste";
        }
        Disonivel apenas para propria classe
        */


        public function printHello(){
            echo "Hello World";
        }// printHello
    } // Filha


    class Pai extends Filha{

        public function printHello(){
            parent::printHello();
        }
        public function mostrarTchau(){
           
            echo "Tchau mundo";
        }
    } // Pai

    //$pai = new Pai();
    //$pai->mostrarTchau();

    echo "<br>";


    $filha = new Filha();
    $filha->printHello();

?>