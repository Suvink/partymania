<?php
    if(isset($_POST['update'])){
        require_once 'db.php';
        $sql=  "UPDATE orders SET name=".$POST['name'].", date=".$POST['date'].", 
                venue=".$POST['venue'].", participants=".$POST['participants'].", package=".$POST['package'].", 
                remarks=".$POST['remarks']."WHERE customerid=".$POST['id'];

        if ($con->query($sql) === TRUE) {
            echo("Done");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        //header('Refresh:0');
    }


?>