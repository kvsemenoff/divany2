<?php
$to = "viktor@avangard.biz";
$phone = $_POST['phone'];
$email = $_POST['email'];
$uname = $_POST['uname'];
$adress = $_POST['adress'];
$text = $_POST['text'];
$totalprice = $_POST['totalprice'];
$tovar = $_POST['tovar'];
$colornumber = $_POST['colornumber'];


// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers  = "From: info@starlight.space" . "\r\n";
$headers .= "Reply-To: info@starlight.space".  "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body>";
$msg .= "<h2>Новое сообщение</h2>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$uname."</p>\r\n";
$msg .= "<p><strong>Email:</strong> ".$email."</p>\r\n";
$msg .= "<p><strong>Адресс доставки</strong> ".$adress."</p>\r\n";
$msg .= "<p><strong>Товар:</strong> ".$tovar."</p>\r\n";
$msg .= "<p><strong>Номер расцветки:</strong> ".$colornumber."</p>\r\n";
$msg .= "<p><strong>Стоимость:</strong> ".$totalprice."</p>\r\n";
$msg .= "<p><strong>Сообщение:</strong> ".$text."</p>\r\n";
$msg .= "</body></html>";


// отправка сообщения
@mail($to, $subject, $msg, $headers);



?>