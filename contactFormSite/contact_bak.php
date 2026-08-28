<?php

// Set email variables
$email_to = 'info@language-landscapes.com';
$email_subject = 'Translator application';

// Set required fields
$required_fields = array('forename','surname','email','comment');

// set error messages
$error_messages = array(
	'forename' => 'Please enter a your first name to continue.',
	'surname' => 'Please enter a your family name to continue.',
	'email' => 'Please enter a valid e-mail Address to continue.',
	'comment' => 'Please enter your Message to continue.'
);

// Set form status
$form_complete = FALSE;

// configure validation array
$validation = array();

// check form submittal
if(!empty($_POST)) {
	// Sanitise POST array
	foreach($_POST as $key => $value) $_POST[$key] = remove_email_injection(trim($value));
	
	// Loop into required fields and make sure they match our needs
	foreach($required_fields as $field) {		
		// the field has been submitted?
		if(!array_key_exists($field, $_POST)) array_push($validation, $field);
		
		// check there is information in the field?
		if($_POST[$field] == '') array_push($validation, $field);
		
		// validate the email address supplied
		if($field == 'email') if(!validate_email_address($_POST[$field])) array_push($validation, $field);
	}
	
	// basic validation result
	if(count($validation) == 0) {
		// Prepare our content string
		$email_content = 'New Website Comment: ' . "\n\n";
		
		// simple email content
		foreach($_POST as $key => $value) {
			if($key != 'submit') $email_content .= $key . ': ' . $value . "\n";
		}
		
		// if validation passed ok then send the email
		mail($email_to, $email_subject, $email_content);
		
		// Update form switch
		$form_complete = TRUE;
	}
}

function validate_email_address($email = FALSE) {
	return (preg_match('/^[^@\s]+@([-a-z0-9]+\.)+[a-z]{2,}$/i', $email))? TRUE : FALSE;
}

function remove_email_injection($field = FALSE) {
   return (str_ireplace(array("\r", "\n", "%0a", "%0d", "Content-Type:", "bcc:","to:","cc:"), '', $field));
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<!-- Contact Form Designed by James Brand @ dreamweavertutorial.co.uk -->
<!-- Covered under creative commons license - http://dreamweavertutorial.co.uk/permissions/contact-form-permissions.htm -->

	<title>Contact Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link href="contact/css/contactform.css" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">
		var nameError = '<?php echo $error_messages['forename']; ?>';
		var nameError = '<?php echo $error_messages['surname']; ?>';
		var emailError = '<?php echo $error_messages['email']; ?>';
		var commentError = '<?php echo $error_messages['comment']; ?>';
	</script>
    
</head>

<body>

<div id="formWrap">
	<div id="form">
    <?php if($form_complete === FALSE): ?>
    	<form action="contact.php" method="post" id="comments_form">
    	<div class="row">
        	<div class="label">First name</div><!-- end of label -->
            <div class="input">
            	<input type="text" id="forename" class="detail" name="forename" value="<?php echo isset($_POST['forename'])? $_POST['forename'] : ''; ?>" /><?php if(in_array('forename', $validation)): ?><span class="error"><?php echo $error_messages['forename']; ?></span><?php endif; ?>
            </div><!-- end of input -->
            <div class="context">
            </div><!-- end of context -->
    	</div><!-- end of row -->
        
    	<div class="row">
        	<div class="label">Last name</div><!-- end of label -->
            <div class="input">
            	<input type="text" id="surname" class="detail" name="surname" value="<?php echo isset($_POST['surname'])? $_POST['surname'] : ''; ?>" /><?php if(in_array('surname', $validation)): ?><span class="error"><?php echo $error_messages['surname']; ?></span><?php endif; ?>
            </div><!-- end of input -->
            <div class="context">
            </div><!-- end of context -->
    	</div><!-- end of row -->
        
    	<div class="row">
        	<div class="label">e-mail address</div><!-- end of label -->
            <div class="input">
            	<input type="text" id="email" class="detail" name="email" value="<?php echo isset($_POST['email'])? $_POST['email'] : ''; ?>" /><?php if(in_array('email', $validation)): ?><span class="error"><?php echo $error_messages['email']; ?></span><?php endif; ?>
            </div><!-- end of input -->
            <div class="context">We will not share the address you type here nor will we spam you at it.
            </div><!-- end of context -->
    	</div><!-- end of row -->
    	
        <div class="row">
        	<div class="label">Message</div><!-- end of label -->
            <div class="input">
            	<textarea id="comment" name="comment" class="mess"><?php echo isset($_POST['comment'])? $_POST['comment'] : ''; ?></textarea><?php if(in_array('comment', $validation)): ?><span class="error"><?php echo $error_messages['comment']; ?></span><?php endif; ?>
                
                
            </div><!-- end of input -->
    	</div><!-- end of row -->
        <div class="submit">
        	<input type="submit" id="submit" name="submit" value="Send message" />
        </div><!-- end of submit --> 
        </form>
        <?php else: ?>
			<p>Thank you for your Message!</p>
		<?php endif; ?>
		
	</div><!-- end of form -->
   
</div><!-- end of formWrap -->
</body>
</html>
