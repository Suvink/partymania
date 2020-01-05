<?php
session_start();

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

    $email = $_POST['email'];
    $pw = $_POST['pw'];
    echo $email;
    echo $pw;
    echo "hari";
    $result = mysqli_query($con, 'SELECT id FROM users WHERE email="'.$email.'" AND password="'.$pw.'"');
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        echo $row["id"];
        $_SESSION['userid'] = $row["id"];
        header('Location: ../profile.php');
    }
    else{
        echo "Wade awl";
        header('Location: ../login.html');
    }

//Logout
if ( isset( $_POST['logout'] ) ){
    echo "hiiih";
    session_destroy();
    header("Location: ../login.html");
}