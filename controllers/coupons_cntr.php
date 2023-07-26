<?php 
    function coupons_data($con) {
        $res = get_subscription_details($con);
        $data = array();
        while ($row = mysqli_fetch_assoc($res)) {
            array_push($data, $row);
        }
        return $data;
    }

    function user_subscribed_type($con, $username) {
        $id = get_user_details($con, $username);
        $res = get_subscribed_user($con, $id);
        $subscription_id = 0;
        while ($row = mysqli_fetch_assoc($res)) {
            $subscription_id = $row['subscription_id'];
        }
        return $subscription_id;
    }

    function get_discounts($con, $subscription_id) {
        $res = get_discount_details($con, $subscription_id);
        while($row = mysqli_fetch_assoc($res)) {
            $discount = $row['discount'];
        }
        return $discount;
    }
?>