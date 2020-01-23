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
        //require_once 'db.php';
        // $sql=  "UPDATE orders SET name='".$_POST['name']."', date='".$_POST['date']."', 
        //         venue='".$_POST['venue']."', participants='".$_POST['participants']."', package='".$_POST['package']."', 
        //         remarks='".$_POST['remarks']."' WHERE customerid=".$_POST['cid'];

        // if ($con->query($sql) === TRUE) {
        //     echo("Done");
        // } else {
        //     echo "Error: " . $sql . "<br>" . $con->error;
        // }
        //header('Refresh:0');
    }


?>