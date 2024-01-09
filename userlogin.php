<?php
session_start();

include("db_conection.php");
include("index.php");



if(isset($_POST['user_login']))
{
    $user_reg=$_POST['user_reg'];
    $user_password=$_POST['user_password'];
	

    $check_user="select * from users WHERE user_reg='$user_reg' AND user_password='$user_password'";

 
    $run=mysqli_query($conn,$check_user);

    if(mysqli_num_rows($run))
    {
	 echo "<script>alert('You're successfully login!')</script>";
       
 echo "<script>window.open('Customers/index.php','_self')</script>";
       
$_SESSION['user_reg']=$user_reg;



    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
		  echo "<script>window.open('index.php','_self')</script>";
		
		 exit();
		
    }
}
?>