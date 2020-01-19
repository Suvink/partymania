<?php
    require_once 'db.php';
    session_start();
    $customer_id = $_SESSION['userid'];

    if ( isset( $_POST['submit'] ) ){
    $customer_name = $_REQUEST['cname'];
    $event_date = $_REQUEST['cdate'];
    $event_venue = $_REQUEST['cvenue'];
    $event_participants = $_REQUEST['cparticipants'];
    $event_package = $_REQUEST['cpackage'];
    $additional_details = $_REQUEST['cadditional'];
    

    $sql=  "INSERT INTO orders (customerid, name, date, venue, participants, package, remarks) 
                VALUES ('$customer_id', '$customer_name', '$event_date', '$event_venue', '$event_participants', '$event_package', '$additional_details')";
    }
    if ($con->query($sql) === TRUE) {
        echo("Done");
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();



?>