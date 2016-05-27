$(function () {
    var url = "http://localhost/src/App.php?f=";
    var messages = "";
    var user_id = "";
    funciones.Departament();
    $("#cedula").keypress(function(event) {
        if (event.keyCode >41 && event.keyCode  <58) {
            return event.returnValue = true;
        }else{
            return event.returnValue = false;
        }
    });
    $('#departament').change(function(){
        var id = $(this).val();
        funciones.City(id);
    });
    $("#enviaform").click(function(event) {
        event.preventDefault();
        if(funciones.validarForm()){ 
            var parametros = $("#formulario_registro").serialize();
            $.ajax({
                url: url+"User/store",
                type: 'POST',
                data: parametros,
            })
            .done(function(response) {
                var messenger;
                messages = response.menssage;
                user_id = response.user_id;
                funciones.mensajes("<p class='text-center fuente total'>"+messages+"</p>");
                $("#esconder").fadeOut();
                $("#ingresa-codigo").fadeIn();
                $("#cedRegistro").val($("#cedula").val());
                $("#id_user").val(user_id);
                $("#codigo").focus();
            })
            .fail(function(response) {
                var messenger;
                if (response.user_id != ""){ 
                    messages = response.menssage;
                    user_id = response.user_id;
                    for (var i = 0; i < messages.length; i++) {
                        messenger = messenger+"<p>"+messages[i]+"</p>";
                    }
                    funciones.mensajes(messenger);
                }
                console.log(response);
            });
        }
        
    });


    $(".x").click(function(event) {
        event.preventDefault();
        $(".error").fadeOut();
        $("#mensajes").html("");
    });
    $(".participar").click(function(event) {
        event.preventDefault();
        banderas = true;
        funciones.efectoForm(banderas);
        $("#ingresa-codigo").css('display', 'none');
        $("#esconder").css('display', 'block');
    });
    $(".inicio").click(function(event) {
        event.preventDefault();
        banderas = false;
       funciones.efectoForm(banderas);
    });
    $(".codigo").click(function(event) {
        event.preventDefault();
        banderas = true;
        funciones.efectoForm(banderas);
        $("#esconder").css('display', 'none');
        $("#ingresa-codigo").css('display', 'block');
    });
});