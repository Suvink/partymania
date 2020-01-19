<?php
include 'db.php';
session_start();
//Login
if ( isset( $_POST['submit'] ) ){
    
    $email = $_REQUEST['email'];
    $pw = $_REQUEST['pw'];
    echo $email;
    echo $pw;
    echo "hari";
    $result = mysqli_query($con, 'SELECT id FROM admin WHERE email="'.$email.'" AND password="'.$pw.'"');
    //echo $result;
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        echo $row["id"];
        $_SESSION['adminid'] = $row["id"];
        header('Location: ../admin.php');
    }
    else{
        echo "Wade awl";
        header('Location: ../adminlogin.html');
    }
}
//Logout
if ( isset( $_POST['logout'] ) ){
    echo "hiiih";
    session_destroy();
    header("Location: ../adminlogin.html");
}