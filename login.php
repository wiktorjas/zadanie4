<?php

require_once("config.php");

session_start();

if($polaczenie->connect_errno!=0)
{
    echo "Error:".$polaczenie->connect_errno . "Opis:" . $polaczenie->connect_errno;
}
else
{
    $haslo3=hash('sha512', $_POST['password']);
    $login = $_POST['login'];
    $haslo3 = $_POST['password'];

    echo "Wiktor Jasek";

    $polaczenie->close();
}
header('location: index.php');
