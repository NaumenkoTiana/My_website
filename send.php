<?php
$fio = $_POST['FIO'];
$phone = $_POST['PHONE'];
$email = $_POST['email'];

$fio = htmlspecialchars($fio);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);

$fio = urldecode($fio);
$phone = urldecode($phone);
$email = urldecode($email);

$fio = trim($fio);
$phone = trim($phone);
$email = trim($email);

// echo $fio;
// echo "<br>";
// echo $phone;
// echo "<br>";
// echo $email;

if (mail("foxcopywriter@gmail.com", "Прилите мне анкету", "ФИО:" .$fio. "Телефон" .$phone. "Email" .$email, "From: foxcopywriter@gmail.com \r\n"))
{
    echo "Заявка принята. Я напишу вам в течение 15 минут";
}
else {
    echo "Произошла ошибка, попробуйте ещё раз";
};

?>