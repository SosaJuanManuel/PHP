<?php

//clase: las clases son modelos que se utilizan para crear objetos que comparten un mismo comportamiento, estado e identidad.

class Automovil
{
	//propiedades:
	// son las caracteristicas que puede tener un objeto.

	//private
	public $marca;
	public $modelo;

	// metodo;
	// es el algoritmo asociado a un objeto que indica la capacidad de lo que este puede hacer.la unica diferencia en tre funcion y metodo, es que llamamos metodo a la funciones de una clase (en la poo), mientras que llamamos funciones, a los algoritmos de la programacion estructurada.

	public function mostrar()
	{
		echo "<p> HOLA, soy un $this->marca, modelo $this->modelo</p>";
	}

}


//objeto
//entidad provista de metodos o mensajes a los cuales responde propiedades con valores concretos

$a = new Automovil();
$a -> marca = "Toyota";
$a -> modelo = "Corolla";
$a -> mostrar();

$b = new Automovil();
$b -> marca = "Ford";
$b -> modelo = "Fiesta";
$b -> mostrar();

/*principios de la poo que se cumplen en este ejemplo:

abstraccion: nuevos tipos de datos ( el que tu quieras lo creas)
encapsulacion: organizar el codigo en grupos logicos
ocultamiento: ocultar detalles de implementacion y exponer solo los detalles que sean necesarios para el resto del sistema
*/

?>