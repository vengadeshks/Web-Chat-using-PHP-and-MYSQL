
<?php 
if (isset ($_GET['user_name']))
{
   $get_username = $_GET['user_name'];
    $query="SELECT * FROM Signup WHERE Username='$get_username'";
    $res=mysqli_query($con,$query);
    $row1=mysqli_fetch_assoc($res);
    $clicked_name=$row1['Username'];
    $clicked_id=$row1['ID'];
    $clicked_profile=$row1['Profile'];
    $clicked_status=$row1['Status'];
    $clicked_email=$row1['Email']; 
    $clicked_country=$row1['Country']; 
    $clicked_gender=$row1['Gender']; 
  
    
//  to indicate the number of message 
   
    $read="UPDATE users_chat SET Msg_status=read WHERE Sender_username='$clicked_name'";
    $read_result=mysqli_query($con,$read);
      
    ?>
<!-- drop-down-->
          <div id="my2Dropdown" class="dropdown-right">
           <div id="myDropdown" class="dropdown-content" style="height:70px;">
                        <a href="#home" onclick='toggleright()'>Contact Info</a>
                        <a href="include/delete_all_msg.php?clicked_name=<?php echo $clicked_name ?>">Delete All chat for everyone</a>
                    </div>
         </div>
   
     <div style="background-color:#048dfe;" class="row heading">
        <div class="col-sm-2 col-md-1 col-xs-3 heading-avatar">
          <div class="heading-avatar-icon">
            <img src="<?php echo $clicked_profile ?> "/>
          </div>
        </div>
        <div class="col-sm-8 col-xs-7 heading-name">
          <a  style="color:white"  class="heading-name-meta"><?php echo $clicked_name ?>
          </a>
          <span style="color:white"  class="time-meta"><?php echo $clicked_status ?></span>
        
        </div>
        <div class="col-sm-1 col-xs-1  heading-dot pull-right">
          <i  style="color:white"  class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true" onclick="showDropdown1()"></i>
        </div>
      </div>
    
    
    
<?php
} 
?>
