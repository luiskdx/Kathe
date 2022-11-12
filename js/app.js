if ($('body').hasClass('page-home')) {
  const botonregistro = document.getElementById("showRegister");
  const botonlogin = document.getElementById("showLogin");
  const formregistro = document.getElementById("form-register");
  const formlogin = document.getElementById("form-login");

  botonregistro.addEventListener("click", function () {
    formlogin.classList.remove("active");
    formregistro.classList.add("active");
  })

  botonlogin.addEventListener("click", function () {
    formlogin.classList.add("active");
    formregistro.classList.remove("active");
  })
}

$('.submit-search').click(function(e){
  e.preventDefault()
  let str_search = $('.input-search').val();

  $(".product").each(function(index){
    let name_product = $(this).data('nombre');

    if(name_product.indexOf(str_search) >= 0){
      $(".product").hide();
      $(this).show();
    }
  });
});