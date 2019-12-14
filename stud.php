<?php

$username = $_POST['username'];
$password = $_POST['password'];
$course = $_POST['course'];
$email = $_POST['email'];
$roll = $_POST['roll'];
$phone = $_POST['phone'];
if (!empty($username) || !empty($password) || !empty($course) || !empty($email) || !empty($roll) || !empty($phone)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "dbms";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT roll From student Where roll = ? Limit 1";
     $INSERT = "INSERT Into student (roll,username,email, phone, course, password) VALUES (?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $roll);
     $stmt->execute();
     $stmt->bind_result($roll);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssiss", $roll, $username, $email, $phone, $course, $password);
      $stmt->execute();

      echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.alert('Succesfully Registered')
      </SCRIPT>");
      header('Refresh:0.2;url= login.html');
     } else {
  
      echo ("<SCRIPT LANGUAGE='JavaScript'>
        alert('Someone already registered using this Student ID')
        </SCRIPT>");   
        header('Refresh:0.2;url= studreg.html');
     
     }
     $stmt->close();
     $conn->close();
    }
}
 die();
?>