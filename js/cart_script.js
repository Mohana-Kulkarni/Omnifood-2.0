
function add_to_cart(id) {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "./controllers/session_handler.php?id="+id, true); 
  xhr.onreadystatechange = function() {
    if(xhr.readyState == 4 && xhr.status == 200) {
      console.log(this.responseText);
    }
  }
  xhr.send();
  
}