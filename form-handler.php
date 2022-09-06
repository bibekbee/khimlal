<? php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$email_from = "info@khimlal.com";
$email_subject = "New message";

$emai_body = "User name: $name.\n".
			 "User email: $visitor_email.\n".
			 "User number: $number.\n".
			 "User message: $message.\n".;

$to = "bibekbee23@gmail.com";
$header ="From: $email_from \r\n";
$header = "Replay-To: $visitor_email \r\n";

mail($to,$email_subject,$emai_body,$header);

header("Location: contact.html");
?>
