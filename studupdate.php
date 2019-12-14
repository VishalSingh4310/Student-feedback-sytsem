<?php
session_start();


$_GET['email'];
$_GET['phone'];

$h0=$_GET['roll'];
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "dbms";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
$sql ="SELECT username,roll FROM student WHERE roll= '$h0'";
$result= mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);{


}


?>

<!DOCTYPE html>
<head>
    
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="studreg.css">
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
       <div class="role">Student</div>
    <div class="loginbox">
   
        
     <form action="#" onsubmit="return fun(this);" method="GET">
            <h1>Register</h1>
            <p>Student ID</p>
            <input type="text" name="roll" value="<?php  echo$_GET['roll'] ;?>"  placeholder="CSJMU--" maxlength="16" readonly>

            <p>Email</p>
            <input type="email" name="email"value="<?php echo $_GET['email'];?>"  placeholder="someone@example.com"required>
            <p>Phone No</p>
            <input type="tel" name="phone" value="<?php  echo$_GET['phone'] ;?>"  placeholder="+91" maxlength="10" required>
            <label>Department :    </label>
            <select class="course"  name="course"required>
                <option value="B.Tech">B.Tech</option>
                <option value="BBA">BBA</option>
                <option value="MCA">MCA</option>
                <option value="BCA">BCA</option>
            </select>
           
            <input type="submit" name="submit"value="Update">
           
        </form> 
        <?php
        
        if(isset($_GET['submit']))
        {
           
           $h1=$_GET['roll'];
           
            $email=$_GET['email'];
            $phone=$_GET['phone'];
         $course=$_GET['course'];
            $query = "UPDATE student set email ='$email',course='$course', phone='$phone'  where roll = '$h1'";
            $data= mysqli_query($conn, $query);
            if($data)
            {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
        alert('Record Updated')
        </SCRIPT>");
        header('refresh:0.2,stdadmin.php');   
       
            }
            else{
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                alert('Record Not Updated')
                </SCRIPT>"); 
            }
        }
        ?>
    </div>
    <script>
            function fun(theForm) {
         if (theForm.password.value != theForm.cpassword.value)
         {
             alert('Those password don\'t match!');
             return false;
         } else {
             return true;
         }
     }
        </script>
  
      
</body>
</head>