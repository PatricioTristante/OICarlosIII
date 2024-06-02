console.log("administracion.js cargado correctamente");

jQuery(document).ready(function($){

    $('#elegir').on('click', function(){
        $('.administrar').addClass('oculto');
        $('#elegirEdicion').removeClass('oculto');
        $('.boton').removeClass('activo');
        $(this).addClass('activo');
    });

    $('#crear').on('click', function(){
        $('.administrar').addClass('oculto');
        $('#crearEdicion').removeClass('oculto');
        $('.boton').removeClass('activo');
        $(this).addClass('activo');
    });

});