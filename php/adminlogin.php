<?php
require_once 'db.php';
session_start();
//Login
if ( isset( $_POST['submit'] ) ){
    $email = $_REQUEST['email'];
    $pw = $_REQUEST['pw'];
    $result = mysqli_query($con, 'SELECT id FROM admin WHERE email="'.$email.'" AND password="'.$pw.'"');
    //echo $result;
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['adminid'] = $row["id"];
        header('Location: ../admin.php');
    }
    else{
        header('Location: ../adminlogin.html');
    }
}

//Logout
if ( isset( $_POST['logout'] ) ){
    session_destroy();
    unset($_SESSION['adminid']);  
    header("Location: ../adminlogin.html");

}