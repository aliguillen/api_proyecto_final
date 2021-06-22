<?php
    header("Content-Type:application/json");
    include('connection.php');
    
    $customerData = array();
    if (isset($_GET['customer_id']) && $_GET['customer_id']!="") {
    
        $customer_id = $_GET['customer_id'];
        $query = "SELECT * FROM `customers` WHERE customer_id=$customer_id";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        if(isset($row['customer_id'])){
            $customerData['customer_id'] = $row['customer_id'];
            $customerData['customer_name'] = $row['customer_name'];
            $customerData['customer_email'] = $row['customer_email'];
            $customerData['customer_contact'] = $row['customer_contact'];
            $customerData['customer_address'] = $row['customer_address'];
            $customerData['country'] = $row['country'];
            
            $response["status"] = "true";
            $response["message"] = "Customer Details";
            $response["customers"] = $customerData;
        }else{
            $response["message"] = "No data for this customer";
            $response["customers"] = $customerData;
        }    
    } else {
        $response["customers"] = $customerData;
    }
    echo json_encode($response); 
    exit;
?>