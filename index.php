<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 18.11.2021
 * Time: 19:07
 */

?>


<html>
<head>
    <link type="text/css" rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css"
          href="http://fonts.googleapis.com/css?family=Yellowtail%7COpen%20Sans%3A400%2C300%2C600%2C700%2C800"
          media="screen">
</head>

<body>

<form class="blockForm" method="post" action="sendMessage.php">

    <div class="formHeadingText">ФОРМА СВЯЗИ</div>

    <input class="formInputField" type="email" name="email" placeholder="Email"/>
    <textarea name="msg" class="formBlockText" placeholder="Ваше сообщение" rows="7"></textarea>
    <input type="submit" class="formButton" id="submit_btn" value="Отправить сообщение">
</form>

</body>
</html>