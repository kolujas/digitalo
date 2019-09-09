let submit = document.querySelector('.form-submit');
let mensaje = document.querySelector('textarea');
let invalidTooltip = document.querySelector('textarea + .invalid-tooltip');

submit.addEventListener('click', function(){
    mensaje.classList.add("error-textarea");
});