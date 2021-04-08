 <?php
        if (isset($_POST['send']))
        {
            $msg=$_POST['message'];

        if  ($msg=='')
        {
             echo "<div class='alert alert-danger'> <strong> <center> Message was unable to send </strong> </center> </div> ";
        }
            else{
                
                $ins="insert into users_chat(Sender_username,Receiver_username,Msg_content,Msg_Status,Msg_date)  values('$user_name','$clicked_name','$msg','unread',NOW())";   
                mysqli_query($con,$ins);
                 echo "<script>window.location.href='chatpage.php?user_name=$clicked_name';</script>";
            }
        
        
        }
        ?>