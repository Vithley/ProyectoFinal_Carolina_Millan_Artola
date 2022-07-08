//Boton de hamburguesa

$(document).ready(function() {
    $('.full-menu').hide();
    $('#btn-menu').click(function() {
        $('.menu').toggleClass('close');
        $('.full-menu').slideToggle();
        
    });
});
