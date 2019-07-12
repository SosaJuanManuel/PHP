<?php

class MvcController
{

	// llamada a la plantilla
	//------------------------------------



	public function plantilla()
	{

		include "views/template.php";
	}

	// interaccion del usuario
	//------------------------------------

	public function enlacesPaginasController()
	{
		$enlacesController = $_GET["action"];


		$respuesta = EnlacesPaginas:: enlacesPaginasModel($enlacesController);

		include $respuesta;

	}
}

?>