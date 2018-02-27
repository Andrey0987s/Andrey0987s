<?php

$recepient = "qwerty3338043@mail.ru";
$sitename = "BalkonMinsk.by";

$name = trim($_POST["name"]);
$phone = trim($_POST["Subject"]);
$text = trim($_POST["text"]);
$message = "Имя: $name \nТелефон: $phone \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");