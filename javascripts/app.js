document.getElementById("btn_Register").addEventListener("click", register);
document.getElementById("btn_iniciar_seccion").addEventListener("click", iniciar_seccion);
window.addEventListener("resize", anchoPagina);
//declaracion de variables
let contenedor_login_register = document.querySelector(".contenedor_login_register");
let formulario_login = document.querySelector(".formulario_login");
let formulario_register = document.querySelector(".formulario_register");
let caja_trasera_login = document.querySelector(".caja_tracera_derecha");
let caja_trasera_register = document.querySelector(".caja_tracera_izq");




function anchoPagina(){4
if(window.innerWidth > 850){
    caja_trasera_login.style.display="block";
    caja_trasera_register.style.display="block";
}
else{
    caja_trasera_register.style.display="block";
    caja_trasera_register.style.opacity="1";
    caja_trasera_login.style.display="none";
    formulario_login.style.display="block";
    formulario_register.style.display ="none";
    contenedor_login_register.style.left="0px";
}
}

anchoPagina();

function register(){
    if(window.innerWidth > 850){
    formulario_register.style.display ="block";
    contenedor_login_register.style.left="410px";
    formulario_login.style.display="none";
    caja_trasera_register.style.opacity="0";
    caja_trasera_login.style.opacity="1";
    }
    else{
        formulario_register.style.display ="block";
        contenedor_login_register.style.left="0px";
        formulario_login.style.display="none";
        caja_trasera_register.style.display="none";
        caja_trasera_login.style.display="block";
        caja_trasera_login.style.opacity="1";
    }
}
function iniciar_seccion(){
    if(window.innerWidth > 850){
    formulario_register.style.display ="none";
    contenedor_login_register.style.left="10px";
    formulario_login.style.display="block";
    caja_trasera_register.style.opacity="1";
    caja_trasera_login.style.opacity="0";
    }
  else{
    formulario_register.style.display ="none";
    contenedor_login_register.style.left="0px";
    formulario_login.style.display="block";
    caja_trasera_register.style.display="block";
    caja_trasera_login.style.display="none";
  }
}