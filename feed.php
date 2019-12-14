<?php
session_start();
$h1= $_SESSION['EMAIL'];
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "dbms";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
$sql ="SELECT username FROM student WHERE email= '$h1'";
$result= mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);{
$h2=$row['username'];
}
?>
<!DOCTYPE html>
<head>
    
    <title>Sudent Feedback System</title>
    <link rel="stylesheet" type="text/css" href="feed.css">
    <link href="icon/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:500&display=swap" rel="stylesheet">
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
    <body>
     
    <div class="loginbox">
   
     
    <form method="POST" action="feed1.php">
        <p class="selection">
            Student Name:&nbsp;&nbsp;
           <?php echo$h2?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Faculty Name:&nbsp;&nbsp;
            <input type="text" name="t1" placeholder="Submitted To" required>
    </p>
       <table>     
            <tr class="main">
           
                   <th>Feedbacks </th>       
                   <th>Very Poor</th>
                   <th>Bad</th>
                   <th>Good</th>
                   <th >Very Good</th>
                   <th >Excellent</th>
             </tr>
             <tr>
                 <th> Quality</th><br>
                 <th><input type="radio" value="1" name="a1" required/></th>
                 <th><input type="radio" value="2" name="a1" required/></th>
                 <th><input type="radio" value="3" name="a1"required/></th>
                 <th><input type="radio" value="4" name="a1"required/></th>
                 <th><input type="radio" value="5" name="a1"required/></th>
             </tr>
                 <tr>
                 <th>Consultation hour</th><br>
                 <th><input type="radio" value="1" name="b1" required/></th>
                 <th><input type="radio" value="2"  name="b1" required/></th>
                 <th><input type="radio" value="3" name="b1" required/></th>
                 <th><input type="radio" value="4" name="b1" required/></th>
                 <th><input type="radio" value="5" name="b1"required/></th>
                    </tr>
                 <tr>
                 <th>Training Contents</th><br>
                 <th><input type="radio" value="1" name="c1" required></th>
                 <th><input type="radio" value="2" name="c1" required/></th>
                 <th><input type="radio" value="3" name="c1" required/></th>
                 <th><input type="radio" value="4" name="c1" required/></th>
                 <th><input type="radio" value="5" name="c1" required/></th>
                 </tr>      
                 <tr>
                 <th>Presentation skills</th><br>
                 <th><input type="radio"value="1"  name="d1" required/></th>
                 <th><input type="radio" value="2" name="d1" required/></th>
                 <th><input type="radio" value="3" name="d1" required/></th>
                 <th><input type="radio" value="4" name="d1" required/></th>
                 <th><input type="radio" value="5" name="d1" required/></th>
                  </tr>      
                 <tr>
                 <th>Soft skills</th><br>
                 <th><input type="radio" value="1" name="e1" required/></th>
                 <th><input type="radio" value="2" name="e1" required/></th>
                 <th><input type="radio" value="3" name="e1" required/></th>
                 <th><input type="radio" value="4" name="e1" required/></th>
                 <th><input type="radio" value="5" name="e1" required/></th>
                    </tr>    
                 <tr>
                 <th>Problem Efficiency</th><br>
                 <th><input type="radio" value="1" name="f1" required/></th>
                 <th><input type="radio" value="2" name="f1" required/></th>
                 <th><input type="radio" value="3" name="f1" required/></th>
                 <th><input type="radio" value="4" name="f1" required/></th>
                 <th><input type="radio" value="5" name="f1" required/></th>
                 </tr>
             <br>
                </tr>
       </table>
            <input type="submit"  name="submit" value="Submit" class="log">
           
            
           
        </form>
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
            <li><a href="studdash.php">Profile</a></li>
       
         <li><a href="feed.php">Feedback Form</a></li>
         <li><a href="stdpass.php">Update Password</a></li>
         <li><a href="logout.php">Logout</a></li>
         
        </ul>
           </div>
    
      
</body>
</head>
