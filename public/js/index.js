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