<?php
    require(dirname(dirname(dirname(dirname(__DIR__)))) . '/auth-library/resources.php');
    
    if(isset($_POST['submit'])){
        $aid = $_SESSION['agent_id'];
        $pid = $db->real_escape_string($_POST['product_id']);
        $did = $db->real_escape_string($_POST['debtor_id']);
        $amount = $db->real_escape_string($_POST['amount']);

        if(empty($pid) || empty($did) || empty($amount)){
            echo json_encode(array('success' => 0, 'error_title' => "Edit Customer", 'error_msg' => 'One or more fields are empty'));
        }else{
           $sql_get_product = $db->query("SELECT * FROM products WHERE product_id='$pid'");
           $sql_get_meta_details = $db->query("SELECT * FROM product_meta WHERE product_id='$pid'");

           $product_details = $sql_get_product->fetch_assoc();
           $product_meta_details = $sql_get_meta_details->fetch_assoc();

           $sql_add_new_wallet = $db->query("INSERT INTO debtor_wallets (agent_id, debtor_id, product_id, total_amount, created_by) VALUES('$aid', '$did', '$pid', '$amount', '1')");

            if($sql_add_new_wallet){
                echo json_encode(array('success' => 1, 'name' => $product_details['name'], 'product_image' => explode(",", $product_details['pictures'])[0], 'price' => intval($product_details['price']), 'duration_in_months' => $product_meta_details['duration_in_months'], 'daily_payment' => $product_meta_details['daily_payment']));
            }
        }
    }else{
        echo json_encode(array('success' => 0, 'error_title' => 'Fatal', 'error_msg' => 'Unable to fetch product details'));
    }
?>