<?php

session_start();

$users = [

    array(
        "username" => "Sweet",
        "email" => "sweet@noesmiemail.com"
    ),

    array(
        "username" => "Pain",
        "email" => "pain@noesmiemail.com"
    ),

];

$user = $_GET["user"] ?? "";

$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];
