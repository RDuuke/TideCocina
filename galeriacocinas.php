<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Galeria Cocina</title>
	<link rel="stylesheet" href="css/ed-grid.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/lib/bootstrap.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/style.css">
	<style>
		.myclasspopup{
			width: 50%;
		    margin: 2% auto;
		    position: relative;
		}
		html, body{
			background: transparent;
		}
		.menuFixed{
			position: relative;
		}
		.slide {
	    	margin-top: 0px; 
		}
		.fondo_cocina{
			background-attachment: fixed;
			background-repeat: no-repeat;
			background-size: cover;
		}
		.btn-accion {
		    background-image: url(../images/boton_votos.png) !important;
		    background-size: cover;
		    margin: 6px 0 3px 6px;
		    width: 97%;
		    padding: 20px 0;
		}
	</style>
</head>
<body class="fondo_cocina">
	<div class="menuFixed-Main">
		<div class="menuFixed">
			<div class="container">
				<div class="row">
					<nav class="col-sm-12 col-md-12 navbar navbar-default navbar-static-top">
						<div class="collapse navbar-collapse menu" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="/">Inicio</a></li>
								<li><a href="/">¿Cómo participar?</a></li>
								<li><a href="cocina.php">CREA TU COCINA</a></li>
								<li><a href="/#productos">Nuestros <br> productos</a></li>
								<li><a href="/#premio">Premio</a></li>
								<li><a href="/" id="termino" class="mTop">Términos y <br>condiciones</a></li>
								<li><a href="/#contacto" id="contacto" class="line-height">Contacto</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
		<img src="images/banner_galeria.png" class="total"alt="">
	<div class="ed-container total">
		<div class="j-separator-40"></div>
		<div class="ed-item base-100 movil-100 tablet-1-3 web-1-3 carga_cocina_imagen">
			
		</div>
	</div>
	<div class="popup_coocina" id="salir_popup_cocina">
		<div class="salir_popup_cocinas">
			<span class="salir" id="salir_popup_cocina">X</span>
		</div>
		<div class="cont-cocinas-galleri myclasspopup"> 
			<img id="imagen_popup_galeria"src="images/1.jpg" alt="">
			<div class="j-separator-20"></div>
			<div class="ed-container total"> 
				<div class="ed-item base-100 movil-100 tablet-70 web-70"> 
					<p class="color_titulo_registro size_nombres" id="nombre_participante"></p>
				</div>
				<div class="ed-item base-100 movil-100 tablet-30 web-30 no-padding">
					<p class="votos size_nombres" id="votos"></p>
				</div>
			</div>
		</div>
	</div>
	<div class="popup_captura_correo" id="formulario_correo">
		<div class="myclasspopup"> 
			<div class="j-separator-20"></div>
			<div class="ventana">
				<div class="j-separator-40"></div>
				<h1 class="total text-center color-fuente ">! Ingresa tu correo para poder votar ¡</h1>
				<div class="j-separator-40"></div>
				<input type="email" placeholder="Correo Votante" class="campo" id="id_correo_votante">
				<div class="j-separator-40"></div>
				<div class="text-center salirventana"> 
					<button class="btn btn-danger Salir_ventana_correo">cancelar</button>
					<button class="btn btn-success btn_captura_correo">Aceptar</button>
				</div>
				<div class="j-separator-40"></div>
			</div>
		</div>
	</div>
	<input type="hidden" id="votante_campo">
</body>
<script src="js/lib/jquery.min.js"></script>
<script src="js/functions.js"></script>
<script src="js/main.js"></script>
</html>