<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 18.11.2021
 * Time: 19:50
 */



if ($_POST) {

    //Проверка существования данных от пользователя
    if (!isset($_POST["email"]) || !isset($_POST["msg"])) {
        die();
    }

    //Делаем фильтр, убирая "вредоносные" символы из почты и сообщения
    $fromEmail= filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $userMSG = filter_var($_POST["msg"], FILTER_SANITIZE_STRING);

    $toEmail = "2614462@mail.ru"; //Наш адрес электронной почты (КУДА будут падать сообщения из формы)
    $subject = 'Сообщение из формы'; //Тема электронной почты

    //доп. проверка на минимальное кол-во символов в почтовом адресе
    //тут всё условно, под текущую задачу допустим это 9 символов
    if (strlen($toEmail) < 9) {
        header('HTTP/1.1 500 Phone is too short or empty!');
        exit();
    }

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
    $headers .= "From: $fromEmail\r\n"; // от кого письмо

    $All_Email_Message = "<b>Сообщение:</b> " . $userMSG;

    $sentMail = @mail($toEmail, $subject, $All_Email_Message, $headers);

    if (!$sentMail) {
        header('HTTP/1.1 500 Не удалось отправить почту! Извините..');
        exit();
    } else {
        echo 'Ваше сообщение было успешно отправленно! ';
    }

}