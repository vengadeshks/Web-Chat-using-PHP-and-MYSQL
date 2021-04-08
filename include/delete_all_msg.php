<?php 

include('db_connect.php');
session_start();
$clicked_name=$_GET['clicked_name'];
$Username=$_SESSION['Username'];
$query1="DELETE FROM users_chat WHERE (Sender_username='$Username' AND Receiver_username='$clicked_name') OR (Sender_username='$clicked_name' AND Receiver_username='$Username')";
$result1=mysqli_query($con,$query1);
if($result1){
    echo "<script>alert('Your messages are deleted.') </script>";
    echo "<script>window.location.href='../chatpage.php' </script>";
}

?>