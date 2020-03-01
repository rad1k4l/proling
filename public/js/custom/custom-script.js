new WOW().init();

// Material Select Initialization
$(document).ready(function() {
    $('.mdb-select').materialSelect();
});

$(window).on("load", function () {
    $('#mdb-preloader').fadeOut('slow');
});
$(function () {
    $.nette.init();
    $('[data-toggle="tooltip"]').tooltip();
    $('body').tooltip({ selector: '[data-toggle="tooltip"]' });
    $(".button-collapse").sideNav();
    console.log('initialized');
});
