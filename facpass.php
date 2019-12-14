<?php
session_start();

$h1= $_SESSION['EMAIL'];

 $host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "dbms";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);


     
     
    

?>

<!DOCTYPE html>
<head>
    
    <title>Student feedback system</title>
    <link rel="stylesheet" type="text/css" href="contact.css">
    <link href="icon/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:500&display=swap" rel="stylesheet">
  
    <body>
     
       <nav>
           <div class="head">
                <h3><a>Student </a>Feedback System</h3>
           </div>
           <ul class="nav-links">
               <li>
                   <a href="home.html">Home</a>
               </li>

            <li>
                <a href="about.html">About</a>
            </li>
            <li>
                <a href="contact.html">Contact</a>
            </li>
           </ul>
         
       </nav>
    <div class="loginbox">
   
        
     <form action="#" method="POST">
            <h1>Update Password</h1>
            
            <input type="password" name="cpassword"placeholder="Enter current password " >
            
            <input type="password" name="password" placeholder="Enter new password">
           
            <input type="password" name="c1password" placeholder="Re-enter new password">
            
           
                <input type="submit" name="submit"value="Update">
        </form>   
    </div>
   <?php 
   
    
  
    
    
    if(isset($_POST['submit']))
   {
    $sql ="SELECT password FROM faculty where email = '$h1'";
    $result= mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
      

    if ($_POST['cpassword'] == $row['password']) {

        mysqli_query($conn, "UPDATE faculty set password='" . $_POST["password"] . "' WHERE email='" . $h1 . "'");
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Succesfully Changed')
        </SCRIPT>");
        header('Refresh:0.2;url= logout.php');
    }

     else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Incorrect current password')
        </SCRIPT>");
        header('Refresh:0.2;url= stdpass.php');
     }
   
}
?>
     <div id="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()">
            <script type="text/javascript">
                function toggleSidebar(){
                 document.getElementById("sidebar").classList.toggle('active');
                }
               </script><a>
         <span></span>
         <span></span>
         <span></span>
        </a>
        </div>
        <div class="wel">Welcome</div>
        <ul class="side">
        <li><a href="facdash.php">Profile</a></li>
         <li><a href="facfeed.php">Student Feedback</a></li>
         <li><a href="facpass.php">Update Password</a></li>
         <li><a href="logout.php">Logout</a></li>
         
        </ul>
       </div>
      
   <!--- <div class="logo">
        <img src="images/logo3.png" class="logo">
    </div> -->
      
</body>
</head>