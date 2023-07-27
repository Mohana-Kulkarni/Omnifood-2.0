function openOverlay(subscription_id) {
  console.log("OPen");
  const overlay = document.getElementById('overlay-container');
  overlay.setAttribute('id', subscription_id);
  document.getElementById("overlay").style.display = "block";
}

function closeOverlay() {
  console.log("Close");
  const overlay_id = document.getElementById('overlay');
  const subscription_id = overlay_id.firstElementChild.id;

  document.getElementById("overlay").style.display = "none";
  const overlay = document.getElementById(subscription_id);
  overlay_id.firstElementChild.setAttribute('id', "overlay-container");
}

function confirmPurchase() {
  // Add your code here for handling the confirmed purchase.
  // For example, you can send a request to your server to process the subscription purchase.


  console.log("Subscription purchased!");
  const overlay_id = document.getElementById('overlay');
  const subscription_id = overlay_id.firstElementChild.id;

  const starter = document.getElementById('starter-btn');
  const complete = document.getElementById('complete-btn');
  
  var xhr = new XMLHttpRequest();
  var res = "";
  var id;
  if(subscription_id === 'starter') {
    id = 1;
  } else if (subscription_id === 'complete') {
    id = 2;
  }
  xhr.open("GET", "./controllers/handle_subscription.php?id=" + id, true); 
  xhr.onreadystatechange = function() {
    if(xhr.readyState == 4 && xhr.status == 200) {
      res = this.responseText;
      console.log(res);
      res = JSON.parse(res); 
      
      if(res.result === "ADD" && id == 1) {
        console.log(res.result);
        starter.innerHTML = "Already Subscribed";
        complete.innerHTML = "Get Subscription";
      } else if(res.result === "ADD" && id == 2){
        complete.innerHTML = "Already Subscribed";
        starter.innerHTML = "Get Subscription";
      } else if(res.result === "LOGIN"){
        window.location.href = "login.php";
      }
    }
  }
  xhr.send();

  closeOverlay();
}
