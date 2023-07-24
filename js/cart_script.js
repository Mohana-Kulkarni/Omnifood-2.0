
function add_to_cart(id) {
  
  const btn_cart = document.getElementById(id);
  
  var xhr = new XMLHttpRequest();
  var res = "";
  xhr.open("GET", "./controllers/session_handler.php?id="+id, true); 
  xhr.onreadystatechange = function() {
    if(xhr.readyState == 4 && xhr.status == 200) {
      res = this.responseText;
      res = JSON.parse(res);  
      console.log(res.result);  
      if(res.result === "SUCCESS") {
        btn_cart.innerHTML = "<img class='add-icon' src='img/icons/subtract.svg' alt='add-icon' />";
      } else {
        btn_cart.innerHTML = "<img class='add-icon' src='img/icons/add.svg' alt='add-icon' />";
      }
      
    }
  }
  xhr.send();
}