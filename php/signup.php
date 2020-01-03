<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pw = $_POST['pw'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "partymania";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql=  "INSERT INTO users (name, email, phone, password) 
            VALUES ('$name', '$email', '$phone', '$pw')";
    if ($conn->query($sql) === TRUE) {
        echo("Done");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    echo '<center><img src="https://cdn.kapwing.com/final_5d6136c54ca1f200143d6d6b_13751.jpg" style="width:300px;" width:300px></center>';

?>