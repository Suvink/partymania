
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
    <script>
        window.onload = function () {
            let cat = window.location.href;
            if(cat == "http://35.247.185.195/partymania/dashboard.php?success"){
                alert("Successfully Added the Order!");
            }
        }
    </script>
    <title>PartyMania!</title>
</head>

<body>
    <div class="header">
        <div class="title">
            <h1>Welcome to PartyMania! Dashboard</h1>
        </div>
        <div class="icons">
            <i class="sm fa fa-user"></i>
            <h5 style="display: inline-block;"><a href="" style="color:grey; text-decoration: none;" data-toggle="modal" data-target="#logoutModal">Logout</a></h5>
        </div>
        <hr>
    </div>

    <div class="welcome">
        <h3 style="display:inline-block;margin-top: 10px;">Welcome Dilhani</h3>
        <button style="display:inline-block; float: right;"><i class="fa fa-plus"></i>&nbsp;<a href="add.php" style="color: #f56a6a !important; text-decoration: none !important">Add New Event</a></button>
    </div>

    <section class="overall">
        <h1 style="color: #f56">Overview</h1>
        <div class="row" style="text-align: center;">
            <div class="overall-card">
                <h2 style="margin-bottom:0">Your Jobs</h2>
                <h4 style="margin-bottom:0;margin-top: 10px;">#132453</h4>
                <h6 style="margin-top:0">Ongoing</h6>
            </div>
            <div class="overall-card">
                <h2 style="margin-bottom:0">Payments</h2>
                <h4 style="margin-bottom:0;margin-top: 10px;">35,000</h4>
                <h6 style="margin-top:0">To be paid</h6>
            </div>
            <div class="overall-card">
                <h2 style="margin-bottom:0">Support</h2>
                <h4 style="margin-bottom:0;margin-top: 10px;">No Tickets Open</h4>
                <h6 style="margin-top:0">--</h6>
            </div>
        </div>
    </section>

    <section class="timeline">
        <h1 style="color: #f56">Your Progress</h1>
        <center>
            <h2>Job #132453</h2>
            <div class="row">
                <button onclick="request();">Update Order</button>
                <button style="margin-left: 2rem;" onclick="request();">Cancel Order</button>
            </div>
        </center>
        <div class="row" style="margin-top: 5rem;">
            <center>
                <div class="row">
                    <h3>Track your order</h3>
                    <img src="img/loader.gif" width="100px">
                    <br>
                    <div class="timeline-item" style="background-color: #f56;">
                        <h4 style="color: white">Order</h4>
                    </div>
                    <div class="timeline-item" style="background-color: #f56;">
                        <h4 style="color: white">Payment</h4>
                    </div>
                    <div class="timeline-item">
                        <h4>Event</h4>
                    </div>
                    <div class="timeline-item">
                        <h4>Due Payment</h4>
                    </div>
                    <div class="timeline-item">
                        <h4>Finish</h4>
                    </div>
                </div>
            </center>
        </div>
    </section>

    <!-- Logout Modal-->
    <div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <form action="php/login.php" method="POST">
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" name="logout">Logout</button>
                    </div>
                </form>
        </div>
    </div>

    <script>
        function request(){
            alert("Your request has been sent!");
        }
    </script>
</body>