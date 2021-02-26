<?php 

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$visitor_email=$_POST['email'];
	$message=$_POST['message'];
	$subject=$_POST['subject'];
	$to_name="bhoomika";
	 $From = "From: ".$name." <bhoomikabhoomi147@gmail.com>";
    $To = "Sameksha2003@gmail.com";
	

		echo $To." ".$name." ";
	

 $recipients = "Sameksha2003@gmail.com";
    $headers["From"] = $From;
    
    
    
    $smtpinfo["host"] = "smtp.gmail.com";
    $smtpinfo["port"] = "465";
    $smtpinfo["auth"] = true;
    $smtpinfo["username"] = "bhoomikabhoomi147@gmail.com";
    $smtpinfo["password"] = "bhoomika1510bhoomi";

     if(mail($To,$subject,$message,$headers))
		 echo "done";
	 else
		 echo "no mail";
}

else
	
	{
		echo "not done";
	}
	
?>


