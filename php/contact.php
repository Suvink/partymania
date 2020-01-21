<?php

//SendInBlue library
require('./mailin.php');

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$adminemail = "tikirimaarie@gmail.com";

$email_string = 
'<html>
    <head>
        <style>
            body {
                font-family: "Roboto Slab", serif;
                padding-left: 4rem;
                padding-right: 4rem;
                }
        </style>
         <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <center>
                <img src="https://thumbs.gfycat.com/CelebratedAlienatedChinesecrocodilelizard-size_restricted.gif" height="300px">
                <h1>Someone Just Submitted Your Site Contact Form!</h1>
                <h3>Heres what they had to say!</h3>
                <p>..............................................................................</p>
                <h4>Name: '.$name.'</h4>
                <br>
                <h4>Email: '.$email.'</h4>
                <br>
                <h4>Message: '.$message.'</h4>
            </center>
        </div>
    </body>
</html>
';

//Email sending
function sendEmail($customerEmail,$customerName,$email_string){
    $mailin = new Mailin("https://api.sendinblue.com/v2.0","D1Egd9HxOFSwbPUQ");
    $data = array( "to" => array($customerEmail=>$customerName),
        "from" => array("noreply@partymania.tk", "PartyMania"),
        "subject" => "PartyMania Site Contact",
        "html" => $email_string
    );
    var_dump($mailin->send_email($data));
}
//Send Confirmation Email
sendEmail($adminemail,$name,$email_string);

//Redirection
header('Location: ../contact.php?success');









?>