<?php
    session_start();
    if(!isset($_SERVER['HTTP_REFERER'])){
        header('Location: login.html?invalid');
    }
    
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>PartyMania!</title>
</head>

<body>
    <div class="header">
        <div class="title">
            <h1>Welcome to PartyMania! Dashboard</h1>
        </div>
        <div class="icons">
            <i class="sm fa fa-user"></i>
            <h5 style="display: inline-block;"><a href="" style="color:grey; text-decoration: none;">Logout</a></h5>
        </div>
        <hr>
    </div>

    <div class="welcome">
        <h3 style="display:inline-block;margin-top: 10px;">Welcome</h3>
    </div>

    <section>
        <h1 style="color: #f56">Add a New Event</h1>

        <center>
            <div class="form-outline">
                <form method="POST" action="./php/additem.php"> 
                    <h1>Basic Details</h1>
                    <input type="text" name="cname" placeholder="Customer's Name" width="500px" style="width: 70%;" required>
                    <input type="date" name="cdate" placeholder="Date of the event" width="500px" style="width: 70%;" required>
                    <input type="text" name="cvenue" placeholder="Address of the Venue" width="500px" style="width: 70%;" required>
                    <input type="number" name="cparticipants" placeholder="Expected no.of participants" width="500px" style="width: 70%;" required>
                    <input type="text" name="cnumber" placeholder="Contact Number" width="500px" style="width: 70%;" required>

                    <h1>Package Details</h1>
                    <div class="row" style="margin-bottom:2rem">
                        <div class="column-3">
                            <h3 style="color:#f56">Birthday Package</h3>
                            <h4 style="color: black;margin: 0;">Birthday Cake</h4>
                            <h4 style="color: black;margin: 0;">Invitations</h4>
                            <h4 style="color: black;margin: 0;">Party Props</h4>
                            <h4 style="color: black;margin: 0;">Food and Drink</h4>
                            <h4 style="color: black;margin: 0;">Music</h4>
                           </div>
                        <div class="column-3">
                            <h3 style="color:#f56">Anniversary Package</h3>
                                <h4 style="color: black;margin: 0;">Anniversary Cake</h4>
                                <h4 style="color: black;margin: 0;">Invitations</h4>
                                <h4 style="color: black;margin: 0;">Roses</h4>
                                <h4 style="color: black;margin: 0;">Venue</h4>
                                <h4 style="color: black;margin: 0;">Food and Drink</h4>
                        </div>
                        <div class="column-3">
                            <h3 style="color:#f56">Wedding Package</h3>
                                <h4 style="color: black;margin: 0;">Wedding Cake</h4>
                                <h4 style="color: black;margin: 0;">Flower Arrangements</h4>
                                <h4 style="color: black;margin: 0;"> Decorations</h4>
                                <h4 style="color: black;margin: 0;">Venue including food</h4>
                                <h4 style="color: black;margin: 0;">Music and DJ</h4>
                        </div>
                        
                    </div>

                    <input type="radio"name="cpackage" value="Birthday Package" style="width: 30px;">Birthday Package
                    <br>
                    <input type="radio"name="cpackage" value="Aniversary Package" style="width: 30px;">Anniversary Package
                    <br>
                    <input type="radio"name="cpackage" value="Wedding Package" style="width: 30px;">Wedding Package

                    <h1>Additional Details</h1>
                    <input type="text" name="cadditional" placeholder="Additional Notes" width="500px" style="width: 70%;height: 30%;">
                    <br><br>
                    <button type="submit" name="submit" value="submit" style="background-color: #f56; color: white !important; border: none;box-shadow: none;">Add Order</button>
                </form>
            </div>
        </center>
    </section>

</body>
