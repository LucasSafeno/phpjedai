<?php 

	abstract class Teste{
		/**
		 * Uma classe que serve apenas para ser herdada. Não pode ser instanciada
		 */
		
		public function func1(){
			echo "Chamando função 1";
		}

		//abstract function func2(); // precisa criar na classe herdada

	}// Teste

	class Principal2{
		public static function outroMetodoEstatico(){
			echo "Metodo 2";
		}
	} // Principal2


	class Principal extends Teste{

		public function func2(){
			echo "chamando função 2";
		} // func2


		public static function metodoestatico(){
			echo "Método estático";
		}

		public function funcao(){
			//Principal::metodoestatico();
			self::metodoestatico();
			Principal2::outroMetodoEstatico();
			
		}// funcao()

	}// Principal

	$principal = new Principal();
	//$principal->func1();
	//$principal->func2();
	//Principal::metodoestatico();
	$principal->funcao();
 ?>