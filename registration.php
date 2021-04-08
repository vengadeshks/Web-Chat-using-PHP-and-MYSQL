<?php
session_start();
include('include/db_connect.php');

$Username= $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Emailid'];
$Phoneno = $_POST['Phonenumber'];
$Country=$_POST['Country'];
$Gender = $_POST['Gender'];

$Username_checking = "select * from Signup where Username='$Username'" ;
$result = mysqli_query($con, $Username_checking);
$num = mysqli_num_rows($result);

if ($Gender=='Male'){
    $profileimg='images/men.jpg';
}
else{
    $profileimg='images/women.jpg';
}

if($num==1)
{
    echo '<script>alert("username already taken")</script>';	
	echo '<script>window.open("login.html","_self")</script>';
    exit();
}
else
{
    $reg="insert into Signup(Username,Password,Email,Phoneno,Country,Gender,Profile,Wallpaper) values ('$Username','$Password','$Email','$Phoneno','$Country','$Gender','$profileimg','f2f2f2')";
    $query=mysqli_query($con,$reg);
    if($query){
        	echo '<script>alert("Congratulations ,Your account has been created ")</script>';
            echo '<script>window.open("login.html","_self")</script>';
    }
    else{
        echo '<script>alert("Registration Failed ,Try Again!!..")</script>';
    }

	
      
}


?>