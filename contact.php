<?php

	if(isset($_POST['send']))
	{
		$recipient   = "tawiahfrancis13@gmail.com";
		$subject     = $_POST['subject'];
		$sender      = $_POST["name"];
		$senderEmail = $_POST['email'];
		$message     = $_POST['message'];

		$mailBody  = "Name: $sender\nEmail:$senderEmail\n\n$message";

		$send_mail = mail($recipient, $subject, $mailBody, "From:$sender <$senderEmail>");

		if($send_mail)
		{
			echo "<script>alert(Thank you! Your message has been sent.)</script>";	
			echo "<script>document.location='index.html'</script>";
		}
		
	}


?>