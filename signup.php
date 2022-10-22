<?php 

	/* Template Name: signup */

    // Post values
    $email = sanitize_email($_POST['email']);
    $fn = sanitize_text_field($_POST['fn']);
    $ln = sanitize_text_field($_POST['ln']);

    $error = '';

    if(empty($email)) {
       $error = 'email is required';
    }

    if(empty($fn)) {
       $error = 'first name is required';
    }

    if(empty($ln)) {
       $error = 'last name is required';
    }

    if(empty($error)) {
        // get the blog administrator's email address
        $emailTo = get_option('tz_email');
    	
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}

        $subject = 'New user subscription';
        //$headers = 'From: '.$fn.' <'.$to.'>' . "\r\n" . 'Reply-To: ' . $email;

        $message = "First Name: $fn \n\nLast Name: $ln \n\nEmail: $email \n\nSubject: $subject";
		$headers = 'From: '.$fn.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

        // If email has been process for sending, display a success message
        if(wp_mail($email, $subject, $message, $headers)) {
        	echo json_encode(array('signup'=>true, 'message'=>__('Thanks for contacting us, expect a response soon')));
		} else {
			echo json_encode(array('signup'=>false, 'message'=>__('Sign up error, please try again')));
		}
	} else {
		echo json_encode(array('signup'=>false, 'message'=>__($error)));
	}

?>