<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username == "JaromeLoo" && $password == "J106729071") 
{
    $_SESSION['user'] = $username;

    header("Location: welcome.php");
    exit();

} else 
{

    header("Location: login.php?error=1");
    exit();

}
?>
