<?php
    require(dirname(dirname(dirname(__DIR__))) . '/auth-library/resources.php');
     
    if(isset($_POST['submit'])){
        $fname = $db->real_escape_string($_POST['fname']);
        $lname = $db->real_escape_string($_POST['lname']);
        $email = $db->real_escape_string($_POST['email']);
        $phoneno = $db->real_escape_string($_POST['phoneno']);
        $oaddress = $db->real_escape_string($_POST['oaddress']);
        $haddress = $db->real_escape_string($_POST['haddress']);
        $bvn = $db->real_escape_string(isset($_POST['bvn'])? $_POST['bvn'] : "" );

        $targetDir = "../../agent/customer-images/"; 
        $allowTypes = array('jpg','png','jpeg'); 
        
        $fileName = $_FILES['customer-img']['name'];

        if(empty($fname) || empty($lname) || empty($email) || empty($phoneno) || empty($oaddress) || empty($haddress) || empty($haddress)){
            echo json_encode(array('success' => 0, 'error_title' => "Create Customer", 'error_msg' => 'One or more fields are empty'));
        }elseif(!empty($fileName)){
            $fileName = basename($fileName); 
            $targetFilePath = $targetDir . $fileName; 
            
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            if(in_array($fileType, $allowTypes)){
                // Upload file to server 
                if(move_uploaded_file($_FILES["customer-img"]["tmp_name"], $targetFilePath)){ 
                    $sql_add_debtor = $db->query("INSERT INTO debtors (agent_id, first_name, last_name, email, phone_no, home_address, office_address, bvn, image) VALUES('$agent_id', '$fname', '$lname', '$email','$phoneno', '$haddress', '$oaddress', '$bvn', '$fileName')");

                    // $subject = "CDS DEBTOR ASSIGNMENT";
                    // SEND MAIL
                    // $message = "<div class='container'>
                    //   <div class='image-container'>
                    //   	<img src='" . $url . "/assets/images/logo-small.png' alt='logo'/>
                    //   </div>
                    //   <div class='box'>
                    //     <h2>". greeting() . "!</h2>
                    //     <p>Agent" . ucfirst($fname) . "</p>
                    //     <p>You have been assigned a new debtor by the admin. Check your portal for more details </p>
                    //     <p><b>Name of debtor</b>: $lname $fname </p>                              
                    //   </div>
                    // </div>";

                    // send_raw_mail($email, $subject, $message);
                    if($sql_add_debtor){
                        echo json_encode(array('success' => 1));
                    }
                }else{
                echo json_encode(array('success' => 0, 'error_title' => 'Create Customer', 'error_msg' => 'Unable to move file'));
                }
            }else{
                echo json_encode(array('success' => 0, 'error_title' => 'Create Customer', 'error_msg' => 'Image file type not supported'));
            }
        }else{
            $sql_add_debtor = $db->query("INSERT INTO debtors (first_name, last_name, email, phone_no, home_address, office_address, bvn) VALUES('$fname', '$lname', '$email','$phoneno', '$haddress', '$oaddress', '$bvn')");

            if($sql_add_debtor){
                echo json_encode(array('success' => 1));
            }
        }
    }else{
        echo json_encode(array('success' => 0, 'error_title' => 'Create Customer', 'error_msg' => 'Unable to create customer'));
    }
?>