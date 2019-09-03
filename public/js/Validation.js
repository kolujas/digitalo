let Validation = {
    forms: [],
    load(){
        let forms = document.querySelectorAll('.form-validate');
        for(let i = 0; i < forms.length; i++){
            forms[i].classList.add('form-validation-' + i);
            this.forms[i] = {};
            this.forms[i].element = forms[i];
            this.forms[i].button = document.querySelector('.form-validation-' + i + ' .form-submit');
            this.forms[i].inputs = document.querySelectorAll('.form-validation-' + i + ' input, .form-validation-' + i + ' textarea');
            this.forms[i].rules = [];
        }
        for(let i = 0; i < this.forms.length; i++){
            this.forms[i].button.addEventListener('click', function(e){
                e.preventDefault();
                Validation.getRules(i);
                Validation.validate(i);
            });
        }
    }, getRules(number){
        for(let i = 0; i < this.forms[number].inputs.length; i++){
            if(this.forms[number].inputs[i].dataset.rules){
                this.forms[number].rules[this.forms[number].inputs[i].name] = this.forms[number].inputs[i].dataset.rules.split(",");
                this.getParams(number, this.forms[number].inputs[i].name);
            }
        }
    }, getParams(number, name){
        let aux = [];
        for(let i = 0; i < this.forms[number].rules[name].length; i++){
            if(this.forms[number].rules[name][i].search(":") >= 0){
                aux[this.forms[number].rules[name][i].split(":")[0]] = this.forms[number].rules[name][i].split(":")[1];
            }else{
                aux[this.forms[number].rules[name][i]] = false;
            }
        }
        this.forms[number].rules[name] = aux;
    }, validate(number){
        let valid = true;
        for(let name in this.forms[number].rules){
            let next = true;
            for(let fName in this.forms[number].rules[name]){
                if(next){
                    next = this[fName](number, name, this.forms[number].rules[name][fName]);
                    valid = next;
                }
            }
        }
        if(valid){
            this.forms[number].element.submit();
        }
    }, setValid(number, input){
        input.classList.remove('invalid');
        input.classList.add('valid');
        document.querySelector('.form-validation-' + number + ' [name=' + input.name + '] ~ .invalid-tooltip').style.display = 'none';
    }, setInvalid(number, input, message){
        input.classList.remove('valid');
        input.classList.add('invalid');
        document.querySelector('.form-validation-' + number + ' [name=' + input.name + '] ~ .invalid-tooltip').innerHTML = message;
        document.querySelector('.form-validation-' + number + ' [name=' + input.name + '] ~ .invalid-tooltip').style.display = 'block';
    }, required(number, name){
        let input = document.querySelector('.form-validation-' + number + ' [name=' + name + ']');
        if(input.value){
            this.setValid(number, input);
            return true;
        }else{
            this.setInvalid(number, input, 'EL ' + name + ' es obligatorio');
            return false;
        }
    }, min(number, name, length){
        let input = document.querySelector('.form-validation-' + number + ' [name=' + name + ']');
        if(input.value.length >= parseInt(length)){
            this.setValid(number, input);
            return true;
        }else{
            this.setInvalid(number, input, 'EL ' + name + ' no puede tener menos de ' + length);
            return false;
        }
    }, max(number, name, length){
        let input = document.querySelector('.form-validation-' + number + ' [name=' + name + ']');
        if(input.value.length <= parseInt(length)){
            this.setValid(number, input);
            return true;
        }else{
            this.setInvalid(number, input, 'EL ' + name + ' no puede tener más de ' + length);
            return false;
        }
    }, numeric(number, name){
        let input = document.querySelector('.form-validation-' + number + ' [name=' + name + ']');
        if(!isNaN(input.value)){
            this.setValid(number, input);
            return true;
        }else{
            this.setInvalid(number, input, 'EL ' + name + ' debe ser formato numerico');
            return false;
        }
    }, email(number, name){
        let input = document.querySelector('.form-validation-' + number + ' [name=' + name + ']');
        let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(re.test(input.value)){
            this.setValid(number, input);
            return true;
        }else{
            this.setInvalid(number, input, 'EL ' + name + ' debe ser formato mail');
            return false;
        }
    },
};

document.addEventListener('DOMContentLoaded', function(){
    Validation.load();
});