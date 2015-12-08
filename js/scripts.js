$(document).ready(function animateHeart() {
    $('span.heart').animate({
        fontSize: $('span.heart').css('fontSize') == '10px' ? '8px' : '10px'
    }, 500, animateHeart);

    $('.datepicker').pickadate({
      selectMonths: true, 
      selectYears: 90
    });

});

