  function validarEmail( email ) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(email) )
        return 0;
      else
        return 1;
}
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
    function isNumber(e) {
      k = (document.all) ? e.keyCode : e.which;
      if (k==8 || k==0) return true;
      patron = /\d/;
      n = String.fromCharCode(k);
      return patron.test(n);
      }

      function esconderTodo(){
        $(".terminos").hide(500);
            $('#descubre').show(1000);
             $('#encuesta').hide(1000);
            $(".registrarse").hide(500);
            $(".exitoRegister").hide(500);
            $(".codeRegister").hide(500);
            $(".codeRegisterOK").hide(500);
            $(".contacto").hide(500); 
            $(".contenedor-final").hide();
            $("#slide1").show(500);
            $("#descubre").show(1000);
            $("#encuesta").hide(1000);
      }