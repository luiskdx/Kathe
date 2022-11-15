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

    $(".product").each(function(index){
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

let count_items

if (sessionStorage.getItem('count_items') != null){
  $('.total-items span').empty().text(sessionStorage.getItem('count_items'));
}

count_items = parseInt($('.total-items span').text())
let data_product = {};
let data_remove = {};

$(".product").each(function(index){
  let id_product = $(this).attr('id');
  
  if (sessionStorage.getItem('qty_product_' + id_product)) {
    $(this).find('.qty').val(sessionStorage.getItem('qty_product_' + id_product))
  }
})

$('.add-cart').click(function(){
  let id_product_parent = $(this).parent().attr('id');
  let qty_product = $(this).parent().find('.qty').val();

  qty_product++;
  $(this).parent().find('.qty').val(qty_product);

  count_items = count_items + 1;
  sessionStorage.setItem('count_items', count_items)
  
  $('.total-items span').text(count_items);

  data_product['product_' + id_product_parent] = { id: id_product_parent, qty: qty_product};

  console.log(data_product, 'data1');

  $.post(
    "funciones/obtener-productos.php",
    {
      data_product,
    },
    (response) => {
      // response from PHP back-end
      console.log(`Response from sever side is: ${response}`);
    }
  );

  sessionStorage.setItem('id_product_' + id_product_parent, id_product_parent)
  sessionStorage.setItem('qty_product_' + id_product_parent, qty_product)
});

let total_price = 0;

if($('body').hasClass('page-bill')){
  $('.product .price .value').each(function () {
    let price = parseInt($(this).text());

    total_price = total_price + price;
  })

  $('.total-price .total span').empty().text(total_price);
}

$('.remove-product').click(function(){
  let id_product_parent = $(this).parent().attr('id');
  let qty_product = $(this).parent().find('.quantity input').val();

  count_items = count_items - qty_product;
  $('.total-items span').text(count_items);

  $(this).parent().remove()

  data_remove['product_' + id_product_parent] = { id: id_product_parent, qty: qty_product };

  console.log(data_remove);

  $.post(
    "funciones/deslistar-producto.php",
    {
      data_remove,
    },
    (response) => {
      console.log(`Response from sever side is: ${response}`);
    }
  );

  data_remove = {};
  
  sessionStorage.setItem('count_items', count_items)
  sessionStorage.removeItem('id_product_' + id_product_parent)
  sessionStorage.removeItem('qty_product_' + id_product_parent)
})