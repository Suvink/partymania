<html>
<!-- $_SESSION['adminid'] -->
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
            <h1>Welcome to PartyMania Admin</h1>
        </div>
        <div class="icons">
            <i class="sm fa fa-user"></i>
            <h5 style="display: inline-block;"><a href="" style="color:grey; text-decoration: none;">Logout</a></h5>
        </div>
        <hr>
    </div>

    <div class="welcome">
        <h3 style="display:inline-block;margin-top: 10px;">Welcome Dilhani</h3>
        <button style="display:inline-block; float: right; margin-left: 2rem;"><i class="fa fa-download"></i>&nbsp;Download Report</button>
        <button style="display:inline-block; float: right; margin-left: 2rem;"><i class="fa fa-plus"></i>&nbsp;Add New Event</button>
    </div>

    <section class="overall">
        <h1 style="color: #f56">Ongoing Orders</h1>
        
        <table id="customerData">
            <tr>
                <th>Customer Id</th>
                <th>Customer Name</th>
                <th>Phone Number</th>
                <th>Order ID</th>
                <th>Date</th>
                <th>Venue</th>
                <th>Participants</th>
            </tr>
            <?php
            session_start();
            require_once 'db.php';
            $cid = $_SESSION['adminid'];
            $sql = "SELECT * FROM order WHERE customerid='$cid'";
            $result = $con-> query($sql);
                if($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                        echo "<tr><td>".row["customerid"]."</td><td>".row["name"]."</td><td>".row["date"]."</td><td>".row["venue"]."</td><td>".row["participants"]."</td><td>".row["package"]."</td><td>".row["remarks"]."</td><td>";
                    }
                }
                else{
                    echo "0 results";
                }
            $con-> close();

            ?>
        </table>
    </section>

    

    <script>
        function request(){
            alert("Your request has been sent!");
        }
    </script>
</body>