<?php
    
  session_start();
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'grocery');
  
  
  
  
   $name =$_POST['user'];
   $pass=$_POST['pass'];
   $s="select * from usertable where name ='$name' && password='$pass'";


   $result = mysqli_query($con,$s);
   $num=mysqli_num_rows($result);

   if($num==1)
   {
     header('location:../index.php');
   }

  
   else {
   
    header('location:../log-in.php' );
    
   }
  
   

?>





