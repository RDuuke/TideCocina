$(function () {
    var url = "http://localhost/src/App.php?f=";
    var messages = "";
    var user_id = "";
    var msn = "";
    funciones.Departament();
    funciones.galeria();
    $("#cedula").keypress(function(event) {
        if (event.keyCode >41 && event.keyCode  <58) {
            return event.returnValue = true;
        }else{
            return event.returnValue = false;
        }
    });
    $("#dia").keypress(function(event) {
        if (event.keyCode >41 && event.keyCode  <58) {
            return event.returnValue = true;
        }else{
            return event.returnValue = false;
        }
    });
        $("#anno").keypress(function(event) {
        if (event.keyCode >41 && event.keyCode  <58) {
            return event.returnValue = true;
        }else{
            return event.returnValue = false;
        }
    });
    $("#telefono").keypress(function(event) {
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
    $("#btn-envia-codigo").click(function(event) {
        event.preventDefault();
        if(funciones.validaCodigo()){
            var parametros_formCodigo = $("#ingresaCodigo").serialize();
            // console.log(parametros_formCodigo);
            $.ajax({
                url: url+'Code/Store',
                type: 'POST',
                data: parametros_formCodigo,
            })
            .done(function(response) {
                console.log(response);
                if(response.status == 0 || response.status == "0"){
                    msn = msn+response.message;
                    funciones.mensajes(msn);
                    msn = "";
                }else{
                    msn = response.message;
                    funciones.mensajes(msn);
                    var documento = $("#document").val();
                    localStorage.setItem("documento", documento);
                    msn = "";
                    setTimeout(function(){ window.location.replace("/cocina.php"); }, 3000);
                    
                }
            });
            
        }
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
                $("#document").val($("#cedula").val());
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
    $(".x2").click(function(event) {
        event.preventDefault();
        $(".error2").fadeOut();
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
    $("#salir_popup_cocina").click(function() {
        $("#nombre_participante").html("");
        $("#votos").html("");
        $("#imagen_popup_galeria").html('');
        $(".popup_coocina").fadeOut();
    });
    $("div.carga_cocina_imagen").on('click','.abre_foto',function() {
        var imagen = $(this).attr("src");
        var nombre = $(this).attr("data-nombre");
        var votos = $(this).attr("data-votos");
        $("#imagen_popup_galeria").attr("src",imagen);
        $("#nombre_participante").html(nombre);
        $("#votos").html("Votos "+ votos);
        console.log(nombre);
        $(".popup_coocina").fadeIn();
    });
    $(".salirventana").on('click','.btn_captura_correo', function () {
        var correo_votante = $("#id_correo_votante").val();
        $("input#votante_campo").val(correo_votante);
        $("#formulario_correo").hide('slow');
    });
    $(".Salir_ventana_correo").click(function() {
        $("#formulario_correo").hide();
    });
    $(".check").click(function(event) {
        var tipo = $(this).attr("data-id");
            console.log(tipo);
        if(tipo == "terminos"){
            $(".terminos").fadeIn();
        }
        if (tipo == "politicas"){
            $(".politicas").fadeIn();
        }
    });
});