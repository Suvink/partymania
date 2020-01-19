<?php


    require_once 'db.php';

    //get records from database
    $query = $con->query("SELECT * FROM orders");
    
    if($query->num_rows > 0){
        $delimiter = ",";
        
        //create a file pointer
        $f = fopen('php://memory', 'w');
        
        //set column headers
        $fields = array('Customer ID','Customer Name', 'Event Date', 'Event Venue', 'Participants', 'Package', 'Remarks');
        fputcsv($f, $fields, $delimiter);
        
        //output each row of the data, format line as csv and write to file pointer
        while($row = $query->fetch_assoc()){
            $status = ($row['status'] == '1')?'Active':'Inactive';
            $lineData = array($row['customerid'],$row["name"], $row['cdate'], $row['cvenue'],$row['cparticipants'],$row['cpackage'], $row['cadditional']);
            fputcsv($f, $lineData, $delimiter);
        }
        
        //move back to beginning of file
        fseek($f, 0);
        
        //set headers to download file rather than displayed
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="Order Details.csv');
        
        //output all remaining data on a file pointer
        fpassthru($f);
    }
    exit;

?>