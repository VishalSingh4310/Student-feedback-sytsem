<?php
session_start();

 $host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "dbms";

//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

$sql ="SELECT  student.roll,student.username,student.course,student.email,student.phone FROM student,administrator";
$result= mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<head>
    
    <title>Sudent Feedback System</title>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
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
      
       <table class="main">
           <h2>Student Info</h2>
        <tr >
           
             <th>Student ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Phone No.</th>
            <th >email</th>
            <th></th>
            <th></th>
            </tr>
           <?php
                while($row=mysqli_fetch_assoc($result))
                {
            
                   echo" <tr>
                        <td> ".$row['roll']."</td>
                        <td>".$row['username']."</td>
                        <td>" .$row['course']."</td>
                        <td> ".$row['phone']."</td>
                        <td>" .$row['email']." </td>
                        <td class='side'><a href='studupdate.php?username=$row[username]&email=$row[email]&phone=$row[phone]&roll=$row[roll]&course=$row[course]' class='bn'>Edit</a></td>
                        <td class='side'><a href='delstud.php?roll=$row[roll]' class='bn'>Delete</a></td>
                    </tr>";
           
                }
                ?>
       
       </table>
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