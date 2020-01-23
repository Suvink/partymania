<?php
    if(isset($_POST['update'])){
        echo $_REQUEST['customer_id'];
        echo $_REQUEST['name'];
        echo $_REQUEST['date'];
        echo $_REQUEST['venue'];
        echo $_REQUEST['participants'];
        echo $_REQUEST['package'];
        echo $_REQUEST['remarks'];
        echo "hii";
        require_once 'db.php';
        $sql=  "UPDATE orders SET name='".$_REQUEST['name']."', date='".$_REQUEST['date']."', 
                venue='".$_REQUEST['venue']."', participants='".$_REQUEST['participants']."', package='".$_REQUEST['package']."', 
                remarks='".$_REQUEST['remarks']."' WHERE customerid=".$_REQUEST['customer_id'];

        if ($con->query($sql) === TRUE) {
            echo("Done");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        header('Location: ../admin.php');
    }

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