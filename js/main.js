$(function () {
    var url = "http://localhost/src/App.php?f=";
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
                console.log(response);
            })
            .fail(function(response) {
                console.log(response);
            });
        }else{
            console.log("no dio");
        }
        
    });
    $(".x").click(function(event) {
        event.preventDefault();
        $(".error").fadeOut();
        $("#mensajes").html("");
    });
});