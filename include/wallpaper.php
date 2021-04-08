<?php 
include('db_connect.php');

if(isset($_GET['color']))
   {

       $color=$_GET['color'];
       $update="UPDATE Signup SET Wallpaper='$color' WHERE Username='$user_name'";
       mysqli_query($con,$update);
   
   }

?>

 <style type="text/css">
     #conversation{
         background-color: #<?php echo $bgcolor ?>;
     }
</style>
