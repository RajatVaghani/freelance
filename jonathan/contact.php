<?php
$to = "jonathan.b.pfister@gmail.com";
$subject = "Contact Form - Site= - " . $_REQUEST['subject'];
$message = $_REQUEST['msg']. '\n\nFrom '. $_REQUEST['name'] .' - '. $_REQUEST['email'];
$from = "cyberskydevelopment@gmail.com";
$headers = "From:" . $from;
if(mail($to,$subject,$message,$headers))
{
	header("Location: index.html");
}
else
{
	header("Location: index.html");
}

?>
