<nav class="fh5co-nav" role="navigation">
	<div class="container-wrap">
		<div class="top-menu">
			<div class="row">
				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="inicio"><img src="images/logos/logo-nav3.png" alt="tecnoproying"></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul class="navmenu">
						<li id="ini" class="<?php $host = $_SERVER["REQUEST_URI"]; if($host == '/inicio' || $host == '/') {echo 'active';}; ?>"><a  href="inicio">Inicio</a></li>
						<li id="serv" class="has-dropdown <?php $host = $_SERVER["REQUEST_URI"]; if(
									$host == '/servicios' ||
									$host == '/mantencion_bombas' ||
									$host == '/mantencion_pozos' ||
									$host == '/impermeabilizacion' ||
									$host == '/instalacion_reparacion' ||
									$host == '/tableros' ||
							$host == '/venta_estanques') {echo 'active';}; ?>">
							<a href="servicios">Servicios</a>
							<ul class="dropdown">
								<li><a href="mantencion_bombas">Mantención de sala de bombas</a></li>
								<li><a href="mantencion_pozos">Mantención de pozos</a></li>
								<li><a href="impermeabilizacion">Impermeabilización de Estanques</a></li>
								<li><a href="instalacion_reparacion">Instalación y reparación de motobombas</a></li>
								<li><a href="tableros">Diseño de tableros eléctricos</a></li>
								<li><a href="venta_estanques">Venta de estanques hidroneumáticos</a></li>
							</ul>
						</li>
						<li class="<?php $host = $_SERVER["REQUEST_URI"]; if($host == '/nosotros') {echo 'active';}; ?>"><a href="nosotros">Nosotros</a></li>
						<li class="<?php $host = $_SERVER["REQUEST_URI"]; if($host == '/contacto') {echo 'active';}; ?>"><a href="contacto">Contacto</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>
</nav>