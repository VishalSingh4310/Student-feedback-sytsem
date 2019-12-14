<?php
session_start();

$h1= $_SESSION['EMAIL'];

 $host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "dbms";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

$sql ="SELECT roll,username,email,phone,course FROM student where email = '$h1'";
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
       <?php
           $row= mysqli_fetch_assoc($result);
            {
        ?>
            
       <div class="loginbox">
           <div ><img src="images/avatar1.png "class="avatar"></div>
           <div class="user-name"><?php echo $row['username']; ?></div>
           <div class="user"><?php echo $row['roll']; ?></div>
           <div class="user"><?php echo $row['course']; ?></div>
           <div class="user"><?php echo $row['email'] ;?></div>
           <div class="user"><?php echo $row['phone']; ?></div>
          
         
       </div>
            <?php
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
        <li><a href="studdash.php">Profile</a></li>
       
         <li><a href="feed.php">Feedback Form</a></li>
         <li><a href="stdpass.php">Update Password</a></li>
         <li><a href="logout.php">Logout</a></li>
         
        </ul>
       </div>
      
</body>
</head>
<?php
