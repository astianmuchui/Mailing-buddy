<?php
    require ("db_config.php");
    global $errors;
    function validate($username,$email){
        if(!empty($username) || !empty($email)){
            return true;
        }else{
            echo 'Please enter all values';
        }
        
    }
    if(isset($_POST['submit'])){
        $username = $_POST['name'];
        $email = $_POST['email'];
            // validate($username,$email);
            $query = "INSERT INTO my_Emails (username,adress) VALUES ('$username','$email')";
            $act = mysqli_query($conn, $query);
            if($act){
                echo "Email added";
            }else{
                echo 'Email not added';
            }
        }
  
?>