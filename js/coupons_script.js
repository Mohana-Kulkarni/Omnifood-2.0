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
    const tag = document.getElementById("applied_coupon");
    const apply_btn = document.getElementById("apply-coupon-btn");
    // console.log(apply_btn);

    var xhr = new XMLHttpRequest();
    var res = "";
    xhr.open("GET", "./controllers/coupon_handler.php?id="+id, true); 
    xhr.onreadystatechange = function() {
      if(xhr.readyState == 4 && xhr.status == 200) {
        res = this.responseText;
        // console.log(res);
        res = JSON.parse(res);  
        // console.log(res.coupon_name);
        const div = document.createElement("div");
        div.setAttribute("class", "coupon_tag");
        div.setAttribute("onclick", "cancel_coupon()");
        const para1 = document.createElement("p");
        const tag_data = document.createTextNode(res.coupon_name);
        para1.appendChild(tag_data);
        div.appendChild(para1);
        const para2 = document.createElement("p");
        const close = document.createTextNode("X");
        para2.appendChild(close);
        div.appendChild(para2);
        
        tag.appendChild(div);
        // console.log(res.qty);
 
        apply_btn.innerHTML = "Applied";
        apply_btn.disabled = true;
        total.innerHTML = '&#8377;' + " " + res.discounted_price;
      }
    }
    xhr.send();
  }

  function cancel_coupon() {
    // console.log("clicked");
    const apply_btn = document.getElementById("apply-coupon-btn");
    const tag = document.getElementById("applied_coupon");
    const total = document.getElementById('total');
    tag.firstElementChild.remove();

    var xhr = new XMLHttpRequest();
    var res = "";
    xhr.open("GET", "./controllers/coupon_cancel.php", true); 
    xhr.onreadystatechange = function() {
      if(xhr.readyState == 4 && xhr.status == 200) {
        res = this.responseText;
        // console.log(res);
        res = JSON.parse(res);  
        apply_btn.innerHTML = "Apply";
        apply_btn.disabled = false;
        total.innerHTML = '&#8377;' + " " + res.total_price;
      }
    }
    xhr.send();
  }