function openOverlay(subscription_id) {
  const overlay = document.getElementById('overlay-container');
  overlay.setAttribute('id', subscription_id);
  document.getElementById("overlay").style.display = "block";
}

function closeOverlay() {
  document.getElementById("overlay").style.display = "none";
}

function confirmPurchase() {
  // Add your code here for handling the confirmed purchase.
  // For example, you can send a request to your server to process the subscription purchase.
  console.log("Subscription purchased!");
  const overlay_id = document.getElementById('overlay');
  const subscription_id = overlay_id.firstElementChild.id;
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
      // res = JSON.parse(res);  
      console.log(res);
    }
  }
  xhr.send();

  closeOverlay();
}
