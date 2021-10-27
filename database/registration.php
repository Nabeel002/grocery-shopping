<?php
    
  session_start();
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'register');
  
  
  
  
   $name =$_POST['user'];
   $pass=$_POST['pass'];
   $s="select * from usertable where name ='$name'";


   $result = mysqli_query($con,$s);
   $num=mysqli_num_rows($result);

   if($num==1)
   {
       echo 'username already exist go back and type another one';
   }

   else {
       $reg="insert into usertable(name,password) values('$name','$pass')";
       mysqli_query($con,$reg);
       header('location:../log-in.php');
   }

   

?>





