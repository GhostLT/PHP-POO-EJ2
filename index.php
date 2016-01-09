<?php 

//nombre de la Clase
class Automovil{

	//propiedades o stributos color,velocidad,motor
	private $color;
	private $velocidad;
	private $motor;
	//metodos arrancan,frenan
	//con parametros
	public function Arrancar($a,$b){
		//la velocidad que asigne en la variable va a ser igual a a ojo no lleva signo de pesos
		//solo se pueden asignar con this cuando yo este dentro de la clase
		$this->velocidad = $a;
		$this->motor = $b;
		//ojo en vez de poner return puedes poner comas
		echo "Arranca a la velocidad de" , $this->velocidad , "Ya que su motor es de " , $this->motor;
	}

	public function DeterminarColor($color){
		$this->color = $color;
		echo "y tiene un color de", $this->color;
	}

	public function Frenar(){
		return "Ha frenado";
	}


}


//para llamar una clase se llama al objeto ojo cuando lo voy a llamaragrego parentesis
$ferrari = new Automovil();   //crear una instancia
//pasamos parametros
$ferrari-> Arrancar('200km/h','12 cilindros');
//asignamos valores
$ferrari->DeterminarColor('rojo');
//llamamos al metodo
$ferrari->Frenar();

//creamos otro objeto y podemos llamar las mismas clases
$porche = new Automovil();


 ?>