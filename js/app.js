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

  if(str_search != ''){
    $(".product").hide();

    $(".product").each(function(index){
      let name_product = $(this).data('nombre');

      if (name_product.toLowerCase().indexOf(str_search.toLowerCase()) >= 0){
        $(this).show();
      }
    });
  }
  else {
    $(".product").show();
  }
});

$(".select-material .select-filter").change(function(){
  let material = $('.select-material .select-filter option:selected').val();

  if (material != '') {
    $(".product").hide();

    $(".product").each(function(index){
      let material_product = $(this).data('empaque');

      if (material_product.toLowerCase().indexOf(material.toLowerCase()) >= 0) {
        $(this).show();
      }
    });
  }
  else {
    $(".product").show();
  }
});

$(".select-kind .select-filter").change(function () {
  let kind = $('.select-kind .select-filter option:selected').val();

  if (kind != '') {
    $(".product").hide();

    $(".product").each(function (index) {
      let kind_product = $(this).data('tipo');

      if (kind_product.toLowerCase().indexOf(kind.toLowerCase()) >= 0) {
        $(this).show();
      }
    });
  }
  else {
    $(".product").show();
  }
});