$(function(){
  var header = document.getElementById('header');
  var headroom = new Headroom(header);
  headroom.init();


  // calculo el width

  var width = $(window).width(),
      enlaces = $('#enlaces'),
      btnMenu = $('#btn-menu'),
      icono = $('#btn-menu .icono');

      if(width < 768){
        enlaces.hide();
        icono.addClass('ion-navicon-round');
      }

      btnMenu.on('click', function(e){
        enlaces.slideToggle();
        icono.toggleClass('ion-navicon-round');
        icono.toggleClass('ion-close-round');
      });

      $(window).on('resize', function(){
        if($(this).width > 768){
          enlaces.show();
          icono.addClass('ion-close-round');
          icono.removeClass('ion-navicon-round');
        }else{
          enlaces.hide();
          icono.removeClass('ion-close-round');
        }
      });
});

// validacion del formulario

var d = document;

var form = d.querySelector('form');
var nombre = form.querySelectorAll('input[type=text]')[0];
var email = form.querySelector('input[type=email]');
var telefono = form.querySelectorAll('input[type=text]')[1];
var comentarios = form.querySelector('textarea');

var regExpEmail = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;




// var regExpNumbers = /[^0-9]/;
