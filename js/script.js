var numero1 = 0;
var numero2 = 0;
var numero3 = 0;
var numero4 = 0;



$(document).ready(function(){

  $("#S-arrowslide1").click(function(event) {
     event.preventDefault();
     $("#arrowslide1").hide(500);
     $("#slide1").hide(500);
     $("#slide2").show();
     $("#arrowslide2").show();
  });
  $("#S-arrowslide2").click(function(event) {
     event.preventDefault();
     $("#arrowslide2").hide(500);
     $("#slide2").hide(500);
     $("#slide3").show();
     $("#arrowslide3").show();
  });
  $("#A-arrowslide2").click(function(event) {
     event.preventDefault();
     $("#arrowslide1").show(500);
     $("#slide1").show(500);
     $("#slide2").hide();
     $("#arrowslide2").hide();
  });
  $("#S-arrowslide3").click(function(event) {
     event.preventDefault();
     $("#arrowslide3").hide(500);
     $("#slide3").hide(500);
     $("#slide4").show();
     $("#arrowslide4").show();
  });
  $("#A-arrowslide3").click(function(event) {
     event.preventDefault();
     $("#arrowslide2").show(500);
     $("#slide2").show(500);
     $("#slide3").hide();
     $("#arrowslide3").hide();
  });
  $("#S-arrowslide4").click(function(event) {
     event.preventDefault();
     $("#arrowslide4").hide(500);
     $("#slide4").hide(500);
     var string ="";

      string +=numero1+numero2+numero3+numero4;
      var div = resultado[string];
      $("#tituloDescubre").css('font-size', '45px');
      $("#tituloDescubre").html("El TIDE que se adapta a ti es: ");
      $(".contenedor-final").html($("#"+div).html());

       $(".contenedor-final").show();
     $(".contenedor-final").show();
     reiniciar();
     // alert(resultado[string] + string);
  });

  $("#terminos2").click(function(event) {

      if($(this).prop('checked'))
        // event.preventDefault();
        $('#modalTerminos').modal('show');
    });

  $("#datos").click(function(event) {

      if($(this).prop('checked'))
        // event.preventDefault();
        $('#modalDatos_').modal('show');
    });

  $("#comienza").click(function(event) {
      event.preventDefault();
      $("#descubre").hide(1000);
      $("#encuesta").show(1000);
  });

  function reiniciar (argument) {
      $('img[id*=imgslide]').removeClass('selectImage');
      $('img[id*=imgslidemanchas]').removeClass('selectImage');
      $('img[id*=imgslidefragancia]').removeClass('selectImage');
      $('img[id*=imgslidealgo]').removeClass('selectImage');
      $("img[id*=arrowslide]").hide();
      numero1 = 0;
      numero2 = 0;
      numero3 = 0;
      numero4 = 0;
  }


  $("#A-arrowslide4").click(function(event) {
     event.preventDefault();
     $("#arrowslide3").show(500);
     $("#slide3").show(500);
     $("#slide4").hide();
     $("#arrowslide4").hide();
  });

  $(".lavado").click(function(event) {
     var number = $(this).attr('data-number');
     numero1= number;
     event.preventDefault();
     $('img[id*=imgslide]').removeClass('selectImage');
     $("#imgslide"+number).addClass('selectImage');
     $("#S-arrowslide1").show();


  });
  $(".manchas").click(function(event) {
     var number = $(this).attr('data-number');
     numero2= number;

     event.preventDefault();
     $('img[id*=imgslidemanchas]').removeClass('selectImage');
     $("#imgslidemanchas"+number).addClass('selectImage');
     $("#S-arrowslide2").show();


  });
  $(".fragancia").click(function(event) {
     var number = $(this).attr('data-number');
     numero3= number;

     event.preventDefault();
     $('img[id*=imgslidefragancia]').removeClass('selectImage');
     $("#imgslidefragancia"+number).addClass('selectImage');
     $("#S-arrowslide3").show();


  });
  $(".algo").click(function(event) {
     var number = $(this).attr('data-number');
     numero4= number;

     event.preventDefault();
     $('img[id*=imgslidealgo]').removeClass('selectImage');
     $("#imgslidealgo"+number).addClass('selectImage');
     $("#S-arrowslide4").show();

  });

		$(".cerrar2").click(function(event) {
			event.preventDefault();
            $(".terminos").hide(500);
            $(".registrarse").hide(500);
            $(".exitoRegister").hide(500);
            $(".codeRegisterOK").hide(500);
             $(".init").show(500);
             $('#descubre').show(1000);
             $('#encuesta').hide(1000);

		});
      $('a.baja,navbar-toggle').click(function(e) {
            e.preventDefault();
            esconderTodo();
            
            $("#tituloDescubre").css({
              'font-size':'73px',
              'padding': '0 80px'
            });
            $("#tituloDescubre").html("Descubre cuál es tu");
            reiniciar();
             $(".init").show(500);
             $("#cedula").val("");
            $("#codigos").val("");

            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
            && location.hostname == this.hostname) {
              var $target = $(this.hash);
              $target = $target.length && $target
              || $('[name=' + this.hash.slice(1) +']');
              if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body')
                .stop().animate({scrollTop: targetOffset}, 1500, 'easeOutBounce');
               return false;
              }
            }
      });

      $("#contacto").click(function(event) {
          event.preventDefault();
          $(".registrarse").hide(500);
            $(".exitoRegister").hide(500);
            $(".codeRegister").hide(500);
            $(".codeRegisterOK").hide(500);
          $(".terminos").hide(500);
          $(".init").hide(500);
          $(".contacto").show(500);
          $('html,body').animate({scrollTop:0},'slow');return false; $('#descubre').show(1000);$('#encuesta').hide(1000);

      });

      $("#registrarse").click(function(event) {
         event.preventDefault();
         $(".init").hide(500);
         $(".registrarse").show(500);
         $('html,body').animate({scrollTop:0},'slow');return false; $('#descubre').show(1000);$('#encuesta').hide(1000);
      });

      $("#dpto").append('<option value=""></option>');
      $("#ciudad").append('<option value=""></option>');

      for (var i = 0; i< departamentos.length ; i++) {
          $("#dpto").append('<option value="'+i+'">'+departamentos[i]+'</option>');
      };

      $("#dpto").change(function(event) {
          var municipios = ciudades[$(this).val()];
          console.log(municipios);
          $("#ciudad").html("");
          $("#ciudad").append('<option value=""></option>');
          for (var i = 0; i< municipios.length ; i++) {
           $("#ciudad").append('<option value="'+municipios[i]+'">'+municipios[i]+'</option>');
          };
      });

      $("#ingresa,#siguiente").click(function(event) {
         event.preventDefault();
         $(".init").hide(1000);
         $(".exitoRegister").hide(1000);
         
         $(".codeRegister").show(1000);
         $('html,body').animate({scrollTop:0},'slow');return false; $('#descubre').show(1000);$('#encuesta').hide(1000);

      });

      $("#volver").click(function(event) {
         event.preventDefault();
         $(".init").show(1000);
         $(".exitoRegister").hide(1000);
         $(".codeRegister").hide(1000);
         $(".codeRegisterOK").hide(1000);

      });

      $("#formCode").submit(function(event) {
          event.preventDefault();
          var documento = $("#cedula").val();
          var codigo = $("#codigos").val();
          var mensajes = [];

          if(documento.length == 0)
            mensajes.push("El campo Cédula es requerido");
          else if(documento.length < 6)
              mensajes.push("El campo Cédula debe tener mínimo 6 caracteres");
          else if(documento.length > 15)
              mensajes.push("El campo Cédula debe tener maximo 30 caracteres");
        
            if(codigo.length == 0)
              mensajes.push("El campo Codigo  requerido");

          if(mensajes.length>0){
              $(".errores").html("");
              $(".errores").append('<h1>Verifica estos datos: </h1>');

              for (var i = 0; i < mensajes.length; i++) {
                $(".errores").append('<p> - '+mensajes[i]+'</p> ');              
              };

              $(".errores").append('<br><button type="button" class="btn btn-default fucsia" data-dismiss="modal">Aceptar</button><br>');
              $('#myModal').modal('show')
          }else{
              $.post($(this).attr("action"), $(this).serialize(), function(data) {
                if(data == "OK")
                  {
                    $(".codeRegister").hide(1000);
                    $(".codeRegisterOK").show(1000);
                    $("#cedula").val("");
                    $("#codigos").val("");
                  }
                  else
                  {
                    $(".errores").html("");
                      $(".errores").append('<h1>Verifica estos datos: </h1>');
                      $(".errores").append('<p style="  margin-left: 25%;">  '+data+'</p> ');              
                   
                      $(".errores").append('<br><button type="button" class="btn btn-default fucsia" data-dismiss="modal">Aceptar</button><br>');
                      $('#myModal').modal('show');
                  }       
              });
          }
      });

      $(".sube").click(function(event) {
        $('html,body').animate({scrollTop:0},'slow');return false; $('#descubre').show(1000);$('#encuesta').hide(1000);
      });

      $("#termino,#termino2").click(function(event) {
            event.preventDefault();
            $(".init").hide(1000);
            $(".registrarse").hide(1000);
            $(".exitoRegister").hide(500);
            $(".contacto").hide(500);
            $(".terminos").show(1000);
            $('html,body').animate({scrollTop:0},'slow');return false; $('#descubre').show(1000);$('#encuesta').hide(1000);
      });
       
      $("#documento").change(function(event) {

      	$.post('datos.php?val=1', {identificacion: $(this).val()}, function(data) {
      		if(data>0){
      			$(".errores").html("");
              $(".errores").append('<h1>Verifica estos datos: </h1>');
              $(".errores").append('<p> El número de documento '+$("#documento").val() + ' ya existe</p> ');              
           
              $(".errores").append('<br><button type="button" class="btn btn-default fucsia" data-dismiss="modal">Aceptar</button><br>');
              $('#myModal').modal('show');
            $("#documento").val("");
      		}
      	});	 
      });
    });





    $("#formRegister").submit(function(event) {
        event.preventDefault();
        var mensajes = [];
        var nombre = $("#nombre").val();
        var apellido = $("#apellido").val();
        var documento = $("#documento").val();
        var tipo = $('#tipo').val();
        var dia = $("#dia").val();
        var mes = $("#mes").val();
        var telefono = $("#telefono").val();
        var ano = $("#ano").val();
        var correo = $("#correo").val();
        var dpto = $("#dpto").val();
        var ciudad = $("#ciudad").val();
        var termino = 0;
        var datos = 0;
        var cant = 0;

        if($("#terminos2").prop('checked'))
          termino++;
        else
          termino =0;

        if($("#datos").prop('checked'))
          datos++;
        else
          datos =0;

        $(".compras").each(function(){  
            if($(this).prop('checked')){
              cant++;
            }
        });
        


       

        if(documento.length == 0)
            mensajes.push("El campo Número de documento es requerido");
        else if(documento.length < 6)
            mensajes.push("El campo Número de documento debe tener mínimo 6 caracteres");
        else if(documento.length > 15)
            mensajes.push("El campo Número de documento debe tener maximo 30 caracteres");
      
        if (tipo.trim() === '') 
            mensajes.push("El campo Tipo de documento es requerido");

        if(nombre.length == 0)
            mensajes.push("El campo Nombre es requerido");
        else if(nombre.length < 3)
            mensajes.push("El campo Nombre debe tener mínimo 3 caracteres");
        else if(nombre.length > 30)
            mensajes.push("El campo Nombre debe tener maximo 30 caracteres");

        if(apellido.length == 0)
            mensajes.push("El campo Apellidos es requerido");
        else if(apellido.length < 3)
            mensajes.push("El campo Apellidos debe tener mínimo 3 caracteres");
        else if(apellido.length > 30)
            mensajes.push("El campo Apellidos debe tener maximo 30 caracteres"); 


        if(dia.length == 0)
            mensajes.push("El campo día es requerido");
        else if(dia > 28 && mes==2)
            mensajes.push("El campo día no acepta numeros mayores a 28");
        else if(dia > 30 && mes!=2)
            mensajes.push("El campo día no acepta numeros mayores a 30");

        if (mes.trim() === '') 
            mensajes.push("El campo mes es requerido");

        if(ano.length == 0)
            mensajes.push("El campo Año es requerido");
        else if(ano.length >1 && ano.length < 4)
            mensajes.push("El campo Año debe tener mínimo 4 numeros");
        else if(ano < 1910 )
            mensajes.push("El campo Año no acepta numeros menores a 1910");
        else if(ano > 1997 )
            mensajes.push("El campo Año no acepta numeros mayores a 1997");

        if(telefono.length == 0)
            mensajes.push("El campo teléfono es requerido");
        else if(telefono.length < 7)
            mensajes.push("El campo teléfono debe tener mínimo 7 caracteres");
        else if(telefono.length > 10)
            mensajes.push("El campo teléfono debe tener maximo 10 caracteres");  


        if(correo.length == 0)
            mensajes.push("El campo Correo Electrónico es requerido");
        else if(correo.length < 10)
            mensajes.push("El campo Correo Electrónico debe tener mínimo 10 caracteres");
        else if(validarEmail(correo)==0)
            mensajes.push("El campo Correo Electrónico no es un correo valido");

        if (dpto.trim() === '') 
            mensajes.push("El campo Departamento es requerido");

        if (ciudad.trim() === '') 
            mensajes.push("El campo Ciudad es requerido");

        if(cant==0)
            mensajes.push("Debe seleccionar como mínimo una marca comprada");

        if(termino==0)
            mensajes.push("Debe aceptar términos y condiciones");
        if(datos==0)
            mensajes.push("Debe autorizar el uso de su información ");
        


        $(".errores").html("");

        if(mensajes.length>0){
            $(".errores").append('<h1>Verifica estos datos: </h1>');

          for (var i = 0; i < mensajes.length; i++) {
            $(".errores").append('<p> - '+mensajes[i]+'</p> ');              
          };
            $(".errores").append('<br><button type="button" class="btn btn-default fucsia" data-dismiss="modal">Aceptar</button><br>');
            $('#myModal').modal('show')
        }else
        {
        	var datos = $("#formRegister").serialize();
        	var ruta = $("#formRegister").attr("action");


        	$.post(ruta, datos, function(data) {
        		if(data==1){
        			$('#formRegister').each (function(){
				
					    $("#nombre").val("");
              $("#apellido").val("");
              $("#documento").val("");
              $('#tipo').val("");
              $("#dia").val("");
              $("#mes").val("");
              $("#telefono").val("");
              $("#ano").val("");
              $("#correo").val("");
              $("#dpto").val("");
              $("#ciudad").val("");
					
					});

        			$(".exitoRegister").show(500);
        			$(".registrarse").hide(500);
        		}
        		else
        			alert("Ocurrio un error");
        		
        	});
        }

    });

  
    
//$('#modalTerminosm').modal('show');