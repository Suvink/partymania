<?php
    if(isset($_POST['delete'])){
        echo $_REQUEST['customer_id'];
        echo "hii";
        require_once 'db.php';
        $sql=  "DELETE FROM orders WHERE customerid=".$_REQUEST['customer_id'];

        if ($con->query($sql) === TRUE) {
            echo("Done");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        header('Location: ../admin.php');
    }
?>