<?php

$dbServername = "localhost";
$dbUsername ="root";
$dbPassword="";
$dbName = "db1";
$row;

$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


// if(isset($_POST['update'])){
// 	$sql2 = "UPDATE emp SET Empname = '".$_POST["Empname"]."',processID ='".$_POST["ProID"]."',GrpNo = '".$_POST["GrpNo"]."',units = '".$_POST["UnitsHr"]."',OT = '".$_POST["OTHr"]."',date = '".$_POST["Udate"]."' WHERE EmpID=".$_POST['EmpID']."'";
// 	$res2 = mysqli_query($conn,$sql2);

	
// 	$sql3= "SELECT * FROM emp WHERE EmpID=".$_POST["EmpID"];
// 	//$res3 = mysqli_query($conn,$sql3);
// 	$res3 = $conn-> query($sql3);
// 	$row = mysqli_fetch_assoc($res3);
// 	//echo "<script>alert ('Update Successful')</script>";
// }

if(isset($_POST['update'])){
    //Update function
    $sql2 = "UPDATE emp SET Empname = '".$_POST["Empname"]."',processID ='".$_POST["ProID"]."',GrpNo = '".$_POST["GrpNo"]."',units = '".$_POST["UnitsHr"]."',OT = '".$_POST["OTHr"]."',date = '".$_POST["Udate"]."' WHERE EmpID=".$_POST['EmpID']."'";
    $result2 = $conn-> query($sql2);
    $conn-> close();
    echo "<script>alert ('Update Successful')</script>";
}



if (isset ($_GET['EmpID'])){
    echo $_GET['EmpID'];

    $sql1= "SELECT * FROM emp WHERE EmpID=".$_GET['EmpID'];
    $result = $conn-> query($sql1);
	if($result-> num_rows > 0){
        while($row = $result-> fetch_assoc()){

            echo '
            <!DOCTYPE html>
            <html>
            <head>
                
                <link rel="stylesheet" type="text/css" href="../css/employee.css">
                <title></title>
                
            </head>
            <body>
                
                <div class=navbar>
                            <img class=logo src="../images/logo1.png">
            
                    <ul>
                        <li>MENU
                        <div class=submenu1>
                        <ul>
                            <li><a href="main.html">MAIN MENU</a></li>
                            <li><a href="raw1_admin.php">RAW MATERIALS</a></li>
                            <li><a href="procedure_admin.php">PROCESS DETAILS</a></li>
                            <li><a href="product_admin.php">PRODUCT DETAILS</a></li>
                            
                        </ul>
                        </div>
                        </li>
                        
                    </ul>
                    
                </div>
                <div class=container >
                <div class=space>
                </div>
                    <div class=first >
                            <form action="" method="post" onsubmit="return validate();">
                            <div class=inputbox>
                            <table class=table1>
                            <h2>ADD EMPLOYEE DETAILS</h2>
                            <br/>
                            
                            </tr>
                            <form action="update_emp.php" method ="POST">
                        <tr class="input">';

                        echo "<td><input type = 'text' name='EmpID' required value =".$row['EmpID']." readonly></td>";
		
                        echo '</tr><tr class="input">';
                        
                        echo "<td><input type = 'text' name='Empname' required value =".$row['Empname']."></td>";
            
                        echo '</tr ><tr class="input">';
                        
                        echo "<td><input type = 'text' name='ProID' required value =".$row['ProID']."></td>";
                    
                        echo '</tr><tr class="input">';
                        
                        echo "<td><input type = 'text' name='GrpNo' required value =".$row['GrpNo']."></td>";
                    
                        echo '</tr ><tr class="input">';
                        
                        echo "<td><input type = 'text' name='UnitsHr' required value =".$row['UnitsHr']."></td>";
                    
                        echo '</tr><tr class="input">';
                        
                        echo "<td><input type = 'text' name='OTHr' required value =".$row['OTHr']."></td>";
                    
                        echo '</tr><tr class="input">';
                        
                        echo "<td><input type = 'text' name='Udate' required value =".$row['Udate']."></td>";
                    echo'
                        </tr>
                        <tr>
                    </tr>
                    <tr>
                        <td ><input class=button2 type="submit" value="Update" name="update"></td>
                        <td ><a href="../html/employee.php"><button class=button2 type="button">Database</button></a></td>
                    </tr>
                    </form>
                            </table>
                            </div>
                        </form>
                    </table>
                </div>
            </body>
            </html>';
             }
    }
    else{
        echo "No results";
    }
$conn-> close();
}
	


//if(!isset ($_POST['EmpID']) && !isset($_POST['update'])){
	//header("Location:../html/employee_admin.php");
//}





			