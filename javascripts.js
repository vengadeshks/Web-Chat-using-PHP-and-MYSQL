
//settinngs 
function profiletogglebar(){
         document.getElementById("profile").classList.toggle('active');
     }
	 function profiletoggleremove(){
         document.getElementById("profile").classList.remove('active');
     }

//change picture
function uploadprofile(){
		document.getElementById('upload').click();
	}
		 
	 function accounttogglebar(){
         document.getElementById("acc").classList.toggle('active');
     }
	 function accounttoggleremove(){
         document.getElementById("acc").classList.remove('active');
     }
    
     function chatwalltogglebar(){
         document.getElementById("chat-wallpaper").classList.toggle('active');
     }
	 function chatwalltoggleremove(){
         document.getElementById("chat-wallpaper").classList.remove('active');
     }
     function contacttogglebar(){
         document.getElementById("conus").classList.toggle('active');
     }
	 function contacttoggleremove(){
         document.getElementById("conus").classList.remove('active');
     }

//account settings
	 function privacytogglebar(){
         document.getElementById("privacy").classList.toggle('active');
     }
	 function privacytoggleremove(){
         document.getElementById("privacy").classList.remove('active');
     }
     function securitytogglebar(){
         document.getElementById("security").classList.toggle('active');
     }
	 function securitytoggleremove(){
         document.getElementById("security").classList.remove('active');
     }
	 
	 function changenotogglebar(){
         document.getElementById("changeno").classList.toggle('active');
     }
	 function changenotoggleremove(){
         document.getElementById("changeno").classList.remove('active');
     }
	 function deleteacctogglebar(){
         document.getElementById("deleteacc").classList.toggle('active');
     }
	 function deleteacctoggleremove(){
         document.getElementById("deleteacc").classList.remove('active');
     }
	
//right side
	function toggleright(){
         document.getElementById("clickedprofile").classList.toggle('active');
         document.getElementById("right-side").classList.toggle('active');
     } 
	 
    function togglerightremove(){
         document.getElementById("clickedprofile").classList.remove('active');
         document.getElementById("right-side").classList.remove('active');
     }
    
//dropdown boxes
     function showDropdown() {
                    document.getElementById("my1Dropdown").classList.toggle("show");
       
                }

    function showDropdown1() {
                    document.getElementById("my2Dropdown").classList.toggle("show");
       
                }

//emoji js

function showEmojiPanel(){
		document.getElementById('emoji').removeAttribute("style"); 
	}
	function hideEmojiPanel(){
		document.getElementById('emoji').setAttribute('style','display:none');
	}
	function getEmoji(control){
		document.getElementById('textmsg').value += control.textContent;
		console.log(control);
	}