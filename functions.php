<?php

	if ($_POST['action'] == 'contactForm'){

		/// ... execute the contactFormSubmit function

		contactFormSubmit();
   }

	function contactFormSubmit() {
		// my variables
		$contactName = $_POST["theName"];
		$contactEmail = $_POST["theEmail"];
		$contactMsg = $_POST["theMessage"];

		// my settings
		$to = 'stevequatrale@gmail.com';
		$subject = "You've got mail o_O";

		$emailMessage = "<p style='font-family:Verdana; font-size:12px;'>Hey Steve, <br/><br/>You've received a new message from your website's contact form! <br/><br/>";
		$emailMessage .= "Name: $contactName<br/>";
		$emailMessage .= "Email: $contactEmail<br/>";
		$emailMessage .= "Message: $contactMsg </p>";


		$headers = 'From: noreply@stevequatrale.com' . "\r\n";
		// To send HTML mail, the Content-type header must be set
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		mail($to, $subject, $emailMessage, $headers);

	}
	
