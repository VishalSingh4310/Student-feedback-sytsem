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
    $query="SELECT * FROM faculty WHERE email = '$email' and password ='$pswd'";
    $data = mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    if($total==1)
    {
        $_SESSION['EMAIL']=$email;
     
        header('Refresh:0;url= facdash.php');
    }
    else
    {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Incorrect Email or Password')
        </SCRIPT>");
        header('Refresh:0.2;url= faclog.html');
    }
}
?>