<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Strelkina Irina</title>
	<style>
		font-size: 24px;
	</style>
</head>
<body>
<?php

if(isset($_POST['submit'])){
$to = "strelaweb@gmail.com";; // Здесь нужно написать e-mail, куда будут приходить письма
$from = $_POST['email']; // this is the sender's Email address
$first_name = $_POST['first_name'];
$phone = $_POST['phone'];
$subject = "Форма отправки заявок с сайта strelaweb.ru";
//$subject2 = "Copy of your form submission";
$message = $first_name . " оставил заявку на консультацию.  Телефон:" . $phone;
//$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

$headers = "From:" . $from;
//$headers2 = "From:" . $to;

mail($to,$subject,$message,$headers);
// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
echo "Сообщение отправлено. Спасибо Вам " . $first_name . ", я скоро свяжусь с Вами.";
echo "<br /><br /><a href='http://strelaweb.ru'>Вернуться на сайт.</a>";

}

?>
</body>
</html>
