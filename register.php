<?php
session_start();
include("db_conection.php");
if(isset($_POST['register']))
{
$user_email = $_POST['ruser_email'];
$user_password = $_POST['ruser_password'];
$user_firstname = $_POST['ruser_firstname'];
$user_lastname = $_POST['ruser_lastname'];
$user_address = $_POST['ruser_address'];
$user_phone = $_POST['user_phone'];



$check_user="select * from users WHERE user_email='$user_email'";
    $run_query=mysqli_query($conn,$check_user);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Customer is already exist, Please try another one!')</script>";
 echo"<script>window.open('index.php','_self')</script>";
exit();
    }
 
$saveaccount="insert into users (user_email,user_password,user_firstname,user_lastname,user_address,user_phone) VALUE ('$user_email','$user_password','$user_firstname','$user_lastname','$user_address','$user_phone')";
mysqli_query($conn,$saveaccount);
echo "<script>alert('Data successfully saved, You may now login!')</script>";				
echo "<script>window.open('index.php','_self')</script>";
		

}

?>
