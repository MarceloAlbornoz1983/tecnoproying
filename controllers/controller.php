<?php 

class MvcController{
	
	public function pagina(){
		include "views/plantilla.php";
	}

	public function enlacesPaginasController(){
		if(isset( $_GET['action'])){
			
			$enlaces = $_GET['action'];
		
		}
		else{
			$enlaces = "index";
		}
		$respuesta = Paginas::enlacesPaginasModel($enlaces);
		include $respuesta;
	}
}


 ?>