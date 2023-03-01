<?php 
require(dirname(dirname(dirname(__DIR__))) . '/auth-library/resources.php');
     
if(isset($_POST['submit'])){ 
    // File upload configuration 
    $productName = $db->real_escape_string($_POST['pname']);
	$productPrice = $db->real_escape_string($_POST['pprice']);
    $durationInMonths = $db->real_escape_string($_POST['duration']);
    $productDesc = $_POST['pdesc'];
    $category = $db->real_escape_string($_POST['category']);
    $active = $db->real_escape_string($_POST['active']);

    $targetDir = "../images/"; 
    $allowTypes = array('jpg','png','jpeg'); 
     
    $fileNames = array_filter($_FILES['pimages']['name']); 
    $numberOfFiles = count($fileNames);

    $images = "";
    $errors = array();

    if(!empty($fileNames)){ 
        foreach($_FILES['pimages']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['pimages']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
             
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["pimages"]["tmp_name"][$key], $targetFilePath)){ 
                    // add images names for storage in the database
                    if(($key + 1) === $numberOfFiles){
                        $images .= "$fileName";
                    }else{
                        $images .= "$fileName,";
                    }
                }else{
                    array_push($errors, "Unable to move file");
                }
            }else{
                array_push($errors, "The file type is not allowed");
            }
        } 

        // CHECK IF FORM DATA WAS PASSED
        if(empty($productName) || empty($productPrice) || empty($durationInMonths) || empty($productDesc) || empty($category) || empty($active)){
            echo json_encode(array('success' => 0, 'error_title' => 'Product Upload', 'error_msg' => 'Some field(s) were not filled'));
            exit();
        }
        
        if(count($errors) === 0){ 
            $active = ($active === "yes")? "1" : "0";
            // Insert product details into database
            $insertProduct = $db->query("INSERT INTO products (name, price, pictures, details, category, duration_of_payment, active) VALUES ('$productName', '$productPrice', '$images', '$productDesc', '$category', '$durationInMonths', '$active')"); 

            if($insertProduct){
                echo json_encode(array('success' => 1, 'product_name' => $productName));
            }else{
                echo json_encode(array('success' => 0, 'error_title' => 'Product Upload', 'error_msg' => '(errno: 1) There was an error uploading the product'));
            }
        }else{ 
            echo json_encode(array('success' => 0, 'error_title' => 'Product Upload', 'error_msg' => '(errNo: 2) There was an error uploading the product'));
        } 
    }else{ 
       echo json_encode(array('success' => 0, 'error_title' => 'Image Upload', 'error_msg' => 'No Images were uploaded'));
    } 
} 
 
?>
