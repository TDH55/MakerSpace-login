<?php
session_start();
require "mysql_login.php";

$id = $_POST['id'];
$stmt = $mysqli->prepare("insert into sign_ins (id, time) values (?, now()"); //query to insert username and password into users database
    if(!$stmt){ //error message
        echo "1";
        $_SESSION['error'] = true;
        printf("Query Prep Failed: %s\n", $mysqli->error);
        //header("Location: home.php");
        exit;
    }
    $stmt->bind_param('s', $id); //set the insert parameters to the username and hashed pssword
    if(!$stmt->execute()){ //go to error page on failure
        $_SESSION['error'] = true;
        echo "2";
        printf("Query Prep Failed: %s\n", $mysqli->error);
        //header("Location: home.php");
        exit;
    }
$stmt->close();
header("Locaton: home.php");
exit;
?>