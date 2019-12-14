<?php
$user = $_POST['user'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if (!empty($user) || !empty($email) || !empty($phone) || !empty($password) || !empty($cpassword) ) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "dbms";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register (user, email, phone ,password,cpassword) values(?, ?, ?,?,?)";
     //Prepare statement
    }
    echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.alert('Succesfully Registered')
      </SCRIPT>");
      header('Refresh:0.2;url= admlog.html');
}
?>
<!DOCTYPE html>

<head>
    
    <title>Register</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="admreg.css">
    <link href="icon/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:500&display=swap" rel="stylesheet">
  
    <body>
        <img src="images/bg2.jpeg" class="bg3">
       <nav>
           <div class="head">
               <h4>Student Feedback System</h4>
           </div>
           <ul class="nav-links">
               <li>
                   <a href="index.html">Home</a>
               </li>
               <li>
                <a>Register</a>
                
                        <ul>
                            <li><a href="admreg.html">Admin</a></li>
                            <li><a href="facreg.html">Faculty</a></li>
                            <li><a href="register.html">Student</a></li>
                        </ul>
            </li>
            <li>
                <a href="#">About</a>

            </li>
            <li>
                <a href="contact.html">Contact</a>
            </li>
           </ul>
         </nav>
    <div class="loginbox">
    <form action="admreg.php" method = "POST">
            <h1>Register</h1>
            <p>Username</p>
            <input type="text" name="user" placeholder="Enter Username">
            <p>Email</p>
            <input type="email" name="email" placeholder="someone@example.com">
            <p>Phone No</p>
            <input type="tel" name="phone" placeholder="+91">
            <p>Password</p>
            <input type="password" name="password"placeholder="Enter Password">
            <p>Confirm Password</p>
            <input type="password" name="cpassword"placeholder="Enter Password">
            <input type="submit" onclick="fun()" name="login"value="SignUp">
            <script>
                function fun()
                {
                    swal("Good job!", "You clicked the button!", "success");
                }
            </script>
           
        </form> 

    </div>
   
   <!--- <div class="logo">
        <img src="images/logo3.png" class="logo">
    </div> -->
      
</body>
</head>
