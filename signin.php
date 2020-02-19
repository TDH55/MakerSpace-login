<?php
session_start();
require "mysql_login.php";

$id = $_POST['id'];
$stmt = $mysqli->prepare("insert into makerspace_sign_in (id, time) values (?, now()"); //query to insert username and password into users database
    if(!$stmt){ //error message
        $_SESSION['error'] = true;
        header("Location: home.php");
        exit;
    $stmt->bind_param('s', $id); //set the insert parameters to the username and hashed pssword
    if(!$stmt->execute()){ //go to error page on failure
        $_SESSION['error'] = true;
        header("Location: home.php");
        exit;
    }
$stmt->close();
header("Locaiton: home.php");
exit;
?>