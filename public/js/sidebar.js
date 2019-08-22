const menu = document.querySelector('.menu');
const sidebar = document.querySelector('.sidebar');
const cerrar = document.querySelector('.cerarMenu');


menu.addEventListener("click", function(e){
    e.preventDefault();
    sidebar.classList.add('opened');
    sidebar.classList.remove('closed');
})

cerrar.addEventListener("click", function(e){
    e.preventDefault();
    sidebar.classList.add('closed');
    sidebar.classList.remove('opened');
})