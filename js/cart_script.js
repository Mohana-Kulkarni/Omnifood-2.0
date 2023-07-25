
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
  const img = document.getElementById('empty-cart-img');
  var xhr = new XMLHttpRequest();
  var res = "";
  xhr.open("GET", "./controllers/sub_meal_qty.php?id="+id, true); 
  xhr.onreadystatechange = function() {
    if(xhr.readyState == 4 && xhr.status == 200) {
      res = this.responseText;
      res = JSON.parse(res);  
      console.log(res.qty); 
      if(res.qty <= 0) {
        card.remove();
        if(res.isEmpty) {
          img.innerHTML = "<img src='img/icons/empty_cart.png' alt='empty-cart'></img>";
        }
      } else {
        qty.innerHTML = res.qty;
      } 
    }
  }
  xhr.send();
}

function add_qty(id) {

  const qty = document.getElementById('qty-'+id); 
  var xhr = new XMLHttpRequest();
  var res = "";
  xhr.open("GET", "./controllers/add_meal_qty.php?id="+id, true); 
  xhr.onreadystatechange = function() {
    if(xhr.readyState == 4 && xhr.status == 200) {
      res = this.responseText;
      res = JSON.parse(res);  
      console.log(res.qty);  
      qty.innerHTML = res.qty;
      
    }
  }
  xhr.send();
}