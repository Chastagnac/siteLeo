$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 400 ) {
           $('.fa-arrow-circle-left:before').fadeIn(500);
       } else {
           $('.fa-arrow-circle-left:before').fadeOut(500);
       }

       if ($(this).scrollTop() > 650 ) {
           $('.fa-arrow-circle-left:before').fadeIn(300);
       } else {
           $('.fa-arrow-circle-left:before').fadeOut(300);
       }
});