<?php
session_start();

?>
<?php

include("db_conection.php");

if(isset($_POST['change']))
{
    $user_email=$_POST['user_email'];
    $user_password=$_POST['n_password'];
	

    $check_user="select * from users WHERE user_email='$user_email'";

 
    $run=mysqli_query($dbcon,$check_user);
    $row = mysqli_fetch_array($run);

    if($row['user_email'] == $user_email)
    {
        $user_password=$_POST['n_password'];

        include("db_conection.php");
    $check="UPDATE users SET user_password='$user_password' WHERE user_email='$user_email'"; 
    mysqli_query($dbcon,$check);
    // cjeck updater te

	 echo "<script> alert('Password Changed successfully!'); </script>";
       
 echo "<script>window.open('index.php','_self');</script>";
       
    }
    else
    {
        echo "<script>alert('Email is incorrect!');</script>";
		  echo "<script>window.open('index.php','_self');</script>";
    }
}
?>