<?php
session_start();
$h1= $_SESSION['EMAIL'];
 $host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "dbms";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);


$sql ="SELECT username  FROM student WHERE email= '$h1'";
$result= mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);{
$h2=$row['username'];

}


    if(isset($_POST['submit']))
    {
       
           
            $a=$_POST['a1'];
            $b=$_POST['b1'];
            $c=$_POST['c1'];
            $d=$_POST['d1'];
            $e=$_POST['e1'];
            $f=$_POST['f1'];
            $stud=$h2;
            $faculty=$_POST['t1'];
        
       
          
               
                $sql ="SELECT username FROM faculty WHERE username= '$faculty'";
                $result= mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($result);{
                $h3=$row['username'];}
                if($faculty==$h3)
                {
                    $query = "INSERT INTO feedback (a,b,c,d,e,f,fac,stud) VALUES ('$a','$b','$c','$d','$e','$f','$faculty','$stud')";
                    $query_run=mysqli_query($conn,$query);
                    if($query_run)
                    {
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
              window.alert('Succesfully Submitted')
              </SCRIPT>"); 
                        header('Refresh:0.2;url= studdash.php');
                    }
                    else{
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                        alert('Record Not Submitted')
                        </SCRIPT>"); 
                        header('Refresh:0.2;url= feed.php');
                        }
                   
            
                   
                }
                else{
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Faculty not Found ')
                    </SCRIPT>");
                    header('Refresh:0.2;url= feed.php');
                }
        
       
    
    }
    
    ?>