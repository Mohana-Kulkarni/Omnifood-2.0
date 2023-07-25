
function add_to_cart(id) {
  
  const add_cart = document.getElementById(id);
  
  var xhr = new XMLHttpRequest();
  var res = "";
  xhr.open("GET", "./controllers/session_handler.php?id="+id, true); 
  xhr.onreadystatechange = function() {
    if(xhr.readyState == 4 && xhr.status == 200) {
      res = this.responseText;
      res = JSON.parse(res);  
      console.log(res.result);  
      if(res.result === "SUCCESS") {
        add_cart.innerHTML = "<img class='add-icon' src='img/icons/subtract.svg' alt='subtract-icon' />";
      } else {
        add_cart.innerHTML = "<img class='add-icon' src='img/icons/add.svg' alt='add-icon' />";
      }
      
    }
  }
  xhr.send();
}

// function redirect_to_cart(arr) {

//   const cart_btn = document.getElementById("cart-btn");

//   var xhr = new XMLHttpRequest();
//   var res = "";
//   xhr.open("POST", "./controllers/cart_cntr.php", true); 
//   xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

//   xhr.send('data=' + JSON.stringify(arr));

//   xhr.onreadystatechange = function() {
//     if(xhr.readyState === XMLHttpRequest.DONE) {
//       if(xhr.status === 200) {
//         console.log(xhr.responseText);
//       } else {
//         console.log('Error : ' + xhr.status);
//       }
      
//     }
//   }
// }

function redirect_to_cart_page() {

  const cart_btn = document.getElementById("cart-btn");

  cart_btn.addEventListener('click', function() {
    window.location.href = "cart.php";
  });
}

function sub_qty(id) {
  const qty = document.getElementById('qty-'+id); 
  const card = document.getElementById('card-'+id);
  const checkout_item = document.getElementById('checkout-item-'+id);
  const checkout_qty = document.getElementById('checkout-'+id);
  const img = document.getElementById('empty-cart-img');
  const total = document.getElementById('total');

  var xhr = new XMLHttpRequest();
  var res = "";
  xhr.open("GET", "./controllers/sub_meal_qty.php?id="+id, true); 
  xhr.onreadystatechange = function() {
    if(xhr.readyState == 4 && xhr.status == 200) {
      res = this.responseText;
      // console.log(res);
      res = JSON.parse(res);  
      // console.log(res); 
      if(res.qty <= 0) {
        card.remove();
        checkout_item.remove();
        total.innerHTML = '&#8377;' + res.price;
        if(res.isEmpty) {
          img.innerHTML = "<img src='img/icons/empty_cart.png' alt='empty-cart'></img>";
        }
      } else {
        qty.innerHTML = res.qty;
        checkout_qty.innerHTML = res.qty;
        total.innerHTML = '&#8377;' + res.price;
      } 
    }
  }
  xhr.send();
}

function add_qty(id) {

  const qty = document.getElementById('qty-'+id); 
  const checkout_qty = document.getElementById('checkout-'+id);
  const total = document.getElementById('total');

  var xhr = new XMLHttpRequest();
  var res = "";
  xhr.open("GET", "./controllers/add_meal_qty.php?id="+id, true); 
  xhr.onreadystatechange = function() {
    if(xhr.readyState == 4 && xhr.status == 200) {
      res = this.responseText;
      // console.log(res);
      res = JSON.parse(res);  
      console.log(res.qty);  
      qty.innerHTML = res.qty;
      checkout_qty.innerHTML = res.qty;
      total.innerHTML = '&#8377;' + res.price;
    }
  }
  xhr.send();
}

function on() {
  console.log("Clicked");
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}