<!DOCTYPE html>

<?php 

session_start();
include('include/db_connect.php');
include('include/login_user.php');
include('include/update.php');



?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>WebChat</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css"   type="text/css" rel="stylesheet">
    <link href="css/setting.css"   type="text/css" rel="stylesheet">
    <link href="css/emoji.css"   type="text/css" rel="stylesheet">
<!--    <link href='https://fonts.googleapis.com/css?family=Joti One' rel='stylesheet'>-->
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">


    <style>
        body{
/*            font-family:Joti One;*/
            font-family: 'Sriracha', cursive;
        }
     .search_btn{
                        
                        width: 10%;
                        height: 33px;
                        padding: 2px;
                        background:#048dfe ;
                        color: white;
                        font-size: 17px;
                        border: 1px solid grey;
                        border-left: none;
                        cursor: pointer;
                        position: absolute;
                        top: 0;
                        right:0;
                         opacity: 0.7;
         
         
                        }

                         .search_btn:hover {
                       opacity: 1;
                        }

        a{
            cursor:pointer;
        }
        .privacy{
            margin-left: 20px;
        }
	</style>

</head>
<body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container app">
  <div class="row app-one">
    <div class="col-sm-4 side">
<!--        left side bar-->
      <div class="side-one">
          
          
<!--          drop-down-->
          <div id="my1Dropdown" class="dropdown">
                     <div id="myDropdown" class="dropdown-content">
                        <a onclick="profiletogglebar()">Profile</a>
                        <a href="#home">Starred</a>
                        <a class="heading-compose">Settings</a>
                        <a href="logout.php">Log out</a>
                    </div>
     			</div>
<!--          heading-->
        
      
<div class="row heading"  style="background-color:#048dfe;">
          <div class="col-sm-3 col-xs-3 heading-avatar">
            <div class="heading-avatar-icon">
              <img src="<?php echo $user_profile ?>"  alt="user-profile">
            </div>      
          </div>
     <div  style='width:100px'class="col-sm-1 col-xs-1  heading-dot  pull-left" >
         <a class="heading-name-meta" style="color:white" ><?php echo $user_name ?></a>
       <span   style="color:white;margin-left:6px;"  class="time-meta"><?php echo $user_status ?> </span>
    </div>

          <div class="col-sm-1 col-xs-1  heading-dot  pull-right">
            <i style="color:white" class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true" onclick="showDropdown()"></i>
          </div>
          
        </div>
          
<!--          search-->

        <div class="row searchBox">
          <div class="col-sm-12 searchBox-inner">
            <div class="form-group has-feedback">
                <form class="search_user" action="" method="post">
              <input id="searchText" type="search" class="form-control" name="searchText" placeholder="Search">
             <button class="search_btn" type="submit" name='search'><i class="fa fa-search"></i></button></form>
            </div>
          </div>
        </div>
 
<!--     left side bar - frequent chat -->
       
        <div class="row sideBar">
            
    <?php include('include/get_frequent_user.php'); ?>
            </div>
          </div>
        
		
<!--left side bar two (settings)-->
		  <div class="side-two">
			    <div style="background-color:#048dfe;" class="row newMessage-heading">
			        <div class="row newMessage-main">
				        <div class="col-sm-2 col-xs-2 newMessage-back">
				            <i class="fa fa-arrow-left" aria-hidden="true"></i>
				        </div>
				        <div class="col-sm-10 col-xs-10 newMessage-title">
				        Settings
				        </div>
			        </div>
			    </div>
<!--setting page list-->
        <div class="row compose-sideBar">
         
            <div class="row sideBar-body " onclick="profiletogglebar()" style="height:90px;">
				<div class="col-sm-3 col-xs-3 sideBar-avatar">
					<div class="heading-avatar-icon">
				        <img src="<?php echo $user_profile ?>"  alt="user-profile">
					</div>
				</div>
				<div class="col-sm-9 col-xs-9 sideBar-main">
					<div  style='width:100px'class="col-sm-1 col-xs-1  heading-dot  pull-left">
					    <a style="text-decoration:none;font-size:15px;color:black;" ><?php echo $user_name ?></a><br>
						<span style="margin-left:1px;">My Profile</span>
					</div>
				</div>
		    </div>

          <div class="row sideBar-body" onclick="accounttogglebar()">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
					<div class="heading-avatar-icon">
				        <i class="fa fa-key fa-2x" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-sm-9 col-xs-9 sideBar-main ">
					<div  style='width:100px'class="col-sm-1 col-xs-1  heading-dot  pull-left">
					    <a style="text-decoration:none;color:black;font-size:16px;">Account</a>
						<span style="margin-left:1px;">Privacy,Security</span>
					</div>
				</div>
          </div>
		  
		  
		  <div class="row sideBar-body" onclick="chatwalltogglebar()">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
					<div class="heading-avatar-icon">
				       <i class="fa fa-comments-o fa-2x" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-sm-9 col-xs-9 sideBar-main">
					<div  style='width:100px'class="col-sm-1 col-xs-1  heading-dot  pull-left">
					    <a style="text-decoration:none;color:black;font-size:16px;">Chat Wallpaper</a>
					</div>
				</div>
          </div>
		  
		  <div class="row sideBar-body" onclick="contacttogglebar()">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
					<div class="heading-avatar-icon">
				        <i class="fa fa-info-circle fa-2x" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-sm-9 col-xs-9 sideBar-main">
					<div  style='width:100px'class="col-sm-1 col-xs-1  heading-dot  pull-left">
					    <a style="text-decoration:none;color:black;font-size:16px;">Help</a>
                        <span style="margin-left:1px;">Contactus</span>
					</div>
				</div>
          </div>
		  
		  <div style="margin-top:50px;margin-left:130px;"class="col-sm-9 col-xs-9 sideBar-main">
		  <i class="fa fa-users" aria-hidden="true"></i>  <a style="text-decoration:none;color:black;"href="whatsapp.com://send?text= Please Check This"> Invite Your Friends</a>
		  </div>
		  
        </div>
    </div>
        
<!--      profile-page-->
        <div class='side-three'id="profile">
     
             <div style="background-color:#048dfe;" class="row newMessage-heading">
			        <div class="row newMessage-main">
				        <div class="col-sm-2 col-xs-2 newMessage-back">
				            <i class="fa fa-arrow-left" aria-hidden="true" onclick='profiletoggleremove()'></i>
				        </div>
				        <div class="col-sm-10 col-xs-10 newMessage-title">
				        My Profile
				        </div>
			        </div>
			    </div>
		<br><br>
			<form action="" method="POST" enctype="multipart/form-data" >
                <div class="profileimage">			
					<img style="left:100px;"src="<?php echo $user_profile?>" width="150px" height="150px" ><br><br>
					<i  class="fa fa-camera fa-2x" id="profileup" aria-hidden="true" style="cursor:pointer;margin-left:10px;font-size:20px;color:#048dfe;"onclick="uploadprofile()"> upload<input type="file" name="profile_image" id="upload"  accept="image/*" style="display:none;"></i>
    			</div>
				<div class="box">
					<div class="profiletext">
						<input style="margin-left:130px;" type="text" name="username" value="<?php echo $user_name?>" required>
						<label>Username</label>
					</div>
					<div class="profiletext">
						<input  style="margin-left:130px;"  type="text" name="email" value="<?php echo $user_email?>" required>
						<label>Email Id</label>
					</div>
					<div class="profiletext">
						<input style="margin-left:130px;"  type="text" name="country"  value="<?php echo $user_country?>" required>
						<label>Country</label>
					</div>
					<div class="profiletext">
						<input style="margin-left:130px;"  type="text" name="gender" value="<?php echo $user_gender?>" required>
						<label >Gender</label>
					</div><br>
					<input type="submit"  style="margin-left:175px;" value="UPDATE" name='update_profile'>
                    
                </div>
			</form>
		</div>
         
          <!-- ACCOUNT -->
		<!--left side bar three (My Account)-->
		  <div class="side-three" id="acc">
			    <div style="background-color:#048dfe;" class="row newMessage-heading">
			        <div class="row newMessage-main">
				        <div class="col-sm-2 col-xs-2 newMessage-back">
				            <i class="fa fa-arrow-left" aria-hidden="true" onclick="accounttoggleremove()"></i>
				        </div>
				        <div class="col-sm-10 col-xs-10 newMessage-title">
				        My Account
				        </div>
			        </div>
			    </div>
<!--Inside the Accounts-->
        <div class="row compose-sideBar">
         
            <div class="row sideBar-body " onclick="privacytogglebar()" style="height:90px;">
				<div class="col-sm-3 col-xs-3 sideBar-avatar">
					<div class="heading-avatar-icon">
                    <i class="fa fa-user-secret fa-2x" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-sm-9 col-xs-9 sideBar-main">
					<div  style='width:100px'class="col-sm-1 col-xs-1  heading-dot  pull-left">
                         <a style="text-decoration:none;color:black;font-size:16px;">Privacy</a>
					</div>
				</div>
		    </div>

          <div class="row sideBar-body" onclick="securitytogglebar()">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
					<div class="heading-avatar-icon">
				        <i class="fa fa-lock fa-2x" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-sm-9 col-xs-9 sideBar-main ">
					<div  style='width:100px'class="col-sm-1 col-xs-1  heading-dot  pull-left">
					    <a style="text-decoration:none;color:black;font-size:16px;">Security</a>
					</div>
				</div>
          </div>
		  
		  
		  <div class="row sideBar-body" onclick="changenotogglebar()">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
					<div class="heading-avatar-icon">
				       <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-sm-9 col-xs-9 sideBar-main">
					<div  style='width:100px'class="col-sm-1 col-xs-1  heading-dot  pull-left">
					    <a style="text-decoration:none;color:black;font-size:16px;">Change Number</a>
					</div>
				</div>
          </div>
		  
		  <div class="row sideBar-body" onclick='deleteacctogglebar()'>
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
					<div class="heading-avatar-icon">
				        <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-sm-9 col-xs-9 sideBar-main">
					<div  style='width:100px'class="col-sm-1 col-xs-1  heading-dot  pull-left">
					    <a style="text-decoration:none;color:black;font-size:16px;">Delete Account</a>
					</div>
				</div>
          </div>
              </div>
        </div>
	<!-- Account - Privacy-->
	<div class='side-three'id="privacy">	
             <div style="background-color:#048dfe;" class="row newMessage-heading">
			        <div class="row newMessage-main">
				        <div class="col-sm-2 col-xs-2 newMessage-back">
				            <i class="fa fa-arrow-left" aria-hidden="true" onclick='privacytoggleremove()'></i>
				        </div>
				        <div class="col-sm-10 col-xs-10 newMessage-title">
				         Privacy
				        </div>
			        </div>
			    </div>
		    <br><br>
			<div class="box privacy">
				<img src="gif/privacy.gif" style="margin-left:80px;border-radius:50%;" width="50%" height="30%">
                <p style="color: #03a9f4;font-family:Joti One;"><b style="font-size:20px;font-family:Joti One;">Every day, data makes our services work<br>better for you.</b><br><br>That’s why it’s important that we keep it private and safe <br> and put you in control.</p>
                <br><p style="color: #03a9f4;font-family:Joti One;"><b style="font-family:Joti One;font-size:20px;">Data gives you answers to your questions<br> just when you need them.</b><br><br>t’s personal. That’s why we protect your data.</p>

            </div>            
     </div>
         <!--Account - Security -->
    <div class='side-three'id="security">	
			
         <div style="background-color:#048dfe;" class="row newMessage-heading">
			        <div class="row newMessage-main">
				        <div class="col-sm-2 col-xs-2 newMessage-back">
				            <i class="fa fa-arrow-left" aria-hidden="true" onclick='securitytoggleremove()'></i>
				        </div>
				        <div class="col-sm-10 col-xs-10 newMessage-title">
				         Security
				        </div>
			        </div>
			    </div>
		    <br><br>
			
			<div class="box">
            <form method='POST' action=''>
			<input type="hidden" name="Username" value="<?php echo $user_name ?>" >
            <br><br>
                <p style="color: #03a9f4;margin-left:100px;font-family:Joti One;">CHANGING YOUR PASSWORD<br>WILL REFLECT IN YOUR ACCOUNT  </p>
                <br><br>
				<img src="gif/security.gif" style="margin-left:80px;border-radius:50%;"width="50%" height="50%">
                  <br><br> 
                 <div class="profiletext">
						<input type="text" name="curpass" required>
						<label >Current Password</label>
					</div>
				   <div class="profiletext">
						<input type="text" name="newpass" required>
						<label >New Password</label>
					</div>
                    <div class="profiletext">
						<input type="text" name="cpass"  required>
						<label>confirm Password</label>
					</div>
               <br>
                <input type="submit" name="update_password" style="margin-left:150px;" value="CHANGE">
                 </form>
        </div>
            
    </div>

    <!--Account - Change number-->
    <div class='side-three'id="changeno">	
        <div style="background-color:#048dfe;" class="row newMessage-heading">
			        <div class="row newMessage-main">
				        <div class="col-sm-2 col-xs-2 newMessage-back">
				            <i class="fa fa-arrow-left" aria-hidden="true" onclick='changenotoggleremove()'></i>
				        </div>
				        <div class="col-sm-10 col-xs-10 newMessage-title">
				          Change Number
				        </div>
			        </div>
			    </div>
        
		    <br><br>
			
			<div class="box">
            <form method="post" action="">
			<input type="hidden" name="Username" value="<?php echo $user_name?>">
            <br><br>
                <p style="color: #03a9f4;margin-left:20px;font-family:Joti One;">CHANGING YOUR PHONE NUMBER WILL REFLECT IN YOUR ACCOUNT  </p>
                <br><br>
                   <div class="profiletext">
						<input type="text" name="number" value="<?php echo $user_num ?>"  readonly>
					</div>
                    <div class="profiletext">
						<input type="text" name="newnum" required>
						<label style="margin-left:125px;">New Phonenumber</label>
					</div>
                    <div class="profiletext">
						<input type="text" name="password"  required>
						<label style="margin-left:155px;">Password</label>
					</div>
               <br>
                <input type="submit" name="update_number" style="margin-left:150px;" value="CHANGE">
        </form>
    </div>
            
    </div>
	
	<!--Account - delete account-->
	<div class='side-three'id="deleteacc">	
         <div style="background-color:#048dfe;" class="row newMessage-heading">
			        <div class="row newMessage-main">
				        <div class="col-sm-2 col-xs-2 newMessage-back">
				            <i class="fa fa-arrow-left" aria-hidden="true" onclick='deleteacctoggleremove()'></i>
				        </div>
				        <div class="col-sm-10 col-xs-10 newMessage-title">
				           Delete Account
				        </div>
			        </div>
			    </div>
		    <br><br>
			
			<div class="box">
            <form method="POST" action="include/delete.php">
            <br><br>
                <p style="color: #03a9f4;margin-left:20px;font-family:Joti One;">DELETING YOUR ACCOUNT WILL ....<br>DELETE YOUR ACCOUNT FROM DATABASE<br>DELETE YOUR CHAT HISTORY</p>
                <br><br>
                
                    <div class="profiletext">
						<input type="text" name="username"  value="<?php echo $user_name?>"  readonly>
						
					</div>
                    <div class="profiletext">
						<input type="text" name="password"  required>
						<label style="margin-left:155px;">Password</label>
					</div>
               <br>
                <input type="submit" name="delete_account" style="margin-left:150px;" value="DELETE">
        </form>
        </div>
            
    </div>
        <!--Chat page wallpaper-->
		<div class='side-three'id="chat-wallpaper">	
            <div style="background-color:#048dfe;" class="row newMessage-heading">
			        <div class="row newMessage-main">
				        <div class="col-sm-2 col-xs-2 newMessage-back">
				            <i class="fa fa-arrow-left" aria-hidden="true" onclick='chatwalltoggleremove()'></i>
				        </div>
				        <div class="col-sm-10 col-xs-10 newMessage-title">
				         Set Background
				        </div>
			        </div>
			    </div>

				<div class="cont1">
				<a href='chatpage.php?color=fff' ><div class="box1"  onclick="document.getElementById('conversation').style.backgroundColor = '#fff';" ></div></a>
                    
                    <a href='chatpage.php?color=b3ffff' > <div class="box2" onclick="document.getElementById('conversation').style.backgroundColor = '#b3ffff';"></div></a>
                    <a href='chatpage.php?color=e0e0eb' ><div class="box3" onclick="document.getElementById('conversation').style.backgroundColor='#e0e0eb';"></div></a>
				</div>
				<div class="cont2">
                    <a href='chatpage.php?color=f2ccff' ><div class="box4" onclick="document.getElementById('conversation').style.backgroundColor='#f2ccff';"></div></a>
                    <a href='chatpage.php?color=f2f2f2' ><div class="box5" onclick="document.getElementById('conversation').style.backgroundColor='#f2f2f2';"></div></a>
                    <a href='chatpage.php?color=d6d6f5' ><div class="box6"onclick="document.getElementById('conversation').style.backgroundColor='#d6d6f5';"></div>
                    </a>
				</div>
				<div class="cont3">
                    <a href='chatpage.php?color=ffe6f9' ><div class="box7" onclick=" document.getElementById('conversation').style.backgroundColor='#ffe6f9';"></div></a>
                     <a href='chatpage.php?color=ffb3b3' ><div class="box8" onclick="document.getElementById('conversation').style.backgroundColor='#ffb3b3';"></div></a>
                     <a href='chatpage.php?color=98F5B1' ><div class="box9" onclick="document.getElementById('conversation').style.backgroundColor='#98F5B1';"></div></a>
		        </div>
				<div class="cont4">
                    <a href='chatpage.php?color=799fcb' ><div class="box10" onclick=" document.getElementById('conversation').style.backgroundColor='#799fcb';"></div></a>
                     <a href='chatpage.php?color=ecddd0' ><div class="box11" onclick="document.getElementById('conversation').style.backgroundColor='#ecddd0';"></div></a>
                     <a href='chatpage.php?color=f9665e' ><div class="box12" onclick="document.getElementById('conversation').style.backgroundColor='#f9665e';"></div></a>
		        </div>
		</div>
<!--        wallpaper to  change background color-->
        <?php include('include/wallpaper.php') ?>
        
        <!--Contact us-->
	<div class='side-three' id="conus">	
         <div style="background-color:#048dfe;" class="row newMessage-heading">
			        <div class="row newMessage-main">
				        <div class="col-sm-2 col-xs-2 newMessage-back">
				            <i class="fa fa-arrow-left" aria-hidden="true" onclick='contacttoggleremove()'></i>
				        </div>
				        <div class="col-sm-10 col-xs-10 newMessage-title">
				         ContactUs
				        </div>
			        </div>
			    </div>
		    <br><br>
			
			<div class="contact-form">
            <form method="POST" action="" >
            <br><br>
                <h2>we are ready to help you</h2>
                <br><br>        
                 <input type="hidden" name="from" value="<?php echo $user_name ?>" >
                
                <textarea name="message" rows="5" placeholder="DESCRIBE YOUR PROBLEM HERE" required onkeypress="growarea(this);" onkeyup="growarea(this);"></textarea> 
                
                <input type="submit"  class="send" value="Send" name="SendMail">    
                
                
            </form>
            </div>
        <script>
     function growarea(element){
         element.style.height="5px";
         element.style.height=(element.scrollHeight)+"px";
     }
    </script>
            
    </div>
        <?php include('mailer.php'); ?>
       
   
</div>
<!--      ride side bar -->

    <div class="col-sm-8 conversation" id='right-side'>
<!--        heading-->
     
        <?php include('include/get_clicked_user.php') ?>
     
<!--        chat page -->   
<?php
if (isset ($_GET['user_name'])) { ?>
               
      
      <div class="row message" id="conversation" >
        <div class="row message-previous">
          <div class="col-sm-12 previous">
            <a id="ankitjain28" name="20">
            Show Previous Message!
            </a>
          </div>
        </div>  
               
         <?php 
    $read_up=mysqli_query($con,"UPDATE users_chat SET Msg_status='read' WHERE Sender_username='$clicked_name'
    AND Receiver_username='$user_name'");
 $all_mes="SELECT * FROM users_chat WHERE (Sender_username='$clicked_name' AND Receiver_username='$user_name') OR 
 (Sender_username ='$user_name' AND Receiver_username ='$clicked_name') ORDER BY 1 ASC";
//        $all_mes='select * from users_chat ';
    $all_result=mysqli_query($con,$all_mes);
    while($rows=mysqli_fetch_assoc($all_result))
    {
        
    $sender_name=$rows['Sender_username'];
    $receiver_name=$rows['Receiver_username'];
    $msg_content=$rows['Msg_content'];
    $msg_date=$rows['Msg_date'];
              
        
        if($user_name == $sender_name && $clicked_name== $receiver_name)
        {
        
    ?>
           <div  class="row message-body">
          <div class="col-sm-12 message-main-sender">
            <div  style='background-color:#048dfe; 'class="sender">
              <div style='color:white;' class="message-text">
               <?php  echo $msg_content ?>
              </div>
              <span style='color:white;'  class="message-time pull-right">
                 <?php  echo $msg_date ?>
              </span>
            </div>
          </div>
        </div>
<?php } 
             if($user_name == $receiver_name && $clicked_name== $sender_name )
        {
          ?>
        <div class="row message-body">
          <div class="col-sm-12 message-main-receiver">
            <div class="receiver">
              <div  class="message-text">
              <?php  echo $msg_content ?>
              </div>
              <span class="message-time pull-right">
                 <?php  echo $msg_date ?>
              </span>
            </div>
          </div>
        </div>
          
       
           <?php } } ?>
        </div>
        
<!--        right-side emoji panel-->
        
                   <div class="row emoji" id="emoji" style="display:none;">
                       
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item">
							<a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Smiley</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link active" id="shape-tab" data-toggle="tab" href="#shape" role="tab" aria-controls="shape" aria-selected="true">Shapes</a>
						  </li>
						</ul>
                       
						<div class="tab-content " id="myTabContent">
						  <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
						    <a onclick="getEmoji(this)">&#128512;</a>
						    <a onclick="getEmoji(this)">&#128513;</a>
						    <a onclick="getEmoji(this)">&#128514;</a>
						    <a onclick="getEmoji(this)">&#128515;</a>
						    <a onclick="getEmoji(this)">&#128516;</a>
						    <a onclick="getEmoji(this)">&#128517;</a>
						    <a onclick="getEmoji(this)">&#128518;</a>
						    <a onclick="getEmoji(this)">&#128519;</a>
						    <a onclick="getEmoji(this)">&#128520;</a>
						    <a onclick="getEmoji(this)">&#128521;</a>
						    <a onclick="getEmoji(this)">&#128522;</a>
						    <a onclick="getEmoji(this)">&#128523;</a>
						    <a onclick="getEmoji(this)">&#128524;</a>
						    <a onclick="getEmoji(this)">&#128525;</a>
						    <a onclick="getEmoji(this)">&#128526;</a>
						    <a onclick="getEmoji(this)">&#128527;</a>
						    <a onclick="getEmoji(this)">&#128528;</a>
						    <a onclick="getEmoji(this)">&#128529;</a>
						    <a onclick="getEmoji(this)">&#128530;</a>
						    <a onclick="getEmoji(this)">&#128531;</a>
						    <a onclick="getEmoji(this)">&#128532;</a>
						    <a onclick="getEmoji(this)">&#128533;</a>
						    <a onclick="getEmoji(this)">&#128534;</a>
						    <a onclick="getEmoji(this)">&#128535;</a>
						    <a onclick="getEmoji(this)">&#128536;</a>
						    <a onclick="getEmoji(this)">&#128537;</a>
						    <a onclick="getEmoji(this)">&#128538;</a>
						    <a onclick="getEmoji(this)">&#128539;</a>
						    <a onclick="getEmoji(this)">&#128540;</a>
						    <a onclick="getEmoji(this)">&#128541;</a>
						    <a onclick="getEmoji(this)">&#128542;</a>
						    <a onclick="getEmoji(this)">&#128543;</a>
						    <a onclick="getEmoji(this)">&#128544;</a>
						    <a onclick="getEmoji(this)">&#128545;</a>
						    <a onclick="getEmoji(this)">&#128546;</a>
						    <a onclick="getEmoji(this)">&#128547;</a>
						    <a onclick="getEmoji(this)">&#128548;</a>
						    <a onclick="getEmoji(this)">&#128549;</a>
						    <a onclick="getEmoji(this)">&#128550;</a>
						    <a onclick="getEmoji(this)">&#128551;</a>
						    <a onclick="getEmoji(this)">&#128552;</a>
						    <a onclick="getEmoji(this)">&#128553;</a>
						    <a onclick="getEmoji(this)">&#128554;</a>
						    <a onclick="getEmoji(this)">&#128555;</a>
						    <a onclick="getEmoji(this)">&#128556;</a>
						    <a onclick="getEmoji(this)">&#128557;</a>
						    <a onclick="getEmoji(this)">&#128558;</a>
						    <a onclick="getEmoji(this)">&#128559;</a>
						    <a onclick="getEmoji(this)">&#128560;</a>
						    <a onclick="getEmoji(this)">&#128561;</a>
						    <a onclick="getEmoji(this)">&#128562;</a>
						    <a onclick="getEmoji(this)">&#128563;</a>
						    <a onclick="getEmoji(this)">&#128564;</a>
						    <a onclick="getEmoji(this)">&#128565;</a>
						    <a onclick="getEmoji(this)">&#128566;</a>
						    <a onclick="getEmoji(this)">&#128567;</a>
						    <a onclick="getEmoji(this)">&#128568;</a>
						    <a onclick="getEmoji(this)">&#128569;</a>
						    <a onclick="getEmoji(this)">&#128570;</a>
						    <a onclick="getEmoji(this)">&#128571;</a>
						    <a onclick="getEmoji(this)">&#128572;</a>
						    <a onclick="getEmoji(this)">&#128573;</a>
						    <a onclick="getEmoji(this)">&#128574;</a>
						    <a onclick="getEmoji(this)">&#128575;</a>
						    <a onclick="getEmoji(this)">&#128576;</a>
						    <a onclick="getEmoji(this)">&#128581;</a>
						    <a onclick="getEmoji(this)">&#128582;</a>
						    <a onclick="getEmoji(this)">&#128583;</a>
							
						    <a onclick="getEmoji(this)">&#128584;</a>
						    <a onclick="getEmoji(this)">&#128585;</a>
						    <a onclick="getEmoji(this)">&#128586;</a>
						    <a onclick="getEmoji(this)">&#128587;</a>
						    <a onclick="getEmoji(this)">&#128588;</a>
						    <a onclick="getEmoji(this)">&#128589;</a>
						    <a onclick="getEmoji(this)">&#128590;</a>
						    <a onclick="getEmoji(this)">&#128591;</a>
						    <a onclick="getEmoji(this)">&#128640;</a>
						    <a onclick="getEmoji(this)">&#128641;</a>
							
						    <a onclick="getEmoji(this)">&#128110;</a>
						    <a onclick="getEmoji(this)">&#128111;</a>
						    <a onclick="getEmoji(this)">&#128112;</a>
						    <a onclick="getEmoji(this)">&#128113;</a>
						    <a onclick="getEmoji(this)">&#128114;</a>
						    <a onclick="getEmoji(this)">&#128115;</a>
						    <a onclick="getEmoji(this)">&#128116;</a>
						    <a onclick="getEmoji(this)">&#128117;</a>
						    <a onclick="getEmoji(this)">&#128118;</a>
						    <a onclick="getEmoji(this)">&#128119;</a>
						    <a onclick="getEmoji(this)">&#128120;</a>
						    <a onclick="getEmoji(this)">&#128070;</a>
						    <a onclick="getEmoji(this)">&#128071;</a>
						    <a onclick="getEmoji(this)">&#128072;</a>
						    <a onclick="getEmoji(this)">&#128073;</a>
						    <a onclick="getEmoji(this)">&#128074;</a>
						    <a onclick="getEmoji(this)">&#128075;</a>
						    <a onclick="getEmoji(this)">&#128076;</a>
						    <a onclick="getEmoji(this)">&#128077;</a>
						    <a onclick="getEmoji(this)">&#128078;</a>
						    <a onclick="getEmoji(this)">&#128079;</a>
						    <a onclick="getEmoji(this)">&#128080;</a>
						    <a onclick="getEmoji(this)">&#128147;</a>
						    <a onclick="getEmoji(this)">&#128148;</a>
						    <a onclick="getEmoji(this)">&#128149;</a>
						    <a onclick="getEmoji(this)">&#128150;</a>
						    <a onclick="getEmoji(this)">&#128151;</a>
						    <a onclick="getEmoji(this)">&#128152;</a>
						    <a onclick="getEmoji(this)">&#128153;</a>
						    <a onclick="getEmoji(this)">&#128154;</a>
						    <a onclick="getEmoji(this)">&#128155;</a>
						    <a onclick="getEmoji(this)">&#128156;</a>
						    <a onclick="getEmoji(this)">&#128157;</a>
						    <a onclick="getEmoji(this)">&#128158;</a>
						    <a onclick="getEmoji(this)">&#128159;</a>
						    <a onclick="getEmoji(this)">&#128160;</a>
						    <a onclick="getEmoji(this)">&#128161;</a>
						    <a onclick="getEmoji(this)">&#128162;</a>

	
						  </div>
						  <div class="tab-pane fade  show active" id="shape" role="tabpanel" aria-labelledby="shape-tab">
						    <a onclick="getEmoji(this)">&#9875;</a>
						    <a onclick="getEmoji(this)">&#9889;</a>
						    <a onclick="getEmoji(this)">&#9917;</a>
						    <a onclick="getEmoji(this)">&#9918;</a>
						    <a onclick="getEmoji(this)">&#9924;</a>
						    <a onclick="getEmoji(this)">&#9925;</a>
						    <a onclick="getEmoji(this)">&#9935;</a>
						    <a onclick="getEmoji(this)">&#9970;</a>
						    <a onclick="getEmoji(this)">&#9971;</a>
						    <a onclick="getEmoji(this)">&#9972;</a>
						    <a onclick="getEmoji(this)">&#9973;</a>
						    <a onclick="getEmoji(this)">&#9974;</a>
						    <a onclick="getEmoji(this)">&#9975;</a>
						    <a onclick="getEmoji(this)">&#9976;</a>
						    <a onclick="getEmoji(this)">&#9977;</a>
						    <a onclick="getEmoji(this)">&#9981;</a>
						    <a onclick="getEmoji(this)">&#9986;</a>
						    <a onclick="getEmoji(this)">&#9992;</a>
						    <a onclick="getEmoji(this)">&#9993;</a>
						    <a onclick="getEmoji(this)">&#9994;</a>
						    <a onclick="getEmoji(this)">&#9995;</a>
						    <a onclick="getEmoji(this)">&#9996;</a>
						    <a onclick="getEmoji(this)">&#9997;</a>
						    <a onclick="getEmoji(this)">&#10084;</a>
						    <a onclick="getEmoji(this)">&#10133;</a>
						    <a onclick="getEmoji(this)">&#10134;</a>
						    <a onclick="getEmoji(this)">&#10135;</a>
						    <a onclick="getEmoji(this)">&#127757;</a>
						    <a onclick="getEmoji(this)">&#127758;</a>
						    <a onclick="getEmoji(this)">&#127759;</a>
						    <a onclick="getEmoji(this)">&#127760;</a>
						    <a onclick="getEmoji(this)">&#127761;</a>
						    <a onclick="getEmoji(this)">&#127762;</a>
						    <a onclick="getEmoji(this)">&#127763;</a>
						    <a onclick="getEmoji(this)">&#127764;</a>
						    <a onclick="getEmoji(this)">&#127765;</a>
						    <a onclick="getEmoji(this)">&#127766;</a>
						    <a onclick="getEmoji(this)">&#127767;</a>
						    <a onclick="getEmoji(this)">&#127768;</a>
						    <a onclick="getEmoji(this)">&#127769;</a>
						    <a onclick="getEmoji(this)">&#127770;</a>
						    <a onclick="getEmoji(this)">&#127771;</a>
						    <a onclick="getEmoji(this)">&#127772;</a>
						    <a onclick="getEmoji(this)">&#127773;</a>
						    <a onclick="getEmoji(this)">&#127774;</a>
						    <a onclick="getEmoji(this)">&#127775;</a>
						    <a onclick="getEmoji(this)">&#127776;</a>
						    <a onclick="getEmoji(this)">&#127793;</a>
						    <a onclick="getEmoji(this)">&#127794;</a>
						    <a onclick="getEmoji(this)">&#127795;</a>
						    <a onclick="getEmoji(this)">&#127796;</a>
						    <a onclick="getEmoji(this)">&#127797;</a>
						    <a onclick="getEmoji(this)">&#127798;</a>
						    <a onclick="getEmoji(this)">&#127799;</a>
						    <a onclick="getEmoji(this)">&#127800;</a>
						    <a onclick="getEmoji(this)">&#127801;</a>
						    <a onclick="getEmoji(this)">&#127802;</a>
						    <a onclick="getEmoji(this)">&#127803;</a>
						    <a onclick="getEmoji(this)">&#127804;</a>
						    <a onclick="getEmoji(this)">&#127805;</a>
						    <a onclick="getEmoji(this)">&#127806;</a>
						    <a onclick="getEmoji(this)">&#127807;</a>
						    <a onclick="getEmoji(this)">&#127808;</a>
						    <a onclick="getEmoji(this)">&#127809;</a>
						    <a onclick="getEmoji(this)">&#127810;</a>
						    <a onclick="getEmoji(this)">&#127811;</a>
						    <a onclick="getEmoji(this)">&#127812;</a>
						    <a onclick="getEmoji(this)">&#127813;</a>
						    <a onclick="getEmoji(this)">&#127814;</a>
						    <a onclick="getEmoji(this)">&#127815;</a>
						    <a onclick="getEmoji(this)">&#127816;</a>
						    <a onclick="getEmoji(this)">&#127817;</a>
						    <a onclick="getEmoji(this)">&#127818;</a>
						    <a onclick="getEmoji(this)">&#127819;</a>
						    <a onclick="getEmoji(this)">&#127820;</a>
						    <a onclick="getEmoji(this)">&#127821;</a>
						    <a onclick="getEmoji(this)">&#127822;</a>
						    <a onclick="getEmoji(this)">&#127823;</a>
						    <a onclick="getEmoji(this)">&#127824;</a>
						    <a onclick="getEmoji(this)">&#127825;</a>
						    <a onclick="getEmoji(this)">&#127826;</a>
						    <a onclick="getEmoji(this)">&#127827;</a>
						    <a onclick="getEmoji(this)">&#127828;</a>
						    <a onclick="getEmoji(this)">&#127829;</a>
						    <a onclick="getEmoji(this)">&#127921;</a>
						    <a onclick="getEmoji(this)">&#127922;</a>
						    <a onclick="getEmoji(this)">&#127923;</a>
						    <a onclick="getEmoji(this)">&#127924;</a>
						    <a onclick="getEmoji(this)">&#127925;</a>
						    <a onclick="getEmoji(this)">&#127926;</a>
						    <a onclick="getEmoji(this)">&#127927;</a>
						    <a onclick="getEmoji(this)">&#127928;</a>
						    <a onclick="getEmoji(this)">&#127929;</a>
						    <a onclick="getEmoji(this)">&#127930;</a>
						    <a onclick="getEmoji(this)">&#127931;</a>
						    <a onclick="getEmoji(this)">&#127933;</a>
						    <a onclick="getEmoji(this)">&#127934;</a>
						    <a onclick="getEmoji(this)">&#127935;</a>
						    <a onclick="getEmoji(this)">&#127936;</a>
						    <a onclick="getEmoji(this)">&#127937;</a>
						    <a onclick="getEmoji(this)">&#127938;</a>
						    <a onclick="getEmoji(this)">&#127939;</a>
						    <a onclick="getEmoji(this)">&#127940;</a>
						    <a onclick="getEmoji(this)">&#127942;</a>
						    <a onclick="getEmoji(this)">&#127944;</a>
						    <a onclick="getEmoji(this)">&#127945;</a>
						    <a onclick="getEmoji(this)">&#127946;</a>
						    <a onclick="getEmoji(this)">&#128001;</a>
						    <a onclick="getEmoji(this)">&#128002;</a>
						    <a onclick="getEmoji(this)">&#128003;</a>
						    <a onclick="getEmoji(this)">&#128004;</a>
						    <a onclick="getEmoji(this)">&#128005;</a>
						    <a onclick="getEmoji(this)">&#128013;</a>
						    <a onclick="getEmoji(this)">&#128014;</a>
						    <a onclick="getEmoji(this)">&#128015;</a>
						    <a onclick="getEmoji(this)">&#128016;</a>
						    <a onclick="getEmoji(this)">&#128017;</a>
						    <a onclick="getEmoji(this)">&#128018;</a>
						    <a onclick="getEmoji(this)">&#128019;</a>
						    <a onclick="getEmoji(this)">&#128147;</a>
						    <a onclick="getEmoji(this)">&#128148;</a>
						    <a onclick="getEmoji(this)">&#128149;</a>
						    <a onclick="getEmoji(this)">&#128150;</a>
						    <a onclick="getEmoji(this)">&#128151;</a>
						    <a onclick="getEmoji(this)">&#128152;</a>
						    <a onclick="getEmoji(this)">&#128153;</a>
						    <a onclick="getEmoji(this)">&#128154;</a>
						    <a onclick="getEmoji(this)">&#128155;</a>
						    <a onclick="getEmoji(this)">&#128156;</a>
						    <a onclick="getEmoji(this)">&#128157;</a>
						  </div>
						
						</div>
            </div>
        <!--        keyboard - message-->
      <div style='background-color:#048dfe'class="row reply">
        <form action="" method="POST" >
          
            <div class="col-sm-1 col-xs-1 reply-emojis" style="cursor:pointer;">
                <i style="color:white" class="fa fa-smile-o fa-2x" onclick="showEmojiPanel()" ondblclick="hideEmojiPanel()"></i>
            </div>
            <div class="col-sm-9 col-xs-9 reply-main">
                <textarea name="message" onfocus="hideEmojiPanel()" id="textmsg" id="comment" placeholder="Write Your Message Here...," ></textarea>
            </div>
            <div class="col-sm-1 col-xs-1 reply-recording">
                <i  style="color:white" class="fa fa-microphone fa-2x" aria-hidden="true"></i>
            </div>
            <div class="col-sm-1 col-xs-1 reply-send">
                <button style='background-color:#048dfe;border:none;outline:none;'  name="send" > <i style="color:white" class="fa fa-send fa-2x" aria-hidden="true"></i></button>
            </div>
        </form>
      </div>
        <?php include('include/send.php') ?>

    </div>

              
<!--        right info-->
        
        <div class='right-side-one 'id="clickedprofile">
			<div style="background-color:#048dfe;" class="row newMessage-heading">
			        <div class="row newMessage-main">
				        <div class="col-sm-10 col-xs-10 newMessage-title">
				         Profile
				        </div>
                         <div class="col-sm-2 col-xs-2 newMessage-back" style="right:60%">
				            <i class="fa fa-arrow-right" aria-hidden="true" onclick='togglerightremove()'></i>
				        </div>
			        </div>
			    </div><br><br>
			<form>
                <div class="profileimage">			
					<img src="<?php echo $clicked_profile ?>" align="center"width="150px" height="150px" ><br><br>
    			</div>
				<div class="box">
					<div class="profiletext">
						<input type="text" style="margin-left:50px;" name="username" value="<?php echo $clicked_name?>" readonly>
					</div>
					<div class="profiletext">
						<input type="text"style="margin-left:50px;" name="email" value="<?php echo $clicked_email?>" readonly>
					</div>
					<div class="profiletext">
						<input type="text"style="margin-left:50px;" name="country"  value="<?php echo $clicked_country?>" readonly>
					</div>
					<div class="profiletext">
						<input type="text"style="margin-left:50px;" name="gender" value="<?php echo $clicked_gender?>" readonly>
					</div><br>
                </div>
			</form>
     </div>
     <?php  }?>
     
  </div>
</div>


<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="javascripts.js"></script>
<script type="text/javascript">
	$(function(){
    $(".heading-compose").click(function() {
      $(".side-two").css({
        "left": "0"
      });
    });

    $(".newMessage-back").click(function() {
      $(".side-two").css({
        "left": "-100%"
      });
    });
})
    
//scrolling bottom 
window.onload=scrollBottom;
function scrollBottom()
{
     var element = document.getElementById('conversation');
     element.scrollTop = element.scrollHeight - element.clientHeight;
  
}
//    refreshing page on every 5 sec
    
//    $(document).ready(function() {
//        // Call refresh page function after 5000 milliseconds (or 5 seconds).
//        setInterval('refreshPage()', 5000);
//    });
//
//    function refreshPage() { 
//        location.reload(); 
//    }
    
    
//script to refresh particular div

//
//    $(document).ready(function(){
//    setInterval(function(){
//    $("#conversation").load('user_name=girl')
//    }, 2000);
//    });
</script>
</body>
</html>