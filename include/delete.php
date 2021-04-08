<?php 

include('db_connect.php');
session_start();
$Username=$_SESSION['Username'];
if(isset($_POST['delete_account']))
{
$query1="DELETE FROM  Signup WHERE Username='$Username'";
$query2="DELETE FROM users_chat WHERE Sender_username='$Username' OR Receiver_username='$Username'";
$result1=mysqli_query($con,$query1);
$result2=mysqli_query($con,$query2);
if(($result1) AND ($result2)){
    echo "<script>alert('Your account is deleted.') </script>";
    echo "<script>window.location.href='../login.html' </script>";
}

}

?>