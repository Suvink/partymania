
<?php
    session_start();
    if(!isset($_SERVER['HTTP_REFERER'])){
        header('Location: adminlogin.html?invalid');
    }
    // if(!isset($_SESSION['adminid'])){
    //     header('Location: adminlogin.html?invalid');
    // }
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
            <h1>Welcome to PartyMania Admin</h1>
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
        <h3 style="display:inline-block;margin-top: 10px;">Welcome!</h3>
        <div style="float:right">
            <form action="php/export.php" method="POST" style="display: inline-block">
                <button style="display:inline-block; float: right; margin-left: 2rem;" type="submit" name="submit"><i class="fa fa-download"></i>&nbsp;Download Report</button>
            </form>
            <form style="display: inline-block"> 
                <button style="display:inline-block; float: right; margin-left: 2rem;"><i class="fa fa-plus"></i>
                &nbsp;<a href="add.php" style="text-decoration: none; color: #f56">Add New Event</a></button>
            </form>
        </div>
    </div>

    <section class="overall">
        <h1 style="color: #f56">Ongoing Orders</h1>
        <center>
            <button id="btn-edit" onclick="switchTable();" style="background-color: #f56; color: white !important; border: none;box-shadow: none;">Update
            </button>
        </center>
        <center>
        <table id="customerData" style="display:block">
            <tr>
                <th>Customer Id</th>
                <th>Customer Name</th>
                <th>Event Date</th>
                <th>Event Venue</th>
                <th>Participants</th>
                <th>Package</th>
                <th>Remarks</th>
            </tr>

            <?php
            //session_start();
            require_once 'php/db.php';
            $cid = $_SESSION['adminid'];
            //echo $cid;
            $sql = "SELECT * FROM orders";
            $result = $con-> query($sql);
                if($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                        //Display Table
                        echo '
                        <tr>
                            <td>'.$row["customerid"].'</td>
                            <td>'.$row["name"].'</td>
                            <td>'.$row["date"].'</td>
                            <td>'.$row["venue"].'</td>
                            <td>'.$row["participants"].'</td>
                            <td>'.$row["package"].'</td>
                            <td>'.$row["remarks"].'</td>
                        </tr>';
                    }
                }
                else{
                    echo "No results";
                }
           // $con-> close();
            ?>
        </table>
        </center>
        <center>
            <table id="customerDataEdit" style="display:none">
                <tr>
                    <th>Customer Id</th>
                    <th>Customer Name</th>
                    <th>Event Date</th>
                    <th>Event Venue</th>
                    <th>Participants</th>
                    <th>Package</th>
                    <th>Remarks</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            
            <?php
            //session_start();
            require_once 'php/db.php';
            //echo $cid;
            $sql2 = "SELECT * FROM orders";
            $result2 = $con-> query($sql2);
                if($result2-> num_rows > 0){
                    while($row = $result2-> fetch_assoc()){
                        //Edit Table
                        echo '
                        <tr>
                            <td><input class="adminInput" type="text" name="id" value="'.$row["customerid"].'" disabled></td>
                            <td><input class="adminInput" type="text" name="name" value="'.$row["name"].'"></td>
                            <td><input class="adminInput" type="date" name="date" value="'.$row["date"].'"></td>
                            <td><input class="adminInput" type="text" name="venue" value="'.$row["venue"].'"></td>
                            <td><input class="adminInput" type="number" name="participants" value="'.$row["participants"].'"></td>
                            <td><input class="adminInput" type="text" name="package" value="'.$row["package"].'"></td>
                            <td><input class="adminInput" type="text" name="Remarks" value="'.$row["remarks"].'"></td>
                            <td>
                                <form><button type="submit" name="submit" value="submit"
                                        style="background-color: #f56; color: white !important; border: none;box-shadow: none;">Update</button>
                                </form>
                            </td>
                            <td>
                                <form><button type="submit" name="submit" value="submit"
                                        style="background-color: #f56; color: white !important; border: none;box-shadow: none;">Delete</button>
                                </form>
                            </td>
                        </tr>';
                        
                    }
                }
                else{
                    echo "No results";
                }
            $con-> close();
            
            ?>
            
        </table>
        </center>
        
    </section>

    

    <script>
        function request(){
            alert("Your request has been sent!");
        }
        function switchTable(){
            document.getElementById("customerData").style.display = "none";
            document.getElementById("customerDataEdit").style.display = "table";
        }
    </script>
</body>