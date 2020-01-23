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

        // $email_string = $emailString1 + '
    
        // <h3 style="margin-bottom: 0"> Date</h3 style="margin-bottom: 0">
        // <h6 style="margin-top: 0;">'.$event_date.'</h6>
    
        // <h3 style="margin-bottom: 0"> Venue</h3 style="margin-bottom: 0">
        // <h6 style="margin-top: 0;">'.$event_venue.'</h6>
    
        // <h3 style="margin-bottom: 0"> Participants</h3 style="margin-bottom: 0">
        // <h6 style="margin-top: 0;">'.$event_participants.'</h6>
    
        // <h3 style="margin-bottom: 0"> Package</h3 style="margin-bottom: 0">
        // <h6 style="margin-top: 0;">'.$event_participants.'</h6>
    
        // <h3 style="margin-bottom: 0">Remarks</h3 style="margin-bottom: 0">
        // <h6 style="margin-top: 0;">'.$additional_details.'</h6>
        
        // ' + $emailString2;
    
        // //Email sending
        // function sendEmail($customerEmail,$customerName,$email_string){
        //     $mailin = new Mailin("https://api.sendinblue.com/v2.0","D1Egd9HxOFSwbPUQ");
        //     $data = array( "to" => array($customerEmail=>$customerName),
        //         "from" => array("noreply@partymania.tk", "PartyMania"),
        //         "subject" => "PartyMania Site Contact",
        //         "html" => $email_string
        //     );
        //     var_dump($mailin->send_email($data));
        // }
        // //Send Confirmation Email
        // sendEmail($adminemail,$name,$email_string);

        // // //SendSMS
        $smsText = "Hi ".$customer_name."\nWelcome to NOI! Please refer your email for furthur information. Happy Coding!\n -Team NOI-";
        $user = "94771655198";
        $password = "1357";
        $text = urlencode($smsText);

        $to = $phone;
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