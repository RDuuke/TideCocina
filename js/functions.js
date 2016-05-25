$(function(){
	var url = "http://localhost/src/App.php?f=";
	var msn = "";
	funciones = {
		validarForm : function(){
			/* validación general */
			if(! funciones.validacionGeneral()){
				msn = msn+"<p>Todos los campos del formulario son requeridos</p>";
				funciones.mensajes(msn);
				msn ="";
				return false;
			}else{
				
				/* Validacion de la Cedula */			
				var campo_cedula = $("#cedula").val();
				campo_cedula.split("");
				if (isNaN(campo_cedula)){
					msn = msn+"<p>El campo cadula no es numerico </p> ";
					funciones.mensajes(msn);
					msn ="";
					return false;
				}else{
					var inicio = campo_cedula[0];
					if (inicio == 0){
						msn = msn + "<p>La cedula no puede iniciar en " + inicio +"</p> ";
						funciones.mensajes(msn);
						msn ="";
						return false;

					}
					if (campo_cedula.length < 7) {
						msn = msn + "<p>Los digitos de la cedula no pueden ser menores que 7 </p> ";
						funciones.mensajes(msn);
						msn ="";
						return false;
					}
				}

				/* Validacion del Nombre */
				var campo_nombre = $("#nombre").val();
				if (!isNaN(campo_nombre)){
					msn = msn+"<p>En el campo nombre no se aceptan numeros solo letras </p>";
					funciones.mensajes(msn);
					msn ="";
					return false;
				}
				
				/* Validacion del Apellido */
				var campo_apellido = $("#apellido").val();
				if (!isNaN(campo_apellido)){
					msn = msn+"<p>En el campo Apellidos no se aceptan numeros solo letras </p>";
					funciones.mensajes(msn);
					msn ="";
					return false;
				}
				
				/* validacion del telefono */
				var campo_telefono = $("#telefono").val();
				campo_telefono.split("");
				var inicio = campo_telefono[0];
				if (inicio == 0){
					msn = msn+"<p>La teléfono no puede iniciar en " + inicio +" </p>";	
					funciones.mensajes(msn);	
					msn ="";
					return false;
				}
				if (campo_telefono.length < 7) {
					msn = msn+"<p>Los digitos de el teléfono no pueden ser menores que 7 </p>";	
					funciones.mensajes(msn);
					msn ="";
					return false;
				}
				
				/* Validacion del Email */
				var campo_email = $("#email").val();
				expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				if(!expr.test(campo_email)){
					msn = msn+"<p>"+campo_email+" no es un correo </p>";
					funciones.mensajes(msn);
					msn ="";
					return false;
				}

				/* Terminos y condiciones  */
				if (!$("#terminos").is(':checked')) {
					msn = msn+"<p>No se ha Seleccionano los terminos y condiciones </p>";
					funciones.mensajes(msn);
					msn ="";
					return false;
				}
				/* Productos */
				if(! funciones.validaCheck()){
					msn = msn+"<p>No se ha Seleccionano Ningun producto </p>";
					funciones.mensajes(msn);
					msn ="";
					return false;
				}
			}
			
			funciones.mensajes(msn);
			msn ="";
			return true;
		
		},
		validaCheck: function(){
			var fla = false;
			$(".my-clase input[type=checkbox]").each(function() {
				if ($(this).is(":checked")) {
					fla = true;
					return false;
				}
			});
			return fla;
		},
		validacionGeneral: function(){
			var estado = false;
			$("#formulario_registro input.campo").each(function() {
				if ($(this).val() != ""){
					estado = true;
				}else{
					estado = false;
				}
			});
			return estado;
		},
		mensajes: function(mensaje){
			if (mensaje == ""){
				$(".error").fadeOut;
			}else{
				$(".error").fadeIn();
				$("#mensajes").html(mensaje);
			}
		},
		sololetras: function(){
			if (event.keyCode >41 && event.keyCode  <58) {
				event.returnValue = false;
			}
		},
		menuOculto: function() {
			if ($(".oculto-menu").hasClass('active')){
				$(".oculto-menu").removeClass('active');
			}else{
				$(".oculto-menu").addClass('active');
			}
		},
		facebook: function() {
			window.open(" http://www.facebook.com/sharer.php?s=100&p[url]=http://localhost/ardenformen/#/&p[images][0]=http://localhost/ardenformen/img/img_ppal.png&p[title]=Kit Deportivo","ventanacompartir", "toolbar=0, status=0, width=650, height=450");
		},
		twitter: function(){
			window.open('https://twitter.com/home?status=Kit Deportivo Ganáte uno de los 20 balones adidas Autografiados por DAVID OSPINA + kit deportivo http://localhost/ardenformen/', '', 'width=500, height=400');
		},
		googlplus: function(){
			window.open('https://plus.google.com/share?url=http://localhost/ardenformen/', '', 'width=500, height=100')
		},
		Departament: function(){
			var departament = $('#departament');
    		$.ajax({
        		method: 'GET',
        		url: url+'DataForm/getDepartament'
    		}).done(function (response) {
        		//console.log(response);
       			for(var i = 0; i < response.length; i++){
           			departament.append('<option value="'+ response[i].departamento_id +'">'+ response[i].nombre +'</option>');
       			}
    		});
		},
		City: function($id){
			var city = $('#city');
	        $.ajax({
	            method: 'GET',
	            data: {id: $id},
	            url: url+'DataForm/getCity'
	        }).done(function (response) {
	            city.html('');
	            for(var i=0; i < response.length; i++){
	                city.append('<option value="'+ response[i].ciudad_id +'">'+ response[i].nombre +'</option>')
	            }
	        })
		}
		
	}
});