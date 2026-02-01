<?php
include "connect.php";
session_start();
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password= '$password'");
    if(mysqli_num_rows($result)>0){
        $_SESSION['email'] = $email;
        header("location: index.php");
        exit;
    }else{
        echo "invalid username or password";
    }
}
?>
