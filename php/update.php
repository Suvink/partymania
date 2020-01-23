<?php
    //if(isset($_REQUEST['update'])){
        require_once 'db.php';
        $sql=  "UPDATE orders SET name=".$REQUEST['name'].", date=".$REQUEST['date'].", 
                venue=".$REQUEST['venue'].", participants=".$REQUEST['participants'].", package=".$REQUEST['package'].", 
                remarks=".$REQUEST['remarks']."WHERE customerid=".$REQUEST['id'];

        if ($con->query($sql) === TRUE) {
            echo("Done");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        //header('Refresh:0');
    //}


?>