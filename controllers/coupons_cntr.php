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
        $res = get_user_coupons($con, $id);
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

    function subscription_data_by_id($con, $subscription_id) {
        $res = get_subscription_data_by_id($con, $subscription_id);
        $subscription_details = mysqli_fetch_assoc($res);
        return $subscription_details;
    }
?>