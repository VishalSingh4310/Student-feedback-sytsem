<?php
session_start();

$h1=$_SESSION['EMAIL'];
 $host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "dbms";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

$sql ="SELECT username,email,phone,department FROM faculty where email = '$h1'";
$result= mysqli_query($conn,$sql);



?>

<!DOCTYPE html>
<head>
    
    <title>Sudent Feedback System</title>
    <link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="facdash.css">
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
           <div ><img src="images/avatar1.png "class="avatar"></div>
           <div class="user-name"><?php echo $row['username']; ?></div>
           <div class="user"><?php echo $row['department']; ?></div>
           <div class="user"><?php echo $row['email'] ;?></div>
           <div class="user"><?php echo $row['phone']; ?></div>
          
           <?php  $h2=$row['username'];
           
           $sq1=" SELECT SUM(a) as 'suma'from feedback , faculty where feedback.fac='$h2' and faculty.username='$h2'";
           $res1=mysqli_query($conn,$sq1);
           $data=mysqli_fetch_array($res1);  
           $h3=$data['suma'];
           $sq11=" SELECT count(a) as 'coa'from feedback , faculty where feedback.fac='$h2' and faculty.username='$h2'";
           $res11=mysqli_query($conn,$sq11);
           $data11=mysqli_fetch_array($res11);
           $avg=($h3/(($data11['coa'])*5))*100;
           
           
           
           $sq2=" SELECT sum(b) as 'sumb'from feedback , faculty where feedback.fac='$h2' and faculty.username='$h2'";
           $res2=mysqli_query($conn,$sq2);
           $data2=mysqli_fetch_array($res2);  
           $h4=$data2['sumb'];
           $sq12=" SELECT count(b) as 'cob'from feedback , faculty where feedback.fac='$h2' and faculty.username='$h2'";
           $res12=mysqli_query($conn,$sq12);
           $data12=mysqli_fetch_array($res12);
           $avgb=($h4/(($data12['cob'])*5))*100;
           
           $sq3=" SELECT sum(c) as 'sumc'from feedback , faculty where feedback.fac='$h2' and faculty.username='$h2'";
           $res3=mysqli_query($conn,$sq3);
           $data3=mysqli_fetch_array($res3);  
           $h5=$data3['sumc'];
           $sq13=" SELECT count(c) as 'coc'from feedback , faculty where feedback.fac='$h2' and faculty.username='$h2'";
           $res13=mysqli_query($conn,$sq13);
           $data13=mysqli_fetch_array($res13);
           $avgc=($h5/(($data13['coc'])*5))*100;
           
           $sq4=" SELECT sum(d) as 'sumd'from feedback , faculty where feedback.fac='$h2' and faculty.username='$h2'";
           $res4=mysqli_query($conn,$sq4);
           $data4=mysqli_fetch_array($res4);  
           $h6=$data4['sumd'];
           $sq14=" SELECT count(d) as 'cod'from feedback , faculty where feedback.fac='$h2' and faculty.username='$h2'";
           $res14=mysqli_query($conn,$sq14);
           $data14=mysqli_fetch_array($res14);
           $avgd=($h6/(($data14['cod'])*5))*100;
           
           $sq5=" SELECT sum(e) as 'sume'from feedback , faculty where feedback.fac='$h2' and faculty.username='$h2'";
           $res5=mysqli_query($conn,$sq5);
           $data5=mysqli_fetch_array($res5);  
           $h7=$data5['sume'];
           $sq15=" SELECT count(e) as 'coe'from feedback , faculty where feedback.fac='$h2' and faculty.username='$h2'";
           $res15=mysqli_query($conn,$sq15);
           $data15=mysqli_fetch_array($res15);
           $avge=($h7/(($data15['coe'])*5))*100;
           
           $sq6=" SELECT sum(f) as 'sumf' from feedback , faculty where feedback.fac='$h2' and faculty.username='$h2'";
           $res6=mysqli_query($conn,$sq6);
           $data6=mysqli_fetch_array($res6);  
           $h8=$data6['sumf'];
           $sq16=" SELECT count(f) as 'cof'from feedback , faculty where feedback.fac='$h2' and faculty.username='$h2'";
           $res16=mysqli_query($conn,$sq16);
           $data16=mysqli_fetch_array($res16);
           $avgf=($h8/(($data16['cof'])*5))*100;
            $total=($avg+$avgb+$avgc+$avgd+$avge+$avgf)/6;
            $total1=(round($total,2));
            }
          $store="UPDATE  faculty set percent='$total1' where username='$h2'";
          $t1=mysqli_query($conn,$store);
           
            
            ?>
           <p>Performance</p>
           <div class="progress">

  <div class="progress-bar bg-success" role="progressbar" style="width:<?php echo$total1?>%" aria-valuenow="<?php echo$total1 ?>%" aria-valuemin="0" aria-valuemax="50"><?php echo$total1 ?>%</div>
</div> 

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
        <li><a href="facdash.php">Profile</a></li>
         <li><a href="facfeed.php">Student Feedback</a></li>
         <li><a href="facpass.php">Update Password</a></li>
         <li><a href="logout.php">Logout</a></li>
         
        </ul>
       </div>
      
</body>
</head>
