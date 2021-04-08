 <?php 
          include('db_connect.php');
           $except =$_SESSION['Username'];
if (isset($_POST['search']))
{
    $search_key=$_POST['searchText'];
    $query="SELECT * FROM Signup WHERE Username LIKE '%$search_key%'";
}
else{
          $query="SELECT * FROM Signup WHERE Username NOT LIKE '$except'";
         
          
}


          $result=mysqli_query($con,$query);
         while($row=mysqli_fetch_assoc($result)){   
             $Id=$row['ID'];
             $Profile=$row['Profile'];
             $Username=$row['Username'];
             
//             To find last message of users
              $query2="SELECT * FROM users_chat WHERE (Sender_username='$Username' AND  Receiver_username='$except') OR (Sender_username='$except' AND  Receiver_username='$Username')ORDER BY Msg_id DESC LIMIT 1 ";
             $result2=mysqli_query($con,$query2);
             $row2=mysqli_fetch_assoc($result2);
             $Last_msg_time=isset($row2['Msg_date'])?$row2['Msg_date']:0;
                if($Last_msg_time){
                $datetime = explode(" ",$Last_msg_time);
                $date = $datetime[0];
                $time = $datetime[1];
                }
                else{
                $time='';
                }
             
//             number of unread message -Notification
             $total_mes="SELECT * FROM users_chat WHERE (Sender_username ='$Username' AND Receiver_username ='$except') AND (Msg_status='unread')";
             $total_result=mysqli_query($con,$total_mes);
             $total_rows=mysqli_num_rows($total_result);
 
                
?>
          <a href='chatpage.php?user_name=<?php echo $Username?>' ><div class="row sideBar-body">
            <div class="col-sm-3 col-xs-3 sideBar-avatar">
              <div class="avatar-icon">
                <img src="<?php echo $Profile  ?>">
              </div>
            </div>
            <div class="col-sm-9 col-xs-9 sideBar-main">
              <div class="row">
                <div class="col-sm-8 col-xs-8 sideBar-name">
                  <span class="name-meta"><?php echo $Username ?>
                </span><br>
                    <?php
				if($row['Status']=='Online')
				{
				echo " <span class='time-meta'><i class='fa fa-circle fa-0.5x' aria-hidden='true'></i>   Online </span>";
				}
				else
				{
				echo "<span class='time-meta'><i class='fa fa-circle-o fa-0.5x' aria-hidden='true'></i>   Offline </span>";
				}
				?>
                </div>
                <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                  <span class="time-meta pull-right"><?php echo $time ?><br>
                      <?php if($total_rows>0){ ?>
                      <span class="time-meta pull-right" id="circle"><?php echo $total_rows ?></span>
                    <?php }
                     else {
                         
                     }?>
                </span>
                    
                    
                </div>
              </div>
            </div>
          </div></a>
          <script>scrollBottom();</script>
            <?php  } ?>