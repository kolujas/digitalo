// validación del formulario

var d = document;

var form = d.querySelector('form'); // el formulario
var nombre = d.querySelectorAll('input[type=text]')[0];
var email = d.querySelector('input[type=email]');
var telefono = d.querySelectorAll('input[type=text]')[1];
var comentarios = d.querySelector('textarea');
var enviar = d.querySelector('button[type=submit]');
var error = 0;

var pTexto = new RegExp("[^a-zA-Z]"); // patron de texto
var pEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/; // patron de email
var pTelefono = /^\d+$/; // patron numerico 0-9
var pMin = /^.{15,}$/; // minimo de caracteres permitidos
var pMinTelefono = /^.{10,}$/; // minimo de caracteres permitidos
var Palfanumerico = /^\w+$/;; // alfanumerico


nombre.onblur = function(){
  var nameErr = 0;
  if(nombre.value.trim() === ""){
  error++
  nameErr++
  nombre.style.border = "2px solid red";
  nombre.nextElementSibling.innerText = "El campo nombre no puede estar vacío";
  }
}

  nombre.onkeyup = function(){
  var nameErr = 0;
  if(pTexto.test(nombre.value)){
    nombre.style.border = "2px solid red";
    nombre.nextElementSibling.innerText = "El campo solo debe contener texto";
    error++;
    nameErr++;
  }
  if(nameErr == 0){
      nombre.nextElementSibling.innerText = "";
      nombre.style.border = "2px solid #0088eb";
      error = 0;
    }
}

email.onblur = function(){
  var emailErr = 0;
  if(email.value.trim() === ""){
    email.style.border = "2px solid red";
    email.nextElementSibling.innerText = "El campo email no puede estar vacío";
    error++;
    emailErr++;
  }
}
  email.onkeyup = function(){
  var emailErr = 0;
  if(!pEmail.test(email.value)){
    email.style.border = "2px solid red";
    email.nextElementSibling.innerText = "El campo solo puede tener el formato de un email";
    error++
    emailErr++;
  }
  if(emailErr == 0){
    email.nextElementSibling.innerText = "";
    email.style.border = "2px solid #0088eb";
    error = 0;
  }
}


telefono.onblur = function(){
  var telefonoErr = 0;
  if(telefono.value.trim() === ""){
    telefono.style.border = "2px solid red"
    telefono.nextElementSibling.innerText = "El campo email no puede estar vacío";
    error++
    telefonoErr++
  }
}
  telefono.onkeyup = function(){
  var telefonoErr = 0;
  if(!pTelefono.test(telefono.value)){
    telefono.style.border = "2px solid red";
    telefono.nextElementSibling.innerText = "El campo solo puede contener caracteres numéricos";
    error++;
    telefonoErr++;
  }
  if(!pMinTelefono.test(telefono.value)){
    telefono.style.border = "2px solid red";
    telefono.nextElementSibling.innerText = "El campo debe tener 10 caracteres como minimo";
    error++
    telefonoErr++;
  }
  if(telefonoErr == 0){
    telefono.nextElementSibling.innerText = "";
    telefono.style.border = "2px solid #0088eb";
  }
}

comentarios.onblur = function(){
  var comentariosErr = 0;
  if(comentarios.value.trim() === ""){
  comentarios.nextElementSibling.innerText = "El campo comentarios no puede estar vacío";
  error++
  comentariosErr++
  comentarios.style.border = "2px solid red";
  }
}
comentarios.onkeyup = function(){
  var comentariosErr = 0;

  if(!pMin.test(comentarios.value)){
    comentarios.style.border = "2px solid red";
    comentarios.nextElementSibling.innerText = "El campo debe tener 15 caracteres como minimo";
    error++
    comentariosErr++;
  }

  if(pTelefono.test(comentarios.value)){
    comentarios.style.border = "2px solid red";
    comentarios.nextElementSibling.innerText = "El campo solo debe contener texto";
    error++;
    comentariosErr++;
  }


  if(comentariosErr == 0){
        comentarios.style.border = "2px solid #0088eb";
        comentarios.nextElementSibling.innerText = "";
        error = 0;
    }
}

  enviar.onsubmit = function(e){
  if(form.elements.length > 1 ){
    e.preventDefault();
    alert("los campos estan vacios");
    }
  }
