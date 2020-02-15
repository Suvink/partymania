<?php
    require_once 'db.php';
    //require_once 'email/mailtemp.php';
    session_start();
    $customer_id = $_SESSION['userid'];

    if ( isset( $_POST['submit'] ) ){
    $customer_name = $_REQUEST['cname'];
    $event_date = $_REQUEST['cdate'];
    $event_venue = $_REQUEST['cvenue'];
    $event_participants = $_REQUEST['cparticipants'];
    $event_package = $_REQUEST['cpackage'];
    $additional_details = $_REQUEST['cadditional'];
    $phone_no = $_REQUEST['cnumber'];
    
    $sql=  "INSERT INTO orders (customerid, name, date, venue, participants, package, remarks) 
                VALUES ('$customer_id', '$customer_name', '$event_date', '$event_venue', '$event_participants', '$event_package', '$additional_details')";
    }
    if ($con->query($sql) === TRUE) {
        echo("Done");

        // // //SendSMS
        $order_no = rand(10,10000);
        $smsText = "Hi ".$customer_name."\nThank you for your order. Your order reference is PMY-".$order_no."!\n -PartyMania-";
        $user = "94771655198";
        $password = "1357";
        $text = urlencode($smsText);

        $to = $phone_no;
        $baseurl ="http://www.textit.biz/sendmsg";
        $url = "$baseurl/?id=$user&pw=$password&to=$to&text=$text";
        $ret = file($url);

        $res= explode(":",$ret[0]);

        if (trim($res[0])=="OK")
        {
        echo "Message Sent - ID : ".$res[1];
        }
        else
        {
        echo "Sent Failed - Error : ".$res[1];
        }


        header('Location: ../dashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();


    

?>