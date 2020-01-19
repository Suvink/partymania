<?php
require_once 'db.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pw = $_POST['pw'];

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