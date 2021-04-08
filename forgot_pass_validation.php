<?php
session_start();
include("include/db_connect.php");
if(isset($_POST['submit']))
{
	$Username=$_POST['Username'];
	$Phoneno=$_POST['Phoneno'];
	
	$select_user = "select * from Signup where Username='$Username' AND Phoneno='$Phoneno'";
	$result = mysqli_query($con, $select_user);
	$num = mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result);

	if($num==1){
		$User_name=$row['Username'];
		$_SESSION['User_name']=$User_name;
		echo"<script>alert('Entered Username and Phoneno is correct')</script>";
          echo"<script>window.open('change_pass.php?name=$User_name','_self')</script>";
		
	}else{
		echo"<script>alert('Your Username or Phoneno is incorrect')</script>";
		echo"<script>window.open('forgot_check_user.php','_self')</script>";
		
	}

}
if(isset($_GET['change']))
{
	
	
	$name=$_GET['name'];
	$pass1=$_GET['Npassword'];
	$pass2=$_GET['conpassword'];
	if($pass1 != $pass2)
	{
		echo"<script>window.alert('Your New Password didn\'t match with confirm password')</script>"; 
	}
	if($pass1 == $pass2)
	{
		$update_pass=mysqli_query($con,"update Signup Set Password=$pass1 where Username='$name'");
		echo"<script>alert('Your Password Has Been Successfully Changed Go and Signin')</script>";
		echo"<script>window.open('login.html','_self')</script>";
	
		
	}

	
}

?>