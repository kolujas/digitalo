let Sidebar = {
    btnOpen: document.querySelector('.btnSidebar'),
    element: document.querySelector('.sidebar'),
    btnClose: document.querySelector('.sidebar .btnClose'),
    /** The Sidebar's loader */
    load(){
        this.btnOpen.addEventListener("click", function(e){
            e.preventDefault();
            Sidebar.element.classList.add('opened');
            Sidebar.element.classList.remove('closed');
        })
        this.btnClose.addEventListener("click", function(e){
            e.preventDefault();
            Sidebar.element.classList.remove('opened');
            Sidebar.element.classList.add('closed');
        })
    },
};

document.addEventListener('DOMContentLoaded', function(){
    Sidebar.load();
});