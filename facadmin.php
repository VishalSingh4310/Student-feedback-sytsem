<?php
session_start();
$h1=$_SESSION['EMAIL'];
 $host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "dbms";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

$sql ="SELECT faculty.username,faculty.department,faculty.phone,faculty.email FROM faculty,administrator";
$result= mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<head>
    
    <title>Sudent Feedback System</title>
    <link rel="stylesheet" type="text/css" href="facfeed.css">
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
           <h2>Faculty Info</h2>
        <tr >
           
            
            <th>Name</th>
            <th>Department</th>
            <th>Phone No.</th>
            <th >Email</th>
            <th></th>
            <th></th>
            </tr>
            <?php
                while($row=mysqli_fetch_assoc($result))
                {
            
                   echo" <tr>
                       
                        <td>".$row['username']."</td>
                        <td>" .$row['department']."</td>
                        <td> ".$row['phone']."</td>
                        <td>" .$row['email']." </td>
                        <td class='side'><a href='facupdate.php?username=$row[username]&email=$row[email]&department=$row[department]&phone=$row[phone]' class='bn'>Edit</a></td>
                        <td class='side'><a href='delfac.php?username=$row[username]' class='bn'>Delete</a></td>

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