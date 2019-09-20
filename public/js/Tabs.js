let Tabs = {
    elements: [{
        tabButtons: [],
        tabContents: [],
    }],
    /** El loader de los Tabs */
    load(){
        this.elements = [];
        htmls = document.querySelectorAll('.tabs');
        for(let i = 0; i < htmls.length; i++){
            htmls[i].classList.add('tabs' + i);
            this.elements.push({
                tabButtons: document.querySelectorAll('.tabs' + i + ' .tab-menu li a'),
                tabContents: document.querySelectorAll('.tabs' + i + ' .tab-body .tab-li'),
            });
            for(let j = 0; j < this.elements[i].tabButtons.length; j++){
                this.elements[i].tabButtons[j].addEventListener('click', function(e){
                    e.preventDefault();
                    if(!this.classList.contains('active')){
                        Tabs.open(i, j);
                    }
                });
            }
        }
    },
    open(number, button){
        for(let j = 0; j < this.elements[number].tabContents.length; j++){
            if(this.elements[number].tabContents[j].classList.contains('active')){
                this.elements[number].tabButtons[j].classList.remove('active');
                this.elements[number].tabContents[j].classList.remove('active');
            }
        }
        this.elements[number].tabButtons[button].classList.add('active');
        this.elements[number].tabContents[button].classList.add('active');
    },
};

document.addEventListener('DOMContentLoaded', function(){
    Tabs.load()
});