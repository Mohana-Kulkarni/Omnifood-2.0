function on_coupons_overlay() {
    console.log("Hello");
    document.getElementById("coupon-overlay").style.display = "block";
  }
  
  function off_coupons_overlay() {
    document.getElementById("coupon-overlay").style.display = "none";
  }

  function apply_discount(subscription_id) {
    // console.log(subscription_id);
    const id = subscription_id;
    const total = document.getElementById('total');

    var xhr = new XMLHttpRequest();
    var res = "";
    xhr.open("GET", "./controllers/coupon_handler.php?id="+id, true); 
    xhr.onreadystatechange = function() {
      if(xhr.readyState == 4 && xhr.status == 200) {
        res = this.responseText;
        // console.log(res);
        res = JSON.parse(res);  
        // console.log(res.qty);  
        total.innerHTML = '&#8377;' + " " + res.discounted_price;
      }
    }
    xhr.send();
  }

