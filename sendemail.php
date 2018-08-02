<?php


 
if(isset($_POST['register'])){
	 
	$name=$_POST['name']; 
	$phone=$_POST['PhoneNumber']; 
	$mail=$_POST['email']; 
	$zip=$_POST['zipcode']; 
	$invitation=$_POST['invitationcode']; 
	$psw=$_POST['password']; 
	
	
	$to='membership@flurcannabis.com';
	$subject='Form Submission';
	$message="Name: ".$name."\n"."Phone Number: ".$phone."\n"."Email: ".$mail."\n"."Zip Code: ".$zip."\n"."Invitetion Code".$invitation;
	$headers ="From: ".$mail;
	
	if(mail($to,$subject,$message,$headers))
	{
		$Message = urlencode("<h1>Sent Successfully! Thank you"." ".$name.",for submit your request for membership. A flur Curtor will be in touch with you shortly!</h1>");
		 header('Location:register.php?Message='.$Message); 
		   exit;
		
 }
 else
 {
	 $Message = urlencode("Something went wrong");
		header('Location:register.php?Message='.$Message); 
 }
 
}

?>