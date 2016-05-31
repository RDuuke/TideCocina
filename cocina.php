<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tide</title>
	<link rel="stylesheet" href="css/ed-grid.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/lib/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<style>
	html, body{
		background: transparent;
	}
	.menuFixed{
		position: relative;
	}
	.slide {
    	margin-top: 0px;
	}
	</style>
</head>
<body class="fondo_cocina">
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
	<div class="ed-container">
		<div class="ed-item base-100 movil-100 tablet-75 web-75">
			<h1 class="total text-center color-fuente">Pinta tu cocina</h1>
		</div>
		<div class="ed-item base-100 movil-100 tablet-25 web-25">
			<br>
			<a href="#" class="btn-accion stilea"id="abreinfo">Como participar</a>
		</div>
	</div>
	<div class="ed-container margen-cocina">
		<div class="ed-item web-75 tablet-75 no-padding p-relativa">
			<div class="slider_horizontal">
				<div class="slide"><a href="" class="addFoto"><img id="i1" src="images/accesorios/casade.png"></a></div>
				<div class="slide"><a href="" class="addFoto"><img id="i2" src="images/accesorios/casade-liquido.png"></a></div>
				<div class="slide"><a href="" class="addFoto"><img id="i3" src="images/accesorios/cesto.png"></a></div>
				<div class="slide"><a href="" class="addFoto"><img id="i4" src="images/accesorios/guantes.png"></a></div>
				<div class="slide"><a href="" class="addFoto"><img id="i5" src="images/accesorios/jarros.png"></a></div>
				<div class="slide"><a href="" class="addFoto"><img id="i6" src="images/accesorios/lavadora.png"></a></div>
				<div class="slide"><a href="" class="addFoto"><img id="i7" src="images/accesorios/lavaplatos.png"></a></div>
				<div class="slide"><a href="" class="addFoto"><img id="i8" src="images/accesorios/lavaplatos-gris.png"></a></div>
				<div class="slide"><a href="" class="addFoto"><img id="i9" src="images/accesorios/matera.png"></a></div>
				<div class="slide"><a href="" class="addFoto"><img id="i10" src="images/accesorios/tide.png"></a></div>
				<div class="slide"><a href="" class="addFoto"><img id="i11" src="images/accesorios/tideultra.png"></a></div>
				<div class="slide"><a href="" class="addFoto"><img id="i12" src="images/accesorios/tohallas.png"></a></div>
				<div class="slide"><a href="" class="addFoto"><img id="i13" src="images/accesorios/utencilios.png"></a></div>
			</div>
			<div class="carga-cocina">
				<canvas id="editor" width="896" height="543" style="margin:0 auto;">
				</canvas>
			</div>
			<div class="ed-container total fondo_cafe">
				<div class="ed-item web-70 movil-70 base-70 tablet-70 text-right">
					<span class="indicadores_orden">COCINA</span>
				</div>
				<div class="ed-item web-30 movil-30 base-30 tablet-30">
					<span class="indicadores_orden">ZONA DE ROPAS</span>
				</div>
			</div>
		</div>
		<div class="ed-item web-25 tablet-25 no-padding heigt">
			<div class="slider_vertical">
				<div class="slide"><a href="" class="addFondo"><img src="images/1.jpg"></a></div>
				<div class="slide"><a href="" class="addFondo"><img src="images/2.jpg"></a></div>
				<div class="slide"><a href="" class="addFondo"><img src="images/3.jpg"></a></div>
			</div>
			<a href="#" class="btn-accion stilea"id="removeFoto">Eliminar FOTO</a>
			<a href="#" class="btn-accion stilea btn_oculto"id="rasterize">Guardar Cocina</a>
		</div>
	</div>
	<div class="error3" id="ingresa_documento">
		<div class="ventana3 ed-container">
				<div class="j-separator-40"></div>
				<span class="salir x3">X</span>
				<h1 class="color-fuente">Ingresa tu documento</h1>
				<div class="j-separator-10"></div>
				<articel>
					<div class="ed-container total">
						<div class="ed-item total">
							<div class="j-separator-40"></div>
							<input type="text" class="campo" placeholder="Documento" id="doc"name="docunetmo">
						</div>
					</div>
				</articel>
				<div class="j-separator-40"></div>
				<div class="text-center">
					<button class="btn btn-success x4">Aceptar</button>
				</div>
				<div class="j-separator-40"></div>
			</div>
	</div>
	<div class="error3 ayuda">
			<div class="ventana3 ed-container">
				<div class="j-separator-40"></div>
				<span class="salir x3">X</span>
				<h1 class="total text-center color-fuente ">Como participar</h1>
				<div class="j-separator-10"></div>
				<articel>
					<div class="ed-container total">
						<div class="ed-item base-20 movil-20 tablet-20 web-20">
							<h1 class="no-margin color-fuente text-center">1.</h1>
						</div>
						<div class="ed-item base-80 movil-80 tablet-80 web-80">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore recusandae praesentium, unde doloremque doloribus eos fugiat. Consequatur quidem, maxime, a error laborum, soluta consequuntur, tenetur ratione quia inventore assumenda in!</p>
						</div>
						<div class="ed-item base-20 movil-20 tablet-20 web-20">
							<h1 class="no-margin color-fuente text-center">2.</h1>
						</div>
						<div class="ed-item base-80 movil-80 tablet-80 web-80">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore recusandae praesentium, unde doloremque doloribus eos fugiat. Consequatur quidem, maxime, a error laborum, soluta consequuntur, tenetur ratione quia inventore assumenda in!</p>
						</div>
						<div class="ed-item base-20 movil-20 tablet-20 web-20">
							<h1 class="no-margin color-fuente text-center">3.</h1>
						</div>
						<div class="ed-item base-80 movil-80 tablet-80 web-80">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore recusandae praesentium, unde doloremque doloribus eos fugiat. Consequatur quidem, maxime, a error laborum, soluta consequuntur, tenetur ratione quia inventore assumenda in!</p>
						</div>
					</div>
				</articel>
				<div class="j-separator-40"></div>
				<div class="text-center">
					<button class="btn btn-success x3">Aceptar</button>
				</div>
				<div class="j-separator-40"></div>
			</div>
		</div>
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
<script src="js/lib/jquery.min.js"></script>
<script src="js/jquery.bxslider.js"></script>
<script src="js/bower_components/fabric.js/dist/fabric.js"></script>
<script src="js/functions.js"></script>
<script>
    	var documento = localStorage.getItem("documento");
		var url = "http://localhost/tide/src/App.php?f=";
		var canvas = new fabric.Canvas('editor');
		var msn = "";
	$(".slider_vertical").on('click', '.slide', function(event) {
		event.preventDefault();
		$("#rasterize").removeClass('btn_oculto');
	});
	$(".x4").click(function(event) {
		event.preventDefault();
		documento = $("#doc").val();
		$("#ingresa_documento").fadeOut();
		rasterize();
	});
	$(".x3").click(function(event) {
        event.preventDefault();
        $(".error3").fadeOut();
    });
    $("#abreinfo").click(function(event) {
    	event.preventDefault();
        $(".error3").fadeIn();
    });
	$(document).ready(function(){
  		$('.slider_vertical').bxSlider({
	    	mode: 'vertical',
	    	slideWidth: 400,
	   		minSlides: 3,
	    	slideMargin: 10
  		});
  		$('.slider_horizontal').bxSlider({
		    slideWidth: 450,
		    minSlides: 6,
		    maxSlides: 6,
		    slideMargin: 10
		});
		$(".slider_vertical").parent().addClass('myclase');
	});


		$('.addFoto').on('click', function(e){
			e.preventDefault();
			var idFoto = $(this).children('img').attr('id');
			addFoto(idFoto);

		});
		$("#removeFoto").on('click', function(e){
			e.preventDefault();
			removeFoto();
		});
		$("#rasterize").on('click', function(e){
			e.preventDefault();
			rasterize();
		});
		$(".addFondo").on('click', function(e){
			e.preventDefault();
			var src = $(this).children('img').attr('src');
			addBackground(src);
		});
		function addFoto(idFoto){
			var Img = document.getElementById(idFoto);
			imgInstance = new fabric.Image(Img,
						{
							left:600,
							bottom:0,
							borderColor:'red',
							cornerColor: 'red',

						});
			canvas.add(imgInstance);
		};
		function removeFoto() {
   			var activeObject = canvas.getActiveObject(),
        	activeGroup = canvas.getActiveGroup();

	    	if (activeGroup) {
	      		var objectsInGroup = activeGroup.getObjects();
	      		canvas.discardActiveGroup();
	      		objectsInGroup.forEach(function(object) {
	        		canvas.remove(object);
	      		});
	    	}
	    	else if (activeObject) {
	      		canvas.remove(activeObject);
	   		}
  		};
  		function addBackground(src){
  			// var img = new Image();
			// img.src = src;
			console.log(src);
			 canvas.setBackgroundImage(src, canvas.renderAll.bind(canvas), {
			            originX: 'left',
			            originY: 'top',
			            left: 0,
			            top: 0
			        });
  		}
  		function rasterize(){
  			 if (!fabric.Canvas.supports('toDataURL')) {
      			alert('This browser doesn\'t provide means to serialize canvas to an image');
    		}else {
    			var imagen_archivo = canvas.toDataURL('png');
    			if (documento == "" || documento == null){
    				$("#ingresa_documento").fadeIn();
    			}else{
	    		  	$.ajax({
				        url: url+'Cook/Store',
				        type: 'POST',
				        data: {
				        	'nombre_cocina': imagen_archivo,
				        	'document': documento
				        },
				    })
				    .done(function(response) {
				        if(response.status == 0){
				        	msn = msn +response.menssage;
				        	funciones.mensajes("<p>"+msn+"</p>");
				        	msn="";
				        }else{
				        	msn = "<h1 class'total'>Felicitaciones!!</h1> <br /> <p>su cocina se a guardado con éxito</p>";
                    		funciones.mensajes(msn);
                    		msn = "";
                    		setTimeout(function(){ window.location.replace("/galeriacocinas.php"); }, 3000);
				        }
				    });
    			}
    		}
  		}

	</script>
</html>