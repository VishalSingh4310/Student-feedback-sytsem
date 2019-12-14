<?php

 $roll= $_GET['roll'];
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "dbms";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname); 

$query= "DELETE  FROM student WHERE roll = '$roll'";
$data = mysqli_query($conn, $query);
if($data)
{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        alert('Record Deleted')
        </SCRIPT>");
        header('refresh:0.2,stdadmin.php');
}
else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        alert('Record Not deleted')
        </SCRIPT>");
        header('refresh:0.2,stdadmin.php');
}
?>