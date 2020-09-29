<?php

$recepient = "bboda2106@gmail.com";
$siteName = "Ajax-форма";

$name = trim($_POST["user_name"]);
$email = trim($_POST["user_email"]);
$password = trim($_POST["user_password"]);

$message = "Имя: $name \nEmail: $email";

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>