<?php
session_start();
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "dbms";

//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname); 
if(isset($_POST['submit']))
{
  $email=$_POST['email'];
  $pswd=$_POST['password'];
  $query="SELECT * FROM student WHERE email='$email' && password='$pswd'";
  $data=mysqli_query($conn,$query);
  $total=mysqli_num_rows($data);
  if( $total==1)
  {
    $_SESSION['EMAIL']=$email;
     
    header('location: studdash.php');
 
  }
  else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    alert('Incorrect Email or Password')
    </SCRIPT>");   
    header('Refresh:0.2;url= login.html');
 
  }
  
}
?>