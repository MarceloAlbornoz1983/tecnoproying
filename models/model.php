<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){


		if($enlaces == "inicio" || 
		   $enlaces == "servicios" || 
		   $enlaces == "nosotros" || 
		   $enlaces == "contacto" ||
		   $enlaces == "tableros" ||
		   $enlaces == "impermeabilizacion" ||
		   $enlaces == "instalacion_reparacion" ||
		   $enlaces == "mantencion_bombas" ||
		   $enlaces == "mantencion_pozos" ||
		   $enlaces == "venta_estanques"){

			$module =  'views/modules/'.$enlaces.'.php';
		
		}

		else if($enlaces == "index"){

			$module =  "views/modules/inicio.php";
		
		}

		
		else{

			$module =  "views/modules/inicio.php";

		}
		
		return $module;

	}

}
