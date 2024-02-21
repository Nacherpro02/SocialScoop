document.addEventListener("DOMContentLoaded", function(){
    document.getElementById("btn_insta").addEventListener("click", function() {
        window.open("https://www.instagram.com/nacheer.07/");
    });
});

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("btn_youtube").addEventListener("click", function() {
        window.open("https://www.youtube.com/@nacher2295/");
    });
});

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("btn_github").addEventListener("click", function() {
        window.open("https://github.com/Nacherpro02");
    });
});

document.getElementById("btn__iniciar-sesion").addEventListener("click", IniciarSesion);
document.getElementById("btn__registrarse").addEventListener("click", register);
window.addEventListener("resize", anchoPag)

var contenedor_login_register = document.querySelector(".contenedor__login-register");
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var caja_trasera_login = document.querySelector(".caja__trasera-login");
var caja_trasera_register = document.querySelector(".caja__trasera-register");


function anchoPag(){
    if(window.innerWidth > 850){
        caja_trasera_login.style.display = "block";
        caja_trasera_register.style.display = "block";
    }else{
        caja_trasera_login.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_register.style.display = "none";
        formulario_login.style.display = "block";
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px";
    }
}
function IniciarSesion() {
    if(window.innerWidth > 850){
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "10px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    }else{
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "none";
    }
}

function register(){
    if(window.innerWidth > 850){
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "410px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    }else{
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.display = "1";
    }
}
