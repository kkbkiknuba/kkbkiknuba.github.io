<meta http-equiv='refresh' content='6; url=https://kkbiknuba.github.io'>
<meta charset="UTF-8" />
<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['body'])) {$body = $_POST['body']; if ($body == '') {unset($body);}}
 
if (isset($name) && isset($email) && isset($body)){
 
$address = "y.khlaponin@ukr.net";
$mes = "Ім'я: $name \nE-mail: $email \nТекст: $body";
$send = mail ($address,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");

}
else
{
echo "Заповніть, будь ласка, всі необхідні поля";
}
?>
