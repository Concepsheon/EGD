<?PHP
$email = $_POST["email"];
$name = $_POST["name"];

$to = "raine20137@gmail.com";
$subject = "New Message From $name";
$headers = "From: $email\n";
$message = $_POST["message"];
$user = "$email";

$usersubject = "Thank You";
$userheaders = "From: you@youremailaddress.com\n";
$usermessage = "Thank you for your message. We will be in touch soon.";

mail($to,$subject,$message,$headers);
mail($user,$usersubject,$usermessage,$userheaders);
?>