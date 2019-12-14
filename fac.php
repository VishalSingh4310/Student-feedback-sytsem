<?php
$username = $_POST['username'];
$password = $_POST['password'];
$department = $_POST['department'];
$email = $_POST['email'];
$phone = $_POST['phone'];
if (!empty($username) || !empty($password) || !empty($department) || !empty($email)  || !empty($phone)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "dbms";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From faculty Where email = ? Limit 1";
     $INSERT = "INSERT Into faculty (username, email, phone,department, password) VALUES (?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssiss", $username, $email, $phone, $department, $password);
      $stmt->execute();
      echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.alert('Succesfully Registered')
      </SCRIPT>");
      header('Refresh:0.2;url= faclog.html');
     } else {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Someone already registered using this email')
        </SCRIPT>");
        header('Refresh:0.2;url= facreg.html');
     
     }
     $stmt->close();
     $conn->close();
    }
}
 die();
?>