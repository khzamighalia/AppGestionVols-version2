<?php  

	if(isset($_POST['register'])){
	include_once('dbFunction.php');  
	$funObj = new dbFunction();   
	    $fullname = $_POST['fullname'];  
        $emailid = $_POST['emailid'];  
        $password = $_POST['password'];  
        $confirmPassword = $_POST['confirm_password'];  
        if($password == $confirmPassword){  
            $email = $funObj->isUserExist($emailid);  
            if(!$email){  
                $register = $funObj->UserRegister($fullname,$emailid, $password);  
                if($register){  
					 echo "<script>alert('Registration Successful')</script>";  
					 header("location:login.php"); 
                }else{  
                    echo "<script>alert('Registration Not Successful')</script>";  
                }  
            } else {  
                echo "<script>alert('Email Already Exist')</script>";  
            }  
        } else {  
            echo "<script>alert('Password Not Match')</script>";  
          
        }  
    }  
?>  