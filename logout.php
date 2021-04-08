

<?php
include('include/db_connect.php');
session_start();
    $Username= $_SESSION["Username"];
    $update_msg=mysqli_query($con,"UPDATE Signup SET Status='Offline' WHERE Username='$Username'");
    session_destroy();
    header('location:login.html');
?>
