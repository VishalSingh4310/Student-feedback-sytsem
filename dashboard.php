<?php


session_start();
$h1=$_SESSION['EMAIL'];
 $host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "dbms";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

$sql ="SELECT user,email,phone FROM administrator WHERE email= '$h1'";
$result= mysqli_query($conn,$sql);


?>

<!DOCTYPE html>
<head>
    
    <title>Sudent Feedback System</title>
    <link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <link href="icon/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:500&display=swap" rel="stylesheet">
  
    <body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
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
       <?php
           $row=mysqli_fetch_assoc($result);
            {
        ?>
            
       <div class="loginbox">
          <img src="images/avatar1.png " class="avatar" >
           <div class="user-name"><?php echo $row['user']; ?></div>
          <div class="user"><?php echo $row['email'] ;?></div>
           <div class="user"><?php echo $row['phone']; ?></div>
         <p>ADMINISTRATOR</P>
            
            <?php

            }
            ?>
   
</div>
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
        <li><a href="dashboard.php">Profile</a></li>
        <li><a href="facadmin.php">Manage Faculty</a></li>
         <li><a href="stdadmin.php">Manage Student</a></li>
         <li><a href ="admfac.php">Student Feedback</a></li>
         <li><a href ="admpass.php">Update Password</a></li>
         <li><a href="logout.php">Logout</a></li>
         
         
        </ul>
       </div>
      
</body>
</head>