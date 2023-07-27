function handle_login() {
  console.log("Clicked");
  const btn = document.getElementById("signup-btn");

  var xhr = new XMLHttpRequest();
  var res = "";
  xhr.open("GET", "./controllers/login_handler.php", true); 
  xhr.onreadystatechange = function() {
    if(xhr.readyState == 4 && xhr.status == 200) {
      res = this.responseText;
      res = JSON.parse(res);  
      // console.log(res);  
      if(res.result === "Logout") {
        btn.innerHTML = "Try for free";
      } else if(res.result === "Login"){ 
        window.location.href = "login.php";
      }
    }
  }
  xhr.send();
}

function handle_login_meal() {
  console.log("Clicked");
  const btn = document.getElementById("signup-btn");

  var xhr = new XMLHttpRequest();
  var res = "";
  xhr.open("GET", "./controllers/login_handler.php", true); 
  xhr.onreadystatechange = function() {
    if(xhr.readyState == 4 && xhr.status == 200) {
      res = this.responseText;
      res = JSON.parse(res);  
      // console.log(res);  
      if(res.result === "Logout") {
        btn.innerHTML = "Try for free";
        window.location.href = "index.php";
      } else if(res.result === "Login"){ 
        window.location.href = "login.php";
      }
    }
  }
  xhr.send();
}

function handle_login_cart() {
  console.log("Clicked");
  const btn = document.getElementById("signup-btn");

  var xhr = new XMLHttpRequest();
  var res = "";
  xhr.open("GET", "./controllers/login_handler.php", true); 
  xhr.onreadystatechange = function() {
    if(xhr.readyState == 4 && xhr.status == 200) {
      res = this.responseText;
      res = JSON.parse(res);  
      // console.log(res);  
      if(res.result === "Logout") {
        btn.innerHTML = "Try for free";
        window.location.href = "index.php";
      } else if(res.result === "Login"){ 
        window.location.href = "login.php";
      }
    }
  }
  xhr.send();
}