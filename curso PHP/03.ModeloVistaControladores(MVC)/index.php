<?php

/*el index: en el mostraremos la salida de las vistas al usuario y tambien a traves de el enviaremos las distintas acciones que el usuario envie al controlador*/

require_once "controllers/controller.php";

//el require establece que el codigo del archivo invocado es requerido, es decir, es obligatorio para el funcionamiento del programa. por ello, sin el archivo especificado en la funcion require() no se encuentra saltara un error "PHP Fatal error" y el programa PHP se detendra.

#la version require_once() funcionan de la misma forma que sus respectivo, salvo que, al utilzar la version_once, se impide la carga de un musmo archivo mas de una vez.

# si requerimos el mismo codigo mas de uan vez corremos el riesgo de redeclaraciones de varibales, funciones o clases.

require_once "models/model.php";

$mvc =new MvcController();
$mvc -> plantilla();



?>