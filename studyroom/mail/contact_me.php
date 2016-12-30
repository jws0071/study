<?php

// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$name = ICONV("UTF-8","EUC-KR",$name);
$email_address = ICONV("UTF-8","EUC-KR",$email_address);
$message = ICONV("UTF-8","EUC-KR",$message);

// Before running, create the table:
$conn = oci_connect('woosun', 'qwer1234', 'localhost/study');
if (!$conn) {
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'INSERT INTO QNA (QID, QNAME, QMAIL, QPH_NUM, QSTRING) VALUES(QNA_UP.NEXTVAL , :QName , :QMAIL , :QPH_NUM , :QSTRING )');
putenv("NLS_LANG=KOREAN_KOREA.KO16MSWIN949");



oci_bind_by_name($stid, ':QName', $name);
oci_bind_by_name($stid, ':QMAIL', $email_address);
oci_bind_by_name($stid, ':QPH_NUM', $phone);
oci_bind_by_name($stid, ':QSTRING', $message);

oci_execute($stid);  // executes and commits
oci_free_statement($stid);
oci_close($conn);

// Create the email and send the message
$to = 'jws0071@naver.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: jws0071@naver.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			

?>
