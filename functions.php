<?php

	// Our custom post type function
	function create_posttype() {

		register_post_type( 'portfolio',
		// CPT Options
			array(
				'labels' => array(
					'name' => __( 'Portfolio' ),
					'singular_name' => __( 'Portfolio' )
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'portfolio'),
			)
		);
	}
	// Hooking up our function to theme setup
	add_action( 'init', 'create_posttype' );

	add_action('wp_ajax_contactForm', 'contactFormSubmit');
	add_action('wp_ajax_nopriv_contactForm', 'contactFormSubmit');

	function contactFormSubmit() {
		// my variables
		$contactData = $_POST['data'];
		$contactName = $contactData['name'];
		$contactEmail = $contactData["email"];
		$contactMsg = $contactData["message"];
		// my settings
		$to = 'stevequatrale@gmail.com';
		$subject = "You've got mail o_O";
		$emailMessage = "<p style='font-family:Verdana; font-size:12px;'>Hey Steve, <br/><br/>You've received a new message from your website's contact form! <br/><br/>";
		$emailMessage .= "Name: $contactName<br/>";
		$emailMessage .= "Email: $contactEmail<br/>";
		$emailMessage .= "Message: $contactMsg </p>";
		$headers = 'From: stevequatrale@gmail.com' . "\r\n";
		// To send HTML mail, the Content-type header must be set
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		wp_mail($to, $subject, $emailMessage, $headers);


		exit(1);
	}
