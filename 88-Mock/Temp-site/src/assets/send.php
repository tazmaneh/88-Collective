<?php 

if ($_POST['submit'] ) {
    /* Anything that goes in here is only performed if the form is submitted */

$errors = '';
$myemail = 'hello@businesscollective.com';
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['msg']))
{
    $errors .= "\n Error: All fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['msg']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "88Collective: New message from website";
	$email_body = "\n Name: $name \n Email: $email_address \n Message: \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to, $email_subject, $email_body, $headers);
    echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#44bba4;'>Back to Website</a>";
} 
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>