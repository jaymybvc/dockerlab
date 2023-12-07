$(document).ready(function() {
    $("#more").click(function() {
      $('html, body').animate({
        scrollTop: $('#scrolldown').offset().top
      },1000); 
    });
  });