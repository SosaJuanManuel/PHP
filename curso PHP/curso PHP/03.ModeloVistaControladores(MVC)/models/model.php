<?php

class EnlacesPaginas
{
	public function enlacesPaginasModel($enlacesModel)
	{
		if($enlacesModel == "inicio" || $enlacesModel == "nosotros" || $enlacesModel == "servicios" || $enlacesModel == "contacto" )
		{
			$module = "views/modules/".$enlacesModel.".php";
		}


		return $module;
	}
}

?>