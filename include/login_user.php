   <?php

$username = $_SESSION["Username"];  
$select= "select * from Signup WHERE Username='$username'";
$cur_user=mysqli_query($con,$select);
$row=mysqli_fetch_assoc($cur_user);
  $user_name=$row['Username'];
  $user_id=$row['ID']; 
  $user_profile=$row['Profile']; 
  $user_status=$row['Status']; 
  $user_email=$row['Email']; 
  $user_num=$row['Phoneno']; 
  $user_country=$row['Country']; 
  $user_gender=$row['Gender']; 
  $bgcolor=$row['Wallpaper']; 

  
?>