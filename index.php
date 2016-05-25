<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->

<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->

<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->

<!--[if gt IE 8]><!-->

<html class="no-js" lang="es"> <!--<![endif]-->

<head>

	<meta charset="UTF-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" href="css/ed-grid.css">

	<title>Tide</title>

	<meta name="description" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- ======= FONT ======= -->



	<!-- ======= CSS ======= -->

	<link rel="stylesheet" href="css/lib/bootstrap.css">

	<!-- <link rel="stylesheet" href="css/lib/bootstrap.min.css"> -->

	<link rel="stylesheet" href="css/style.css">

	<link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="js/jquery.mCustomScrollbar.css">

	<link rel="shortcut icon" href="tide.ico">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/jquery.bxslider.css">

	<script>

		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');



		ga('create', 'UA-46752858-10', 'auto');

		ga('send', 'pageview');



	</script>

</head>

<body>

<!--[if lt IE 8]>

<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

<![endif]-->

<div>

	<div class="menuFixed-Main">

		<div class="menuFixed">

			<div class="container">

				<div class="row">
					<nav class="col-sm-12 col-md-12 navbar navbar-default navbar-static-top">

						<div class="navbar-header">

							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

								<span class="sr-only">Toggle navigation</span>

								<span class="icon-bar"></span>

								<span class="icon-bar"></span>

								<span class="icon-bar"></span>

							</button>

						</div>

						<div class="collapse navbar-collapse menu" id="bs-example-navbar-collapse-1">

							<ul class="nav navbar-nav">

								<li><a href="#inicio" class="baja sube line-height">Inicio</a></li>

								<li><a href="#inicio" class="baja">¿Cómo participar?</a></li>

								<li><a href="cocina.php">CREA TU COCINA</a></li>

								<li><a href="#productos" class="baja">Nuestros <br> productos</a></li>

								<li><a href="#premio" class="baja line-height">Premio</a></li>

								<li><a href="#" id="termino" class="mTop">Términos y <br>condiciones</a></li>

								<li><a href="#contacto" id="contacto" class="line-height">Contacto</a></li>

							</ul>

						</div>

					</nav>

				</div>

			</div>

		</div>

	</div>

	<div class="section section-top">
		<div class="init fondo">
			<!-- <img class="estatua" src="images/imagenes_tide/fondo_2.png"> -->
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 pull-right init-box--right">
						<div class="ed-container total fondo-registro" id="esconder">
						<div class="j-separator-20"></div>
						<div class="ed-container p-relativa">
							<div class="ed-item base-50 movil-50 tablet-15 web-15">
								<img src="images/logo_tide.png" alt="">
							</div>
							<div class="ed-item base-50 movil-50 tablet-15 web-15">
								<img src="images/casade_logo.png" alt="">
							</div>
							<div class="ed-item base-70 movil-70 tablet-50 web-50 text-center">
								<h1 class="color_titulo_registro">Ingresa tus datos</h1>
							</div>
							<div class="ed-item base-30 movil-30 tablet-20 web-20 text-center"> 
								<span class="blanco fuente rigth p-apsoluta padding">* obligatorios</span>
							</div>
							<div class="j-separator-20"></div>
							<div class="j-separator-20"></div>
							<form class="total" id="formulario_registro">
								<div class="ed-container total">
									<div class="ed-item base-100 movil-100 tablet-25 web-25">
										<label class="fuente blanco tam" for="">Número de documento*</label>
									</div>
									<div class="ed-item base-100 movil-100 tablet-25 web-25">
										<input  autocomplete="off" name="document" type="text" class="campo fuente" id="cedula">
									</div>
									<div class="ed-item base-100 movil-100 tablet-25 web-25">
										<label class="fuente blanco tam" for="">Tipo de documento*</label>
									</div>
									<div class="ed-item base-100 movil-100 tablet-25 web-25">
										<select class="campo fuente" name="document_type"id="t_doc">
											<option value="">Seleccione un documento</option>
											<option value="CC">CC</option>
											<option value="NP">N° Pasaporte</option>
										</select>
									</div>
									<div class="j-separator-20"></div>
									<div class="ed-item base-100 movil-100 tablet-10 web-10">
										<label class="fuente blanco tam" for="">Nombres*</label>
									</div>
									<div class="ed-item base-100 movil-100 tablet-40 web-40">
										<input  autocomplete="off" name="names" type="text"class="campo fuente" id="nombre">
									</div>
									<div class="ed-item base-100 movil-100 tablet-10 web-10">
										<label class="fuente blanco tam" for="">Apellidos*</label>
									</div>
									<div class="ed-item base-100 movil-100 tablet-40 web-40">
										<input  autocomplete="off" type="text"class="campo fuente" name="lastname" id="apellido">
									</div>
									<div class="j-separator-20"></div>
									<div class="ed-item base-100 movil-100 tablet-20 web-20">
										<label class="fuente blanco tam" for="">Fecha de nacimiento*</label>
									</div>
									<div class="ed-item base-100 movil-100 tablet-15 web-15">
										<input  autocomplete="off" type="number"class="campo fuente" name="dia" placeholder="Día" id="dia">
									</div>
									<div class="ed-item base-100 movil-100 tablet-15 web-15">
										<select name="mes"class="campo fuente" id="mes">
											<option value="">Mes</option>	
											<option value="01">Enero</option>
											<option value="02">Febrero</option>
											<option value="03">Marzo</option>
											<option value="04">Abril</option>
											<option value="05">Mayo</option>
											<option value="06">Junio</option>
											<option value="07">Julio</option>
											<option value="08">Agosto</option>
											<option value="09">Septiembre</option>
											<option value="10">Octubre</option>
											<option value="11">Noviembre</option>
											<option value="12">Diciembre</option>
										</select>
									</div>
									<div class="ed-item base-100 movil-100 tablet-15 web-15">
										<input  autocomplete="off" type="number"class="campo fuente" name="anno" id="anno"placeholder="año">
									</div>
									<div class="ed-item base-100 movil-100 tablet-15 web-15">
										<label class="fuente blanco tam" for="">Genero*</label>
									</div>
									<div class="ed-item base-100 movil-100 tablet-20 web-20">
										<select name="gender" class="campo fuente" id="genero">
											<option value="">Genero</option>
											<option value="F">Femenino</option>
											<option value="M">Masculino</option>	
										</select>
									</div>
									<div class="j-separator-20"></div>
									<div class="ed-item base-100 movil-100 tablet-10 web-10">
										<label class="fuente blanco tam" for="">Teléfono*</label>
									</div>
									<div class="ed-item base-100 movil-100 tablet-35 web-35">
										<input  autocomplete="off" type="number" name="telephone" class="campo fuente" id="telefono">
									</div>
									<div class="ed-item base-100 movil-100 tablet-20 web-20">
										<label class="fuente blanco tam" for="">Correo electrónico*</label>
									</div>
									<div class="ed-item base-100 movil-100 tablet-35 web-35">
										<input  autocomplete="off" type="email" name="email" class="campo fuente" id="email">
									</div>
									<div class="j-separator-20"></div>
									<div class="ed-item base-100 movil-100 tablet-20 web-20">
										<label class="fuente blanco tam" for="">Departamento*</label>
									</div>
									<div class="ed-item base-100 movil-100 tablet-20 web-20" >
										<select name="department"class="campo fuente" id="departament" ></select>
									</div>
									<div class="ed-item base-100 movil-100 tablet-20 web-20">
										<label class="fuente blanco tam" for="">Ciudad*</label>
									</div>
									<div class="ed-item base-100 movil-100 tablet-20 web-20">
										<select name="city"class="campo fuente" id="city"></select>
									</div>
									<div class="j-separator-20"></div>
									<div class="ed-item base-100 movil-100 tablet-50 web-50">
										<label class="fuente blanco tam" for="">¿Dónde realizaste la compra?*</label>
									</div>
									<div class="ed-item base-100 movil-100 tablet-50 web-50">
										<select name="shop"class="campo fuente" id="ciudades">
											<option value="EXITO" >EXITO</option>
											<option value="CARULLA" >CARULLA</option>	
											<option value="JUMBO" >JUMBO</option>	
											<option value="CONSUMO" >CONSUMO</option>
											<option value="EURO">EURO</option>
											<option value="LA 14">LA 14</option>
											<option value="OLIMPICALIREM">OLIMPICALIREM</option>
										</select>
									</div>
									<div class="j-separator-10"></div>
									<div class="ed-item base-100 movil-100 tablet-100 web-100">
										<label class="fuente blanco tam" for="">Producto(s) que compraste* (puedes elegir múltiples opciones)</label>
									</div>
								</div>
									<div class="j-separator-10"></div>
									<div class="ed-container my-clase"> 
										<div class="ed-item base-100 movil-100 tablet-20 web-20">
											<input  class="check" id="politicas" type="checkbox" name="products[]" value="1"><label class="fuente blanco tam_check" for="">Tide Original</label>
											<div class="j-separator-10"></div>
											<input  class="check" id="politicas" type="checkbox" name="products[]" value="6"><label class="fuente blanco tam_check" for="">Tide Original HE</label>
										</div>
										<div class="ed-item base-100 movil-100 tablet-20 web-20">
											<input  class="check" id="politicas" type="checkbox" name="products[]" value="2"><label class="fuente blanco tam_check" for="">Tide Sport</label>
											<div class="j-separator-10"></div>
											<input  class="check" id="politicas" type="checkbox" name="products[]" value="7"><label class="fuente blanco tam_check" for="">Tide con Downy</label>
										</div>
										<div class="ed-item base-100 movil-100 tablet-20 web-20">
											<input  class="check" id="politicas" type="checkbox" name="products[]" value="3"><label class="fuente blanco tam_check" for="">Tide Bleach</label>
											<div class="j-separator-10"></div>
											<input  class="check" id="politicas" type="checkbox" name="products[]" value="8"><label class="fuente blanco tam_check" for="">Tide Free & Gentle</label>
										</div>
										<div class="ed-item base-100 movil-100 tablet-20 web-20">
											<input  class="check" id="politicas" type="checkbox" name="products[]" value="4"><label class="fuente blanco tam_check" for="">Tide To Go</label>
											<div class="j-separator-10"></div>
											<input  class="check" id="politicas" type="checkbox" name="products[]" value="9"><label class="fuente blanco tam_check" for="">Tide Febreze Spring & Renewal</label>
										</div>
										<div class="ed-item base-100 movil-100 tablet-20 web-20">
											<input  class="check" id="politicas" type="checkbox" name="products[]" value="5"><label class="fuente blanco tam_check" for="">Tide Stain Release</label>
											<div class="j-separator-10"></div>
											<input  class="check" id="politicas" type="checkbox" name="products[]" vlule="10"><label class="fuente blanco tam_check" for="">Tide Pods</label>
										</div>
									</div>
								<div class="ed-container">
									<div class="j-separator-40"></div>
									<hr class="blanco linea">
									<div class="j-separator-10"></div>
									<div class="ed-item base-100 movil-100 tablet-70 web-70">
										<input  class="check fuente blanco tam" name="terms" id="terminos" type="checkbox" value="1"><label class="fuente blanco tam" for="" >Acepta los términos y condiciones de la actividad</label><br>
										<input  class="check" id="politicas" name="authorization_info" type="checkbox" value="1"><label class="fuente blanco tam" for="">Acepta la política de tratamiento de datos personales de Prebel</label>
									</div>
									<div class="ed-item base-100 movil-100 tablet-30 web-30">
										<button class=" btn btn-success boton mayuscula"id="enviaform">Continuar</button>
									</div>
									<div class="j-separator-40"></div>
								</div>
							</form>
						</div>
					</div>
					<div id="ingresa-codigo">
						<div class="ed-container p-relativa">
							<div class="ed-item base-50 movil-50 tablet-15 web-15">
								<img src="images/logo_tide.png" alt="">
							</div>
							<div class="ed-item base-50 movil-50 tablet-15 web-15">
								<img src="images/casade_logo.png" alt="">
							</div>
						</div>
						<div class="ventana">
							<div class="j-separator-40"></div>
							<h1 class="total text-center color-fuente ">Ingresa tú código</h1>
							<div class="j-separator-40"></div>
							<form action="" id="ingresaCodigo"> 
								<input  autocomplete="off" type="text" name="cedRegistro" class="campo fuente" id="cedRegistro" placeholder="Cédula">
								<div class="j-separator-10"></div>
								<input  autocomplete="off" type="text" name="codigo" class="campo fuente" id="codigo" placeholder="Código">
								<input type="hidden" id="id_user">
							</form>
							<div class="j-separator-40"></div>
							<div class="text-center"> 
								<button class="btn btn-success" id="btn-envia-codigo">Enviar</button>
							</div>
							<div class="j-separator-40"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

			<div class="init-bottom">

				<div class="container">

					<div class="row">

						<figure class="center-block init-bottom--image">

							<img class="img-responsive" src="images/imagenes_tide/paquete_tyde.png" alt="" />

						</figure>

						<div class="col-md-2 init-bottom--logo">

							<img src="images/imagenes_tide/logo_coljuegos.png" class="img img-responsive center-block" alt="">

						</div>

					</div>

				</div>

			</div>

		</div>

		<div class="box box-wrap terminos"> <!-- box-wrap - terminos -->

			<div class="container box-wrapContainer">

				<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 box-main">

					<p class="center-block box-main--title">Términos y condiciones</p>

					<div class="terminosWrapper" style="height:200px">

						<p class="text-center textoTerminos box-main--content">

							<strong style="margin-left:10%; font-size:20px">“TIDE TE LLEVA A NUEVA YORK”</strong>

						<li class="text-justify">1.	Por la compra de cualquier referencia de detergentes marca TIDE, participa en el sorteo por un (1) viaje a Nueva York, más una (1) tarjeta Bono Bancolombia con UN MILLÓN QUINIENTOS MIL PESOS ($1.500.000). </li><br>

						<li class="text-justify">2.	Únicamente podrá participar mayores de edad. No podrán participar en la actividad los empleados de Prebel S.A., ni sus familiares hasta el 4°grado de consanguinidad, 2° de afinidad y único civil.</li><br>

						<li class="text-justify">3.	La promoción aplica por compras en cualquiera de los puntos de venta Éxito, Carulla, Jumbo, Olímpica, La 14, Homecenter o Euro, entre el 15 de noviembre y el 31 de diciembre de 2015. La promoción no aplica por compras en Éxito Express y/o Carulla Express, Éxito.com y/o Carulla.com. </li><br>

						<li class="text-justify">4.	Para participar, el consumidor deberá raspar el Sticker que se encuentra pegado al producto que compró, allí encontrará un código, que deberá ingresar, junto con sus datos personales, a la página web del concurso www.ganaconmytide.com</li><br>

						<li class="text-justify">5.	El participante deberá ingresar sus datos personales, aceptar la Política de Tratamiento de Datos Personales y los términos y condiciones del presente concurso, para poder ingresar su código.  </li><br>

						<li class="text-justify">6.	Los consumidores podrán ingresar tantos códigos, como productos compren.  </li><br>

						<li class="text-justify">7.	Los consumidores deberán guardar la factura de compra, correspondiente al código que ingresan en la página, como requisito indispensable para ser ganadores del premio. </li><br>

						<li class="text-justify">8.	El premio que será entregado es un (1) viaje a Nueva York, para dos (2) personas, que incluye: i) tiquetes ida y regreso para dos personas, desde cualquier ciudad del territorio colombiano, hasta la ciudad de Nueva York, Estados Unidos; ii) Alojamiento doble 4 días, 3 noches en hotel 3 estrellas, sin desayuno incluido; iii) Tour por la ciudad para dos personas. iv) Una tarjeta Bono Bancolombia por UN MILLÓN QUINIENTOS MIL PESOS ($1.500.000). La tarjeta no podrá ser utilizada para retirar dinero en Efectivo, únicamente podrá ser utilizada en establecimientos de comercio que acepte este tipo de pago.  El premio NO Incluye: i) Gatos de alimentación y/o transporte en Nueva York; ii) Gastos de salida del país; iii) Gastos de Visa y/o pasaporte digital vigente, seguros, entre ellos Assist Card; iv) Cambios en tiquetes aéreos y/u hoteles o cualquier otro gasto o impuesto no especificado en los presentes términos y condiciones.</li><br>

						<li class="text-justify">9.	Las fechas del viaje están sujetas a disponibilidad en tiquetes y hoteles. Solo podrá redimirse entre enero y mayo de 2016 y/o enero y mayo de 2017, este último mes será el plazo máximo para redimir el tiquete. </li><br>

						<li class="text-justify">10. El sorteo se realizará en las instalaciones de la sede principal de Prebel S.A., el día 15 de enero de 2016, en presencia de una persona de Auditoría y de Mercadeo de la compañía y de un delegado de la primera autoridad administrativa de la ciudad de Medellín. </li><br>

						<li class="text-justify">11. El sistema diseñado para realizar la actividad, arrojará un (1) posible ganador y cinco (5) suplentes. </li><br>

						<li class="text-justify">12. El personal de Prebel S.A. se comunicará directamente con el posible ganador. </li><br>

						<li class="text-justify">13. Únicamente ostentará la calidad de ganador, quien: i) Conteste a cualquiera de los tres (3) intentos de llamada que realice Prebel S.A; ii) Envíe la fotocopia de su cédula de ciudadanía, la fotocopia de la factura de compra del producto correspondiente al código ganador y la fotocopia del pasaporte digital y visa Americana, vigentes al 31 de diciembre de 2017. Todos los documentos deberán ser enviados dentro de los 10 días hábiles siguientes a la llamada telefónica.  </li><br>

						<li class="text-justify">14. En caso de que el posible ganador no cumpla con cualquiera de los requisitos detallados en el punto anterior,  no podrá ostentar la calidad de ganador y se procederá a realizar el mismo procedimiento con los suplentes, en el orden en que fueron escogidos en el sorteo, hasta que se tenga un ganador de la actividad promocional. </li><br>

						<li class="text-justify">15. El ganador cuentan con un (1) año para reclamar el premio, contado a partir de que se acredite su calidad. Prebel S.A. cuenta con treinta (30) días para hacer entrega del premio, contados a partir de que el ganador realice la reclamación.</li><br>

						<li class="text-justify">16. Tanto del trámite de realización del sorteo, como de la entrega de premios, se levantarán las respectivas actas que serán enviadas a Coljuegos dentro de los cinco (5) días siguientes a que se surta el respectivo trámite.  </li><br>

						<li class="text-justify">17. El premio podrá ser transferible, pero no redimible en dinero. En caso de transferencia, tanto el ganador como la persona a quien se le transfiere, deberán cumplir con los requisitos de entrega detallados en los presentes términos y condiciones.  </li><br>

						<li class="text-justify">18. Los impuestos que se generen por la entrega del premio serán asumidos por Prebel. </li><br>

						<li class="text-justify">19. Con la participación en esta actividad promocional autorizo a Prebel S.A. a i) Utilizar mis datos personales y/o sensibles que fueron capturados o que sean capturados por cualquier medio, con ocasión de esta actividad; y a: ii) Consultar, almacenar, corregir, actualizar, modificar o eliminar la información entregada con ocasión de este concurso, para fines comerciales, administrativos y de información. No obstante, comprendo que puedo: i) Solicitar la modificación, actualización, rectificación o eliminación de mi información de las bases de datos de Prebel S.A; ii) Solicitar prueba de la autorización; iii) Ser informado de los usos aplicados a mis datos; iv) Presentar quejas por infracciones ante la SIC; v) Revocar mi autorización y/o solicitar la supresión de mis datos y su administración, en caso de vulneración de mis derechos y garantía constitucionales y legales; vi) Acceder en forma gratuita a mis datos personales y/o datos sensibles divulgados; y vii) Salvo en los casos expresamente autorizados, exigir la confidencialidad y la reserva de la información suministrada.</li><br>

						<li class="text-justify">20. Derechos de imagen: Con el hecho de participar en la promoción, los ganadores aceptan y autorizan que sus nombres e imágenes aparezcan en los programas, publicaciones y demás medios publicitarios y en general en todo material de divulgación con fines promocionales que Prebel S.A. desee hacer durante el evento o una vez finalizado el mismo, sin que ello implique la obligación de remunerarlos o compensarlos adicionalmente. Así mismo, renuncian a cualquier reclamo por derechos de imagen.</li><br>

						<li class="text-justify">21. En caso de haber motivos fundados de fuerza mayor, caso fortuito, o hechos de terceros, tales como desastres naturales, guerras, huelgas o disturbios, así como también situaciones que afecten el evento; o en caso de detectarse un fraude o intento de fraude en perjuicio de los puntos de venta participantes y/o de Prebel S.A., o los participantes de la misma, y/o de Prebel S.A., podrán modificar en todo o en parte este evento, así como suspenderlo temporal o permanentemente sin asumir ninguna responsabilidad al respecto.  En estos casos, el fundamento de las medidas que se adopten, así como las pruebas que demuestren la existencia de la causa invocada por el organizador estarán a disposición de cualquier interesado.</li><br>

						<li class="text-justify">22. Los participantes podrán consultar la Política de Tratamiento de Datos Personales en la página web de Prebel S.A: <a href="www.prebel.com" > www.prebel.com</a></li><br>



						</p>

					</div>



				</div>

				<div class="col-md-12 box-main--image"></div>

			</div>

		</div> <!-- end - box-wrap - terminos -->



		<div class="box box-wrap registrarse">

			<div class="container">

				<div class="row">

					<div class="col-sm-12 col-md-8 col-md-offset-2 no-padding">

						<form class="form form-inline formRegister" id="formRegister" action="datos.php?rg=1" method="post">

							<p class="center-block box-main--title">Ingresa tus datos</p>

							<div class="forml clearfix">

								<div class="col-sm-7 col-md-7 form-group">

									<label for="documento" class="etiqueta">Número de documento *</label>

									<input type="text" class="form-control " id="documento" onkeypress="return isNumber(event);" name="documento" placeholder="">

								</div>

								<div class="col-sm-5 col-md-5 form-group">

									<label for="tipo" class="etiqueta large">Tipo de documento *</label>

									<select name="tipo" class="form-control form-control--min" id="tipo" name="tipo">

										<option value=""></option>

										<option value="CC">Cedula de ciudadania</option>

										<option value="CE">Cedula de extrangeria</option>

										<option value="NIT">NIT</option>

									</select>

								</div>

								<div class="col-sm-6 col-md-6 form-group">

									<label for="nombre" class="etiqueta">Nombre *</label>

									<input type="text" class="form-control" id="nombre" name="nombre" onkeypress="return soloLetras(event)" >

								</div>

								<div class="col-sm-6 col-md-6 form-group">

									<label for="apellido" class="etiqueta etMargen">Apellidos *</label>

									<input type="text" class="form-control mediano" onkeypress="return soloLetras(event)" id="apellido" name="apellido">

								</div>

								<div class="col-sm-8 col-md-8 form-group">

									<label for="dia" class="etiqueta">Fecha de nacimiento *</label>

									<input type="text" class="form-control min" id="dia" name="dia" onkeypress="return isNumber(event);" minlength="1" maxlength="2" placeholder="Día">

									<select name="mes" class="form-control min" id="mes" name="mes" placeholder="Mes">

										<option value="">Mes</option>

										<option value="1">Enero</option>

										<option value="2">Febrero</option>

										<option value="3">Marzo</option>

										<option value="4">Abril</option>

										<option value="5">Mayo</option>

										<option value="6">Junio</option>

										<option value="7">Julio</option>

										<option value="8">Agosto</option>

										<option value="9">Septiembre</option>

										<option value="10">Octubre</option>

										<option value="11">Noviembre</option>

										<option value="12">Diciembre </option>

									</select>

									<input type="text" onkeypress="return isNumber(event);" class="form-control min" id="ano" name="ano" minlength="1" maxlength="4" placeholder="Año">

								</div>

								<div class="col-sm-4 col-md-4 form-group">

									<label for="genero" class="etiqueta etMargen">Género *</label>

									<select name="genero" class="form-control">

										<option value=""></option>

										<option value="M">Masculino</option>

										<option value="f">Femenino</option>

									</select>

								</div>

								<div class="col-sm-6 col-md-6 form-group">

									<label for="telefono" class="etiqueta">Teléfono *</label>

									<input type="text" class="form-control" id="telefono" name="telefono" onkeypress="return isNumber(event);" minlength="1" maxlength="10" placeholder="+57">

								</div>

								<div class="col-sm-6 col-md-6 form-group">

									<label for="correo" class="etiqueta">Correo electrónico *</label>

									<input type="mail" class="form-control correo" id="correo" name="correo" minlength="1" maxlength="30" placeholder="@" >

								</div>

								<div class="col-sm-6 col-md-6 form-group">

									<label for="dpto" class="etiqueta">Departamento *</label>

									<select name="dpto" id="dpto" class="form-control"></select>

								</div>

								<div class="col-sm-6 col-md-6 form-group">

									<label for="ciudad" class="etiqueta etMargen">Ciudad *</label>

									<select name="ciudad" id="ciudad" class="form-control"></select>

								</div>

								<p class="col-sm-12 col-md-12" style="font-size:20px;font-family: 'HelveticaNeueLTStd-Lt' !important;">Producto(s) que compraste* (puedes elegir múltiples opciones)</p>

							</div>

							<div class="box-check clearfix">

								<div class="box-check--top clearfix">

									<div class="col-xs-6 col-sm-2 col-md-2">

										<label class="checkbox-inline"><input type="checkbox" name="marca[]" class="compras" value="Tide Original">Tide Original</label>

									</div>

									<div class="col-xs-6 col-sm-2 col-md-2">

										<label class="checkbox-inline"><input type="checkbox" name="marca[]" class="compras" value="Tide Sport">Tide Sport</label>

									</div>

									<div class="col-xs-6 col-sm-2 col-md-2">

										<label class="checkbox-inline"><input type="checkbox" name="marca[]" class="compras" value="Tide Bleach">Tide Bleach</label>

									</div>

									<div class="col-xs-6 col-sm-2 col-md-2">

										<label class="checkbox-inline"><input type="checkbox" name="marca[]" class="compras" value="Tide To Go"> Tide To Go</label>

									</div>

									<div class="col-xs-6 col-sm-3 col-md-3">

										<label class="checkbox-inline"><input type="checkbox" name="marca[]" class="compras" value="Tide Ultra Stain Release">Tide Ultra Stain Release</label>

									</div>

								</div>

								<div class="box-check--top clearfix">

									<div class="col-xs-6 col-sm-2 col-md-2">

										<label class="checkbox-inline"><input type="checkbox" name="marca[]" class="compras" value="Tide Original HE">Tide Original HE</label>

									</div>

									<div class="col-xs-6 col-sm-2 col-md-2">

										<label class="checkbox-inline"><input type="checkbox" name="marca[]" class="compras" value="Tide con Downy">Tide con Downy</label>

									</div>

									<div class="col-xs-6 col-sm-2 col-md-2">

										<label class="checkbox-inline"><input type="checkbox" name="marca[]" class="compras" value="Tide Free & Gentle">Tide Free & Gentle</label>

									</div>

									<div class="col-xs-6 col-sm-4 col-md-4">

										<label class="checkbox-inline"><input type="checkbox" name="marca[]" class="compras" value="Tide Febreze Spring & Renewal">Tide Febreze Spring & Renewal</label>

									</div>

									<div class="col-xs-6 col-sm-2 col-md-2">

										<label class="checkbox-inline"><input type="checkbox" name="marca[]" class="compras" value="Tide Pods">Tide Pods</label>

									</div>

								</div>

							</div>

							<div class="box-acept clearfix">

								<div class="col-md-9">

									<label class="checkbox-inline" >

										<input type="checkbox" name="terminos2" id="terminos2" class= value="1">Acepto los <span>términos y condiciones</span> de la actividad de Ganaconmytide.

									</label>

									<label class="checkbox-inline no-marginLeft">

										<input type="checkbox" name="datos" id="datos" value="1">Autorizo a Prebel para hacer uso de mi informacion para fines publicitarios y de mercadeo.

									</label>

								</div>

								<div class="col-md-3">

									<input type="submit" class="btn btn-primary btn-block u-btn" name="" value="Finalizar">

								</div>

							</div>

						</form>
						<!-- MODAL -->

						<!-- 								<div class="modal fade" id="modalTerminosm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                                          <div class="modal-dialog" role="document">

                                            <div class="modal-content contenidoModal">

                                              <div class="modal-header cabeceraModal">

                                                <a href="#" class="cerrar-negro" data-dismiss="modal"></a>

                                                <div>

                                                      <h1 class="text-center boxtitle">Términos y condiciones</h1>

                                                  </div>

                                              </div>



                                              <div class="modal-body cuerpoModal terminosWrapper" style="max-height: 445px; height: 445px;">

                                              </div>

                                               <div class="modal-footer">

                                              <br>

                                            </div>

                                            </div>

                                          </div>

                                          </div> -->
						<!-- MODAL -->






						<div class="modal fade" id="modalTerminos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

							<div class="modal-dialog" role="document">

								<div class="modal-content contenidoModal">

									<div class="modal-header cabeceraModal">

										<a href="#" class="cerrar-negro" data-dismiss="modal"></a>

										<div>

											<h1 class="text-center boxtitle">Términos y condiciones</h1>

										</div>

									</div>



									<div class="modal-body cuerpoModal terminosWrapper" style="max-height: 445px; height: 445px;">

										<p class="text-justify">

											<strong style="margin-left:25%; font-size:20px">“TIDE TE LLEVA A NUEVA YORK”</strong>

										<li class="text-justify">1.	Por la compra de cualquier referencia de detergentes marca TIDE, participa en el sorteo por un (1) viaje a Nueva York, más una (1) tarjeta Bono Bancolombia con UN MILLÓN QUINIENTOS MIL PESOS ($1.500.000). </li><br>

										<li class="text-justify">2.	Únicamente podrá participar mayores de edad. No podrán participar en la actividad los empleados de Prebel S.A., ni sus familiares hasta el 4°grado de consanguinidad, 2° de afinidad y único civil.</li><br>

										<li class="text-justify">3.	La promoción aplica por compras en cualquiera de los puntos de venta Éxito, Carulla, Jumbo, Olímpica, La 14, Homecenter o Euro, entre el 15 de noviembre y el 31 de diciembre de 2015. La promoción no aplica por compras en Éxito Express y/o Carulla Express, Éxito.com y/o Carulla.com. </li><br>

										<li class="text-justify">4.	Para participar, el consumidor deberá raspar el Sticker que se encuentra pegado al producto que compró, allí encontrará un código, que deberá ingresar, junto con sus datos personales, a la página web del concurso www.ganaconmytide.com</li><br>

										<li class="text-justify">5.	El participante deberá ingresar sus datos personales, aceptar la Política de Tratamiento de Datos Personales y los términos y condiciones del presente concurso, para poder ingresar su código.  </li><br>

										<li class="text-justify">6.	Los consumidores podrán ingresar tantos códigos, como productos compren.  </li><br>

										<li class="text-justify">7.	Los consumidores deberán guardar la factura de compra, correspondiente al código que ingresan en la página, como requisito indispensable para ser ganadores del premio. </li><br>

										<li class="text-justify">8.	El premio que será entregado es un (1) viaje a Nueva York, para dos (2) personas, que incluye: i) tiquetes ida y regreso para dos personas, desde cualquier ciudad del territorio colombiano, hasta la ciudad de Nueva York, Estados Unidos; ii) Alojamiento doble 4 días, 3 noches en hotel 3 estrellas, sin desayuno incluido; iii) Tour por la ciudad para dos personas. iv) Una tarjeta Bono Bancolombia por UN MILLÓN QUINIENTOS MIL PESOS ($1.500.000). La tarjeta no podrá ser utilizada para retirar dinero en Efectivo, únicamente podrá ser utilizada en establecimientos de comercio que acepte este tipo de pago.  El premio NO Incluye: i) Gatos de alimentación y/o transporte en Nueva York; ii) Gastos de salida del país; iii) Gastos de Visa y/o pasaporte digital vigente, seguros, entre ellos Assist Card; iv) Cambios en tiquetes aéreos y/u hoteles o cualquier otro gasto o impuesto no especificado en los presentes términos y condiciones.</li><br>

										<li class="text-justify">9.	Las fechas del viaje están sujetas a disponibilidad en tiquetes y hoteles. Solo podrá redimirse entre enero y mayo de 2016 y/o enero y mayo de 2017, este último mes será el plazo máximo para redimir el tiquete. </li><br>

										<li class="text-justify">10. El sorteo se realizará en las instalaciones de la sede principal de Prebel S.A., el día 15 de enero de 2016, en presencia de una persona de Auditoría y de Mercadeo de la compañía y de un delegado de la primera autoridad administrativa de la ciudad de Medellín. </li><br>

										<li class="text-justify">11. El sistema diseñado para realizar la actividad, arrojará un (1) posible ganador y cinco (5) suplentes. </li><br>

										<li class="text-justify">12. El personal de Prebel S.A. se comunicará directamente con el posible ganador. </li><br>

										<li class="text-justify">13. Únicamente ostentará la calidad de ganador, quien: i) Conteste a cualquiera de los tres (3) intentos de llamada que realice Prebel S.A; ii) Envíe la fotocopia de su cédula de ciudadanía, la fotocopia de la factura de compra del producto correspondiente al código ganador y la fotocopia del pasaporte digital y visa Americana, vigentes al 31 de diciembre de 2017. Todos los documentos deberán ser enviados dentro de los 10 días hábiles siguientes a la llamada telefónica.  </li><br>

										<li class="text-justify">14. En caso de que el posible ganador no cumpla con cualquiera de los requisitos detallados en el punto anterior,  no podrá ostentar la calidad de ganador y se procederá a realizar el mismo procedimiento con los suplentes, en el orden en que fueron escogidos en el sorteo, hasta que se tenga un ganador de la actividad promocional. </li><br>

										<li class="text-justify">15. El ganador cuentan con un (1) año para reclamar el premio, contado a partir de que se acredite su calidad. Prebel S.A. cuenta con treinta (30) días para hacer entrega del premio, contados a partir de que el ganador realice la reclamación.</li><br>

										<li class="text-justify">16. Tanto del trámite de realización del sorteo, como de la entrega de premios, se levantarán las respectivas actas que serán enviadas a Coljuegos dentro de los cinco (5) días siguientes a que se surta el respectivo trámite.  </li><br>

										<li class="text-justify">17. El premio podrá ser transferible, pero no redimible en dinero. En caso de transferencia, tanto el ganador como la persona a quien se le transfiere, deberán cumplir con los requisitos de entrega detallados en los presentes términos y condiciones.  </li><br>

										<li class="text-justify">18. Los impuestos que se generen por la entrega del premio serán asumidos por Prebel. </li><br>

										<li class="text-justify">19. Con la participación en esta actividad promocional autorizo a Prebel S.A. a i) Utilizar mis datos personales y/o sensibles que fueron capturados o que sean capturados por cualquier medio, con ocasión de esta actividad; y a: ii) Consultar, almacenar, corregir, actualizar, modificar o eliminar la información entregada con ocasión de este concurso, para fines comerciales, administrativos y de información. No obstante, comprendo que puedo: i) Solicitar la modificación, actualización, rectificación o eliminación de mi información de las bases de datos de Prebel S.A; ii) Solicitar prueba de la autorización; iii) Ser informado de los usos aplicados a mis datos; iv) Presentar quejas por infracciones ante la SIC; v) Revocar mi autorización y/o solicitar la supresión de mis datos y su administración, en caso de vulneración de mis derechos y garantía constitucionales y legales; vi) Acceder en forma gratuita a mis datos personales y/o datos sensibles divulgados; y vii) Salvo en los casos expresamente autorizados, exigir la confidencialidad y la reserva de la información suministrada.</li><br>

										<li class="text-justify">20. Derechos de imagen: Con el hecho de participar en la promoción, los ganadores aceptan y autorizan que sus nombres e imágenes aparezcan en los programas, publicaciones y demás medios publicitarios y en general en todo material de divulgación con fines promocionales que Prebel S.A. desee hacer durante el evento o una vez finalizado el mismo, sin que ello implique la obligación de remunerarlos o compensarlos adicionalmente. Así mismo, renuncian a cualquier reclamo por derechos de imagen.</li><br>

										<li class="text-justify">21. En caso de haber motivos fundados de fuerza mayor, caso fortuito, o hechos de terceros, tales como desastres naturales, guerras, huelgas o disturbios, así como también situaciones que afecten el evento; o en caso de detectarse un fraude o intento de fraude en perjuicio de los puntos de venta participantes y/o de Prebel S.A., o los participantes de la misma, y/o de Prebel S.A., podrán modificar en todo o en parte este evento, así como suspenderlo temporal o permanentemente sin asumir ninguna responsabilidad al respecto.  En estos casos, el fundamento de las medidas que se adopten, así como las pruebas que demuestren la existencia de la causa invocada por el organizador estarán a disposición de cualquier interesado.</li><br>

										<li class="text-justify">22. Los participantes podrán consultar la Política de Tratamiento de Datos Personales en la página web de Prebel S.A: <a href="www.prebel.com" > www.prebel.com</a></li><br>

										</p>

									</div>

									<div class="modal-footer">

										<br>

									</div>

								</div>

							</div>

						</div>

						<div class="modal fade" id="modalDatos_" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

							<div class="modal-dialog" role="document" >

								<div class="modal-content contenidoModal">

									<div class="modal-header cabeceraModal">

										<a href="#" class="cerrar-negro" data-dismiss="modal"></a>

										<div>

											<h1 class="text-center">Autorización de datos personales</h1>

										</div>

									</div>



									<div class="modal-body cuerpoModal terminosWrapper" style="max-height: 445px; height: 445px;">

										<p class="text-justify">

											* Autorizo a PREBEL S.A. a: i) Utilizar los datos personales que fueron capturados con ocación de mi inscripción en la presente actividad promocional,

											con el fin de desarrollar el objetivo de la misma; y ii) Consultar, almacenar, administrar, confirmar, corregir, actualizar, modificar o eliminar,

											la información entregada, para fines comerciales, de marketing, de investigación de mercados, estadisticos y de información.

											Entiendo que esta autorizacion me permite: i) Conocer, actualizar y rectificar mis datos; ii) Solicitar prueba de la autorización aquí otorgada; iii)

											Presentar quejas ante la SIC; iv) Revocar la autorización y/o solicitar la supresión del dato por violacion de normas legales (En caso de revocatoria de la autorización, el participante no podrá participar del sorteo promocional); y v)

											Acceder en forma gratuita a mis datos personales revelados. Para ello podrá comunicarse con PREBEL S.A., con NIT 890.905.032-1 en el 3656000 o el correo electrónico servicio.cliente@prebel.com.co

										</p>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

		<!-- Modal -->

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

			<div class="modal-dialog" role="document">

				<div class="modal-content">

					<div class="modal-header">

						<a href="#" class="cerrar" data-dismiss="modal"><br></a>

					</div>

					<div class="modal-body">

						<div class="errores"></div>

					</div>

				</div>

			</div>

		</div>

		<div class="box box-wrap exitoRegister">

			<div class="container box-wrapContainer">

				<div class="row">

					<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 box-main box-main--interno">

						<a href="#" class="cerrar2" id="cerrar2"></a>

						<aside class="box-absolute">

							<p class="center-block box-main--title">¡Perfecto!</p>

							<label for="" class="text_exito">

								<p class="box-main--content">Tus datos han sido registrados con éxito,

									ahora ingresa tu código</p>

								<a href="#" class="btn btn-default u-btn" id="siguiente">Siguiente</a>

							</label>

						</aside>

					</div>

					<div class="col-md-12 box-main--image"></div>

				</div>

			</div>

		</div>

		<div class="box box-wrap codeRegister">

			<div class="container box-wrapContainer">

				<div class="row">

					<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 box-main box-main--interno">

						<aside class="box-absolute">

							<p class="center-block box-main--title box-main--title2" id="ingresaBTn">Ingresa tu código</p>

							<p class="box-main--content text_exito"></p>

							<form action="datos.php?regCode=1" method="post" id="formCode">

								<input type="text"   onkeypress="return isNumber(event);" class="form-control btn-block inputCodes" name="cedula" id="cedula" placeholder="Cédula">

								<input type="text" class="form-control inputCodes btn-block" name="codigo" id="codigos" placeholder="Código" >

								<input type="submit" class="btn btn-default u-btn" value="Enviar">

							</form>

						</aside>

					</div>

					<div class="col-md-12 box-main--image"></div>

				</div>

			</div>

		</div>

		<div class="codeRegisterOK">

			<div class="container">

				<div class="row">

					<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 box-main box-main--interno">

						<a href="#" class="cerrar2" id="cerrar2"></a>

						<aside class="box-absolute">

							<p class="center-block box-main--title">¡Gracias!</p>

							<label for="" class="text_exito">

								<p class="box-main--content">Tu código ha quedado inscrito <br><span class="naranja"> ¡Te deseamos mucha suerte!</span></p>

								<a href="#" class="btn btn-default u-btn" id="volver">Volver al inicio</a>

							</label>

						</aside>

					</div>

					<div class="col-md-12 box-main--image"></div>

				</div>

			</div>

		</div>

		<div class="box box-wrap contacto">

			<div class="container box-wrapContainer">

				<div class="row">

					<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 box-main box-main--interno">

						<aside class="box-absolute">

							<p class="center-block box-main--title box-main--title2">Contacto</p>

							<p class="box-main--content text_exito">Para dudas y comentarios puede escribirnos a:</p>

							<p class="box-main--content text_exito"><strong>Correo electrónico</strong></p>

							<p class="box-main--content text_exito">servicio.cliente@prebel.com.co</p>

							<p class="box-main--content text_exito"><strong>Línea de atención al cliente</strong></p>

							<p class="box-main--content text_exito">018000914990</p>

						</aside>

					</div>

					<div class="col-md-12 box-main--image"></div>

				</div>

			</div>

		</div>



	</div>

	<div class="box ppal2" > <!-- box-descubre -->

		<div id="descubre">



			<div class="container" id="Ctide">

				<div class="row" style="margin-top:10%">

					<article class="box clearfix"> <!-- box-top -->

						<div class="col-sm-7 col-md-7" >

							<h2 class="col-sm-7 col-md-7 h2-title">Descubre cuál es tu</h2>

							<figure class="col-sm-5 col-md-5">

								<img class="img-responsive pull-right" src="images/imagenes_tide/logo_tide_masgrande.png" alt="" />

							</figure>

							<figure class="col-sm-12 col-md-12 image-product no-padding">

								<img class="img-responsive" src="images/imagenes_tide/paquete_tyde.png" alt="" />

							</figure>

						</div>

						<figure class="col-sm-5 col-md-5">

							<a href="#" id="comienza"> <img  class="img-responsive" src="images/imagenes_tide/botella_tide_interrog.png" alt="" /></a>

						</figure>

					</article>

				</div>

			</div>

		</div>

		<div id="encuesta">

			<div class="box box-wrap slides-descubre u-orange">

				<div class="container">

					<div class="row">

						<div class="col-sm-12 col-md-12">

							<h2 class="col-sm-9 col-md-9 no-padding title-descubre" id="tituloDescubre">Descubre cuál es tu</h2>

							<figure class="col-sm-3 col-md-3">

								<img class="img-responsive pull-right" src="images/imagenes_tide/logo_tide_peque.png" alt="" />

							</figure>

						</div>

						<div class="col-sm-12 col-md-12 box-main slide"  id="slide1">

							<p class="slide-title">¿cuál es tu desafío de lavado #1?</p>

							<a href="#" class="lavado" data-number="1">



								<aside class="col-sm-3 col-md-3 slide-item">

									<img class="img-responsive center-block" id="imgslide1" src="images/imagenes_tide/icono_camisa.png" alt="" />

									<p class="slide-description">Blancos percudidos</p>

								</aside>

							</a>

							<a href="#" class="lavado" data-number="5">

								<aside class="col-sm-3 col-md-3 slide-item">

									<img class="img-responsive center-block" id="imgslide5" src="images/imagenes_tide/icono_manchas.png" alt="" />

									<p class="slide-description">Manchas difíciles</p>

								</aside>

							</a>

							<a href="#" class="lavado" data-number="9">

								<aside class="col-sm-3 col-md-3 slide-item">

									<img class="img-responsive center-block" id="imgslide9" src="images/imagenes_tide/icono_olores.png" alt="" />

									<p class="slide-description">Eliminación de olores</p>

								</aside>

							</a>

							<a href="#" class="lavado" data-number="13">

								<aside class="col-sm-3 col-md-3 slide-item">

									<img class="img-responsive center-block" id="imgslide13" src="images/imagenes_tide/icono_tiempo_lavado.png" alt="" />

									<p class="slide-description">Poco tiempo para el lavado</p>

								</aside>

							</a>

						</div>

						<div class="col-sm-12 col-md-12 clearfix arrows" id="arrowslide1">

							<div class="col-xs-6 col-sm-6 col-md-6 no-padding next pull-right">

								<a class="arrows-dir" href="#" id="S-arrowslide1">siguiente >></a>

							</div>

						</div>

						<div class="col-sm-12 col-md-12 box-main slide" id="slide2">

							<p class="slide-title">¿cuán difíciles son tus manchas?</p>

							<a href="#" class="manchas" data-number="2">

								<aside class="col-sm-3 col-md-3 slide-item">

									<img class="img-responsive center-block" id="imgslidemanchas2" src="images/imagenes_tide/icono_ninguno.png" alt="" />

									<p class="slide-description">Nnguno</p>

								</aside>

							</a>

							<a href="#" class="manchas" data-number="6">

								<aside class="col-sm-3 col-md-3 slide-item">

									<img class="img-responsive center-block" id="imgslidemanchas6" src="images/imagenes_tide/icono_suaves.png" alt="" />

									<p class="slide-description">Suaves</p>

								</aside>

							</a>

							<a href="#" class="manchas" data-number="10">

								<aside class="col-sm-3 col-md-3 slide-item">

									<img class="img-responsive center-block" id="imgslidemanchas10" src="images/imagenes_tide/icono_moderadas.png" alt="" />

									<p class="slide-description">Moderadas</p>

								</aside>

							</a>

							<a href="#" class="manchas" data-number="14">

								<aside class="col-sm-3 col-md-3 slide-item">

									<img class="img-responsive center-block" id="imgslidemanchas14" src="images/imagenes_tide/icono_dificiles.png" alt="" />

									<p class="slide-description">Díficiles</p>

								</aside>

							</a>

						</div>

						<div class="col-sm-12 col-md-12 clearfix arrows" id="arrowslide2">

							<div class="col-xs-6 col-sm-6 col-md-6 no-padding">

								<a class="arrows-dir" href="#" id="A-arrowslide2"><< anterior</a>

							</div>

							<div class="col-xs-6 col-sm-6 col-md-6 no-padding next">

								<a class="arrows-dir" href="#" id="S-arrowslide2">siguiente >></a>

							</div>

						</div>

						<div class="col-sm-12 col-md-12 box-main slide" id="slide3">

							<p class="slide-title">¿qué cantidad de fragancia prefieres?</p>

							<a href="#" class="fragancia" data-number="3">

								<aside class="col-sm-3 col-md-3 slide-item">

									<img class="img-responsive center-block" id="imgslidefragancia3" src="images/imagenes_tide/icono_sin_fragancia.png" alt="" />

									<p class="slide-description">Sin fragancia</p>

								</aside>

							</a>

							<a href="#" class="fragancia" data-number="7">

								<aside class="col-sm-3 col-md-3 slide-item">

									<img class="img-responsive center-block" id="imgslidefragancia7" src="images/imagenes_tide/icono_minima.png" alt="" />

									<p class="slide-description">Mínima</p>

								</aside>

							</a>

							<a href="#" class="fragancia" data-number="11">

								<aside class="col-sm-3 col-md-3 slide-item">

									<img class="img-responsive center-block" id="imgslidefragancia11" src="images/imagenes_tide/icono_moderada_flor.png" alt="" />

									<p class="slide-description">Moderada</p>

								</aside>

							</a>

							<a href="#" class="fragancia" data-number="15">

								<aside class="col-sm-3 col-md-3 slide-item">

									<img class="img-responsive center-block" id="imgslidefragancia15" src="images/imagenes_tide/icono_maxima.png" alt="" />

									<p class="slide-description">Máxima</p>

								</aside>

							</a>

						</div>

						<div class="col-sm-12 col-md-12 clearfix arrows" id="arrowslide3">

							<div class="col-xs-6 col-sm-6 col-md-6 no-padding">

								<a class="arrows-dir" href="#" id="A-arrowslide3"><< anterior</a>

							</div>

							<div class="col-xs-6 col-sm-6 col-md-6 no-padding next">

								<a class="arrows-dir" href="#" id="S-arrowslide3">siguiente >></a>

							</div>

						</div>

						<div class="col-sm-12 col-md-12 box-main slide" id="slide4">

							<p class="slide-title">¿algo más que deberíamos saber?</p>

							<a href="#" class="algo" data-number="4">

								<aside class="col-sm-3 col-md-3 slide-item">

									<img class="img-responsive center-block" id="imgslidealgo4" src="images/imagenes_tide/icono_lavadora.png" alt="" />

									<p class="slide-description">Lavadora de alta Eficiencia</p>

								</aside>

							</a>

							<a href="#" class="algo" data-number="16">

								<aside class="col-sm-3 col-md-3 slide-item">

									<img class="img-responsive center-block" id="imgslidealgo16" src="images/imagenes_tide/icono_suavisante.png" alt="" />

									<p class="slide-description">Con suavizante</p>

								</aside>

							</a>

							<a href="#" class="algo" data-number="8">

								<aside class="col-sm-3 col-md-3 slide-item">

									<img class="img-responsive center-block" id="imgslidealgo8" src="images/imagenes_tide/icono_deportiva.png" alt="" />

									<p class="slide-description">Lavado de ropa deportiva</p>

								</aside>

							</a>

							<a href="#" class="algo" data-number="12">

								<aside class="col-sm-3 col-md-3 slide-item">

									<img class="img-responsive center-block" id="imgslidealgo12" src="images/imagenes_tide/icono_sin_tintes.png" alt="" />

									<p class="slide-description">Sin tintes ni perfumes</p>

								</aside>

							</a>

						</div>

						<div class="col-sm-12 col-md-12 clearfix arrows" id="arrowslide4">

							<div class="col-xs-6 col-sm-6 col-md-6 no-padding">

								<a class="arrows-dir" href="#" id="A-arrowslide4"><< anterior</a>

							</div>

							<div class="col-xs-6 col-sm-6 col-md-6 no-padding next">

								<a class="arrows-dir" href="#" id="S-arrowslide4">siguiente >></a>

							</div>

						</div>

						<div class="contenedor-final"></div>

					</div>

				</div>

			</div>

		</div>

		<div class="box u-orange clearfix" id="productos"> <!-- box-bottom -->

			<div class="container">

				<div class="row" style="margin-top: 5%;">

					<h3>Encuentra el Tide que se adapte a ti</h3>

					<div class="col-sm-12 col-md-12 box-art--main">

						<div class="box-art clearfix bg-1"> <!-- art-uno -->

							<aside class="col-sm-6 col-md-6">

								<p class="box-art--title">Tide original</p>

								<span class="box-art--sub">Para una limpieza brillante, siempre.</span>

								<p class="box-art--description">

									Tide llega al fondo de la suciedad y las manchas para ayudarte a mantener la blancura y el brillo de los colores.</p>

								<p class="box-art--description">

									Para un gran poder quitamanchas, Tide está formulado para empezar a disolverse rapidamente.

								</p>

								<p class="box-art--description">

									Si tienes una lavadora HE, busca el logo de HE en el cuello de la botella de Tide.

								</p>

							</aside>

							<aside class="col-sm-3 col-md-3">

								<img class="center-block box-art--img" src="images/imagenes_tide/tide_1.png" alt="" />

							</aside>

						</div>

						<p class="col-md-4 pull-right box-art--descriptionMin">Disponible en Éxito, Carulla, Jumbo, La 14, Olímpica, Home Center, Alkosto, Euro, algunos pdv Consumo y Boom</p>

					</div>

					<div id="Sport">



						<div class="col-sm-12 col-md-12 box-art--main">

							<div class="box-art clearfix bg-2"> <!-- art-dos -->

								<aside class="col-sm-3 col-md-3">

									<img class="center-block box-art--img" src="images/imagenes_tide/tide_2.png" alt="" />

								</aside>

								<aside class="col-sm-6 col-md-6">

									<p class="box-art--title">Tide febreze sport</p>

									<span class="box-art--sub">¡Ahora logra una limpieza más profunda! Combate olores persistentes.</span>

									<p class="box-art--description">

										Detergente Nº 1, especialmente diseñado para la ropa deportiva, formulado para eliminar olores.</p>

									<p class="box-art--description">

										Ahora ofrece una limpieza más profunda y combate manchas difíciles, a la vez que deja una fragancia fresca a Febreze.

									</p>

								</aside>

							</div>

							<p class="box-art--descriptionMin">Disponible en Éxito, Jumbo, La 14, Olímpica, Euro y Boom</p>

						</div>

					</div>

					<div id="Bleach">

						<div class="col-sm-12 col-md-12 box-art--main">

							<div class="box-art clearfix bg-3"> <!-- art-tres -->

								<aside class="col-sm-6 col-md-6">

									<p class="box-art--title">Tide Bleach</p>

									<span class="box-art--sub">¡Ahora ropa más blanca y brillante después de un solo lavado!</span>

									<p class="box-art--description">

										Está diseñado para brindarte telas más blancas y brillantes después de un solo lavado*, sin los efectos dañinos del cloro.</p>

									<p class="box-art--description">

										*En comparación con Tide Original

									</p>

								</aside>

								<aside class="col-sm-3 col-md-3">

									<img class="center-block box-art--img" src="images/imagenes_tide/tide_3.png" alt="" />

								</aside>

							</div>

							<p class="col-md-4 pull-right box-art--descriptionMin">Disponible en Jumbo</p>

						</div>

					</div>

					<div id="Downy">

						<div class="col-sm-12 col-md-12 box-art--main" >

							<div class="box-art clearfix bg-4"> <!-- art-cuatro -->

								<aside class="col-sm-3 col-md-3">

									<img class="center-block box-art--img" src="images/imagenes_tide/tide_4.png" alt="" />

								</aside>

								<aside class="col-sm-6 col-md-6">

									<p class="box-art--title">Tide con Downy</p>

									<span class="box-art--sub">¡Ahora 3 en 1! ¡Limpia, refresca y suaviza! incluye suavizante</span>

									<p class="box-art--description">

										Esta formulado con componentes especiales que brindan beneficios de suvidad a lo largo del lavado e incluye Scent Pearls para brindar una fragancia reconfortante y prolongada.

										¡Para que tu ropa se sienta tan bien como se ve!

									</p>

								</aside>

							</div>

							<p class="box-art--descriptionMin">Disponible en Éxito, Jumbo, La 14, Olímpica y Euro</p>

						</div>

					</div>

					<div id="FebrezeSpringRenewal">

						<div class="col-sm-12 col-md-12 box-art--main">

							<div class="box-art clearfix bg-5"> <!-- art-cinco -->

								<aside class="col-sm-6 col-md-6">

									<p class="box-art--title">Tide Spring & Renewal</p>

									<span class="box-art--sub">¡Ahora la frescura dura 3 veces más!</span>

									<p class="box-art--description">

										Gracias a la innovadora tecnología Dual-Scent Pearls de Tide Febreze Spring & Renewal, tu día estará repleto de ráfagas de frescura que se activarán con tus movimientos. ¡Disfruta una fragancia que dura 3 veces más!*</p>

									<p class="box-art--description">

										*En comparación con Tide Original

									</p>

								</aside>

								<aside class="col-sm-3 col-md-3">

									<img class="center-block box-art--img" src="images/imagenes_tide/tide_5.png" alt="" />

								</aside>

							</div>

							<p class="col-md-4 pull-right box-art--descriptionMin">Disponible en Jumbo y Carulla</p>

						</div>

					</div>

					<div  id="UltraStainRelease">

						<div class="col-sm-12 col-md-12 box-art--main" >

							<div class="box-art clearfix bg-6"> <!-- art-seis -->

								<aside class="col-sm-3 col-md-3">

									<img class="center-block box-art--img" src="images/imagenes_tide/tide_6.png" alt="" />

								</aside>

								<aside class="col-sm-6 col-md-6" style="margin-left: 10px;">

									<p class="box-art--title">Tide Ultra Stain Release</p>

									<span class="box-art--sub">¡Elimina un 99% de las manchas diarias!</span>

									<p class="box-art--description">

										Sobrecargado de componentes especialmente formulados que eliminan un 99% de las manchas diarias, incluso manchas de comida grasientas. Innovadora tapa “Zap! Cap”, con cerdas para frotar que brinda una opción de pretratamiento profundo.</p>

								</aside>

							</div>

							<p class="box-art--descriptionMin">Disponible en Carulla, Jumbo, Olímpica, La 14, Homecenter, Euro, algunas pdv Consumo y Boom</p>

						</div>

					</div>

					<div id="Pods">

						<div class="col-sm-12 col-md-12 box-art--main" >

							<div class="box-art clearfix bg-7"> <!-- art-siete -->

								<aside class="col-sm-6 col-md-6">

									<p class="box-art--title">Tide Pods</p>

									<span class="box-art--sub">Detergente + quitamanchas + abrillantador, todo en uno</span>

									<p class="box-art--description">

										¡Tide está reinventando la manera de lavar tu ropa!</p>

									<p class="box-art--description">

										1 Pod = 1 carga de ropa

									</p>

									<p class="box-art--description">

										Funciona en todo tipo de lavadoras

									</p>

									<p class="box-art--description">

										Se disuelve en agua fría o caliente

									</p>

									<p class="box-art--description">

										Disponible en dos 2 presentaciones: 14 y 31.

									</p>



								</aside>

								<aside class="col-sm-3 col-md-3">

									<img class="center-block box-art--img" src="images/imagenes_tide/tide_7.png" alt="" />

								</aside>

							</div>

							<p class="col-md-4 pull-right box-art--descriptionMin">Disponible en Éxito, Carulla, Jumbo, La 14, Olímpica, Home Center y algunos pdv Consumo</p>

						</div>

					</div>

					<div  id="FreeGentle">

						<div class="col-sm-12 col-md-12 box-art--main" >

							<div class="box-art clearfix bg-8"> <!-- art-ocho -->

								<aside class="col-sm-3 col-md-3">

									<img class="center-block box-art--img" src="images/imagenes_tide/tide_8.png" alt="" />

								</aside>

								<aside class="col-sm-6 col-md-6">

									<p class="box-art--title">Tide Free&Gentle</p>

									<span class="box-art--sub">Una excelente limpieza que cuida tu piel.</span>

									<p class="box-art--description">

										Está formulado sin perfumes ni colorantes</p>

									<p class="box-art--description">

										Pensando en pieles sensibles.

									</p>

									<p class="box-art--description">

										Elimina residuos de suciedad, comida y manchas.

									</p>

								</aside>

							</div>

							<p class="box-art--descriptionMin">Disponible en Éxito, Carulla, La 14 y Olímpica</p>

						</div>

					</div>

					<div class="col-sm-12 col-md-12 box-art--main">

						<div class="box-art clearfix bg-9"> <!-- art-nueve -->

							<aside class="col-sm-6 col-md-6">

								<p class="box-art--title">Tide To Go</p>

								<span class="box-art--sub">Adiós a las manchas</span>

								<p class="box-art--description">

									Tide to Go es el quitamanchas instantáneo #1 en Estados Unidos que elimina algunas de las peores manchas de comida fresca y bebidas.</p>

								<p class="box-art--description">

									Se lleva fácilmente para detener las manchas en el momento justo.

								</p>

							</aside>

							<aside class="col-sm-3 col-md-3">

								<img class="center-block box-art--img" src="images/imagenes_tide/tide_9.png" alt="" />

							</aside>

						</div>

						<p class="col-md-4 pull-right box-art--descriptionMin">Disponible en Cencosud, Éxito, Carulla, La 14, Olímpica, algunos pdv Consumo y Home Center</p>

					</div>

				</div>

			</div>

		</div>

	</div> <!-- end - box-descubre -->



	<div class="box box-bottom section ppal" id="premio" >

		<div class="container">

			<div class="row" style="margin-top: 13%;">

				<aside class="col-sm-6 col-sm-push-6 col-md-6 col-md-push-6 box-prize--image">

					<img src="images/imagenes_tide/collage_imagenes.png" class="img img-responsive" alt="">

				</aside>

				<aside class="col-sm-6 col-sm-pull-6 col-md-6 col-md-pull-6 box-prize">

					<h4>El premio:</h4>

					<h6>El viaje incluye todo de la siguiente manera:</h6>

					<p class="box-prize--description">•	Tiquetes ida y regreso para 2 personas a Nueva York desde cualquier ciudad del territorio colombiano</p>

					<p class="box-prize--description">•	Alojamiento 4 días, 3 noches en hotel de 4 estrellas sin desayuno incluido.</p>

					<p class="box-prize--description">•	Tour por la ciudad para 2 personas.</p>

					<p class="box-prize--description">•	Tarjeta bono Bancolombia con $1.550.000.</p>

					<p class="box-prize--description">Un solo ganador recibe este paquete todo incluido* para viajar con 1 acompañante a Nueva York</p>

					<div class="box-prize--terms"><a href="#" id="termino2" class="sube">Consulta aquí condiciones y restriciones</a></div>

				</aside>

			</div>

		</div>

	</div>

</div>

		<span id="top-link-block" class="flotante">

			<a href="#top" class="well well-sm" onclick="$('html,body').animate({scrollTop:0},'slow');return false; $('#descubre').show(1000);$('#encuesta').hide(1000);">

				<i><img src="images/flecha_up.png" alt=""></i>

			</a>

		</span>
		<!-- PopUp -->
		<div class="error">
			<div class="ventana">
				<div class="j-separator-40"></div>
				<span class="salir x">X</span>
				<h1 class="total text-center color-fuente ">! Tide te Dice ¡</h1>
				<div class="j-separator-10"></div>
				<articel id="mensajes"></articel>
				<div class="j-separator-40"></div>
				<div class="text-center"> 
					<button class="btn btn-success x">Aceptar</button>
				</div>
				<div class="j-separator-40"></div>
			</div>
		</div>
</body>

<!-- ======= JS ======= -->

<script src="js/lib/jquery.min.js"></script>

<script src="js/lib/jquery.validate.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<script type="text/javascript" src="js/lib/bootstrap.min.js"></script>

<script src="js/datos.js"></script>

<script src="js/funciones.js"></script>

<script src="js/script.js"></script>

<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/functions.js"></script>
<script src="js/main.js"></script>

<script type="text/javascript">

	(function($){

		$(window).load(function(){

			$(".terminosWrapper").mCustomScrollbar({

				theme:"rounded"

			});

		});

	})(jQuery);

</script>


</html>