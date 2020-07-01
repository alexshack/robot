$(document).ready(function() {
  var ymNum = 0;
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });
  $(".phone-mask").mask("+7 (999) 999-99-99");

  $('a.slide').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    var offs = 60;
    if (target.length) {
      $('html,body').animate({
      scrollTop: target.offset().top - offs
      }, 1000);
      if ( ($(this).hasClass("nav-link")) && ($(window).width() < 992)) {
        $('.navbar-toggler').click(); 
      }
      return false;
    }
   }
  });
  
});