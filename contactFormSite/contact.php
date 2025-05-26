<?php

// Set email variables
$headers= "From: info@lang-land.com\r\n";
$email_to = 'info@lang-land.com';
$email_subject = 'Translator application';

// Set required fields
$required_fields = array('forename',"surname",'email','bodytext');

// set error messages
$error_messages = array(
	'forename' => 'Please enter your first name.',
	'surname' => 'Please enter your last name.',
	'email' => 'Please enter a valid e-mail address to continue.',
	'bodytext' => 'Please enter your message text to continue.'
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
		$email_content = 'New application from linguist: ' . "\n\n";
		
		// simple email content
		foreach($_POST as $key => $value) {
			if($key != 'submit') $email_content .= $key . ': ' . $value . "\n";
		}
		var_dump($email_content);
		// if validation passed ok then send the email
		mail($email_to, $email_subject, $email_content, $headers, "-finfo@language-landscapes.com");

		
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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/mootools/1.3.0/mootools-yui-compressed.js"></script>
	
	<script type="text/javascript" src="contact/validation/validation.js"></script>

	
	<script type="text/javascript">
		var forenameError = '<?php echo $error_messages['forename']; ?>';
		var surnameError = '<?php echo $error_messages['surname']; ?>';
		var emailError = '<?php echo $error_messages['email']; ?>';
		var bodytextError = '<?php echo $error_messages['bodytext']; ?>';
		function MM_preloadImages() { //v3.0
  		var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    	var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    	if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
    </script>

</head>

<body onload="MM_preloadImages('contact/images/x.png')">

<div id="formWrap">
<h2>Register as a Language Landscapes linguist</h2>

	<div id="form">
    <?php if($form_complete === FALSE): ?>
    	<form action="contact.php" method="post" id="translator_form">
        
    	<div class="row">
        	<div class="label">First name</div><!-- end of label -->
            <div class="input">
            	<input type="text" id="forename" class="detail" name="forename" value="<?php echo isset($_POST['forename'])? $_POST['forename'] : 'asfgd'; ?>" /><?php if(in_array('forename', $validation)): ?><span class="error"><?php echo $error_messages['forename']; ?></span><?php endif; ?>
            </div><!-- end of input -->
            <div class="context">
            </div><!-- end of context -->
    	</div><!-- end of row -->
        
    	<div class="row">
        	<div class="label">Last name</div><!-- end of label -->
            <div class="input">
            	<input type="text" id="surname" class="detail" name="surname" value="<?php echo isset($_POST['surname'])? $_POST['surname'] : 'fgd'; ?>" /><?php if(in_array('surname', $validation)): ?><span class="error"><?php echo $error_messages['surname']; ?></span><?php endif; ?>
            </div><!-- end of input -->
            <div class="context">
            </div><!-- end of context -->
    	</div><!-- end of row -->
        
    	<div class="row">
        	<div class="label">e-mail address</div><!-- end of label -->
            <div class="input">
            	<input type="text" id="email" class="detail" name="email" value="<?php echo isset($_POST['email'])? $_POST['email'] : 'person@people.com'; ?>" /><?php if(in_array('email', $validation)): ?><span class="error"><?php echo $error_messages['email']; ?></span><?php endif; ?>
            </div><!-- end of input -->
            <div class="context">We will not share the address you type here nor will we spam you at it.
            </div><!-- end of context -->
    	</div><!-- end of row -->
        
    	<div class="row">
        	<div class="label">Message</div><!-- end of label -->
            <div class="input2">
            	<textarea id="bodytext" name="bodytext" class="mess"><?php echo isset($_POST['bodytext'])? $_POST['bodytext'] : 'here we are, so we are'; ?></textarea><?php if(in_array('bodytext', $validation)): ?><span class="error"><?php echo $error_messages['bodytext']; ?></span><?php endif; ?>
            </div><!-- end of input -->
    	</div><!-- end of row -->
        
        
        <div class="submit">
        	<input type="submit" id="submit" name="submit" value="Send message" />
        </div><!-- end of submit --> 
        </form>
        
        
		<?php else: ?>
			<p style="font-size:35px; font-family:Arial, Helvetica, sans-serif; color:#255e67; margin-left:25px;">Thank you for your message!</p>
		
			<script type="text/javascript">
				setTimeout('ourRedirect()', 5000)
				function ourRedirect() {
				location.href="contact.php"
				}
			</script>
		
		
		<?php endif; ?>
		
	</div><!-- end of form -->
   
</div><!-- end of formWrap -->

</body>

</html>
