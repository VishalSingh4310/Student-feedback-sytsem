<?php
session_start();

 $_GET['username'];
$h0=$_GET['email'];
$_GET['phone'];
$_GET['department'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "dbms";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
$sql ="SELECT username,email,phone FROM faculty WHERE email= '$h0'";
$result= mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<head>
    
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="facreg.css">
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
                <a href="#">About</a>
            </li>
            <li>
                <a href="contact.html">Contact</a>
            </li>
           </ul>
         
       </nav>
       <div class="role">Faculty</div>
    <div class="loginbox">
   
        
     <form action="#" method="GET">
            <h1>Register</h1>
            <input type="email" name="email"  value="<?php echo $_GET['email']; ?>" placeholder="Name" readonly>

            <p>Full Name</p>
            <input type="text" name="username"  value="<?php echo $_GET['username']; ?>" placeholder="Name"required>
           <p>Phone No</p>
            <input type="tel" name="phone" value="<?php echo $_GET['phone']; ?>"  placeholder="+91" maxlength="10" required>
            <label>Department :    </label>
            <select class="course"  name="department"required>
                <option value="B.Tech">B.Tech</option>
                <option value="BBA">BBA</option>
                <option value="MCA">MCA</option>
                <option value="BCA">BCA</option>
            </select><!-- <p>Password</p>  -->
         <!--  <input type="password" name="password"placeholder="Enter Password" > -->
            <input type="submit" name="submit"  value="Update">
           
        </form>  
        <?php
      
        if(isset($_GET['submit']))
        {
            $h0=$_GET['email'];
           $name=$_GET['username'];
            $course=$_GET['department'];
            $phone=$_GET['phone'];
           
            $query = "UPDATE faculty set username='$name', phone='$phone',department='$course' where email= '$h0'";
            $data= mysqli_query($conn, $query);
            if($data)
            {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
        alert('Record Updated')
        </SCRIPT>");   
        header('Refresh:0.2;url=facadmin.php');
            }
            else{
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                alert('Record Not Updated')
                </SCRIPT>"); 
            }
        }
        ?>
    </div>
   
  
      
</body>
</head>