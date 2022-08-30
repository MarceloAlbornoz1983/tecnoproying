<?php
#Para ver errores
#error_reporting(E_ALL);
#ini_set('display_errors', '1');
require_once "models/model.php";
require_once "controllers/controller.php";

$mvc = new MvcController();
$mvc -> pagina();

?>