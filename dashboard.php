
<?php
session_start();
if(!isset($_SERVER['HTTP_REFERER'])){
    header('Location: login.html?invalid');
}
if(!isset($_SESSION['userid'])){
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
            <form action="php/login.php" method="POST" style="display: inline-block;">
                <button name="logout" style="display: inline-block; color: grey">Logout</button>
            </form>
        </div>
        <hr>
    </div>

    <div class="welcome">
        <h3 style="display:inline-block;margin-top: 10px;">Welcome to your Dashboard</h3>
        <button style="display:inline-block; float: right;"><i class="fa fa-plus"></i>&nbsp;<a href="add.php" style="color: #f56a6a !important; text-decoration: none !important">Add New Event</a></button>
    </div>

    <section class="overall">
        <h1 style="color: #f56">Package Details</h1>
        <div class="row" style="text-align: center;">
            <div class="overall-card">
                <h2 style="margin-bottom:10px">Birthday package</h2>
                <h4 style="margin:0">Birthday Cake</h4>
                <h4 style="margin:0">party Props</h4>
                <h4 style="margin:0">Invitations</h4>
            </div>
            <div class="overall-card">
                <h2 style="margin-bottom:10px">Wedding package</h2>
                <h4 style="margin:0">Wedding Cake</h4>
                <h4 style="margin:0">Photography</h4>
                <h4 style="margin:0">Decorations</h4>
            </div>
            <div class="overall-card">
                <h2 style="margin-bottom:10px">Funeral package</h2>
                <h4 style="margin:0">Coffin</h4>
                <h4 style="margin:0">Photography</h4>
                <h4 style="margin:0">Decorations</h4>
            </div>
        </div>
    </section>

    <section class="timeline">
        <h1 style="color: #f56">Your Progress</h1>
        <center>

        <?php
            //session_start();
            require_once 'php/db.php';
            $cid = $_SESSION['userid'];
            //echo $cid;
            $sql = "SELECT * FROM orders";
            $result = $con-> query($sql);
                if($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                        //echo "<tr><td>".$row["customerid"]."</td><td>".$row["name"]."</td><td>".$row["date"]."</td><td>".$row["venue"]."</td><td>".$row["participants"]."</td><td>".$row["package"]."</td><td>".$row["remarks"]."</td></tr>";
                        echo '<h2>Job #100'.$row['orderid'].'</h2><div class="row"><button onclick="request();">Update Order</button><button style="margin-left: 2rem;" onclick="request();">Cancel Order</button></div>';
                        echo '</center><div class="row" style="margin-top: 5rem;">
                                <center>
                                    <div class="row">
                                        <h3>Track your order</h3>
                                        <img src="img/loader.gif" width="100px">
                                        <br>
                                        <div class="timeline-item" style="background-color: #f56;">
                                            <h4 style="color: white">Name<br>'.$row['name'].'</h4>
                                        </div>
                                        <div class="timeline-item" style="background-color: #f56;">
                                            <h4 style="color: white">Date<br>'.$row['date'].'</h4>
                                        </div>
                                        <div class="timeline-item" style="background-color: #f56;>
                                            <h4>Venue<br>'.$row['venue'].'</h4>
                                        </div>
                                        <div class="timeline-item" style="background-color: #f56;>
                                            <h4>Participants<br>'.$row['participants'].'</h4>
                                        </div>
                                        <div class="timeline-item" style="background-color: #f56;>
                                            <h4>Package<br>'.$row['package'].'</h4>
                                        </div>
                                    </div>
                                </center>';
                    }
                }
                else{
                    echo "Something went wrong!";
                }
            $con-> close();

        ?>

        </div>
    </section>


    <script>
        function request(){
            alert("Your request has been sent!");
        }
    </script>
</body>