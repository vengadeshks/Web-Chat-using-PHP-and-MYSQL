<?php
session_start();
include('include/db_connect.php');

$Username = $_POST['Username'];
$pass = $_POST['Password'];

$select_user = "select * from Signup where Username='$Username' && Password='$pass'";

$result = mysqli_query($con, $select_user);
$num = mysqli_num_rows($result);

if($num==1)
{
    $_SESSION['Username'] = $Username;
    $update_msg=mysqli_query($con,"UPDATE Signup SET Status='Online' WHERE Username='$Username'");
    header('location:chatpage.php');
}
else
{
	echo("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = 'login.html';</script>");
}
?>