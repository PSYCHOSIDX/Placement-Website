<?php 
//Print Company Table To Excel 
session_start();
include 'includes/db.php';

$qs = "select * from  student   ";

if(isset($_GET['export'])){
if($_GET['export'] == 'true'){

$query = mysqli_query($con, $qs); // Get data from Database from demo table
 
 
    $delimiter = ",";
    $filename = "STUDENT_" . date('Y-m-d') . ".csv"; // Create file name
     
    //create a file pointer
    $f = fopen('php://memory', 'w'); 
     
    //set column headers
    $fields = array( 'Name','', 'Email','', 'Gender','', 'AVERAGE CLASS','','', 'Address', '','ROLL NO', '','Nationality');
    fputcsv($f, $fields, $delimiter);
     
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        
        $lineData = array($row['name'],'', $row['email'],'', $row['sex'],'', $row['avg_class'],'','', $row['address'],'', $row['rollno'],'', $row['nationality']);
        fputcsv($f, $lineData, $delimiter);
    }
     
    //move back to beginning of file
    fseek($f, 0);
     
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
     
    //output all remaining data on a file pointer
    fpassthru($f);
 
 }
}

?>
