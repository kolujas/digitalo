

/** Get the scroll height */
document.getScroll = function(){
    if(window.pageYOffset != undefined){
        return [pageXOffset, pageYOffset];
    }else{
        var sx, sy, d = document,
            r = d.documentElement,
            b = d.body;
        sx = r.scrollLeft || b.scrollLeft || 0;
        sy = r.scrollTop || b.scrollTop || 0;
        return [sx, sy];
    }
}

document.addEventListener('DOMContentLoaded', function(){
    let header = document.getElementsByTagName('header');
    header = header[0];
    if(document.getScroll()[1] >= 530){
        header.classList.remove('top-menu');
        header.classList.add('bottom-menu');
    }
    window.addEventListener('scroll', function (e){
        let scroll = this.scrollY;
        if(scroll <= 529){
            header.classList.add('top-menu');
            header.classList.remove('bottom-menu');
        }else{
            header.classList.remove('top-menu');
            header.classList.add('bottom-menu');
        }
    });
});

// headroom

$(function(){
    var header = document.querySelector('.header');
    var headroom = new Headroom(header);
    headroom.init();

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