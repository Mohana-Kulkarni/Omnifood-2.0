function openOverlay() {
  document.getElementById("overlay").style.display = "block";
}

function closeOverlay() {
  document.getElementById("overlay").style.display = "none";
}

function confirmPurchase() {
  // Add your code here for handling the confirmed purchase.
  // For example, you can send a request to your server to process the subscription purchase.
  console.log("Subscription purchased!");
  closeOverlay();
}