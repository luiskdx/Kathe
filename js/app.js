const botonregistro = document.getElementById("showRegister");
const botonlogin = document.getElementById("showLogin");
const formregistro = document.getElementById("form-register");
const formlogin = document.getElementById("form-login");

botonregistro.addEventListener("click", function(){
formlogin.classList.remove("active");
formregistro.classList.add("active");
})

botonlogin.addEventListener("click", function(){
formlogin.classList.add("active");
formregistro.classList.remove("active");
})