<?php
session_start();
//Login
if ( isset( $_POST['submit'] ) ){
    //Database Connection details  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "partymania";
    // Create connection
    $con = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    } 
    $email = $_REQUEST['email'];
    $pw = $_REQUEST['pw'];
    echo $email;
    echo $pw;
    echo "hari";
    $result = mysqli_query($con, 'SELECT id FROM users WHERE email="'.$email.'" AND password="'.$pw.'"');
    //echo $result;
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        echo $row["id"];
        $_SESSION['userid'] = $row["id"];
        header('Location: ../dashboard.php');
    }
    else{
        echo "Wade awl";
        header('Location: ../login.html');
    }
}
//Logout
if ( isset( $_POST['logout'] ) ){
    echo "Logging Out";
    session_destroy();
    header("Location: ../login.html");
}