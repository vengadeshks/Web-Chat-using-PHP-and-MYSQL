<?php 

if(isset($_POST['update_profile']))
{
    $upname=$_SESSION['Username'];
          
$fileElementName = 'file';
$path = 'images/'; 
$location = $path.$_FILES['profile_image']['name']; 
$image = $path.$_FILES['profile_image']['name']; 
    
    
    if($image=='')
    {
        echo "<script>alert('please select profile image ') </script>";
    }

    
    else{
    $update="UPDATE Signup SET Profile='$location' where Username='$upname'";
    if(mysqli_query($con,$update))
    {
        move_uploaded_file($_FILES['profile_image']['tmp_name'],$location);
        echo "<script>alert('pofile  image is uploaded ')</script>";
        echo "<script>window.location.href='chatpage.php';</script>";
      
    }
    else{
         echo "<script>alert('pofile  image is not uploaded ')</script>";
         echo "<script>window.location.href='chatpage.php';</script>";
    }
    }
    
}

if(isset($_POST['update_password']))
{
    $upname=$_SESSION['Username'];
    $up_q="SELECT * FROM Signup WHERE Username='$upname'";
    $up_r=mysqli_query($con,$up_q);
    $uprow=mysqli_fetch_assoc($up_r);
    $dbpassword=$uprow['Password'];
    $curpass=$_POST['curpass'];
    $newpass=$_POST['newpass'];
    $confirmpass=$_POST['cpass'];
    if($curpass != $dbpassword )
    {
         echo "<script>alert('Your old password is not match with current password.. ')</script>";
      
    }
    if($newpass != $confirmpass )
    {
     echo "<script>alert('Your new password didn't match with confirm password..')</script>";
    }
    
    if($curpass == $dbpassword AND $newpass == $confirmpass)
    {
        $query="UPDATE Signup SET Password='$newpass' WHERE Username='$upname'";
        $res=mysqli_query($con,$query);
        echo "<script>alert('Your password is updated')</script>";
         echo "<script>window.location.href='chatpage.php';</script>";
         
    }
}

if(isset($_POST['update_number']))
{
    $upname=$_SESSION['Username'];
    $up_q="SELECT * FROM Signup WHERE Username='$upname'";
    $up_r=mysqli_query($con,$up_q);
    $uprow=mysqli_fetch_assoc($up_r);
    $dbpassword=$uprow['Password'];
    $password=$_POST['password'];
    $newnum=$_POST['newnum'];
       if($password=='' AND $newnum='')
    {
        echo "<script>alert('please enter number') </script>";
    }
    
    else{
        $query="UPDATE Signup SET Phoneno='$newnum' WHERE Username='$upname'";
        $res=mysqli_query($con,$query);
        echo "<script>alert('Your number is updated')</script>";
//         echo "<script>window.location.href='chatpage.php';</script>";
    
     }
}
    

    


?>