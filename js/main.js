$(function () {
    var url = "http://localhost/TideCocina/"
    funciones.Departament();
    $('#departament').change(function(){
        var id = $(this).val();
        funciones.City(id);
    });
    $("#enviaform").click(function(event) {
        event.preventDefault();
        funciones.validarForm();
        $.ajax({
            url: '',
            type: 'default GET (Other values: POST)',
            dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
            data: {param1: 'value1'},
        })
        .done(function() {
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        
    });
    $(".x").click(function(event) {
        event.preventDefault();
        $(".error").fadeOut();
        $("#mensajes").html("");
    });
});