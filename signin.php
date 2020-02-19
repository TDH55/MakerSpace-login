<?php
// error_reporting(E_ALL);
// ini_set('display_errors', TRUE);
session_start();
require "mysql_login.php";

$id_regex = "^S\d{5}$";

$id = $_POST['id'];
if(!preg_match($id_regex, $id, $matches)){
    $_SESSION['error'] = true;
    echo $id;
    //header("Location: home.php");
    exit;
}
$stmt = $mysqli->prepare("insert into sign_ins (id, time) values (?, now())"); //query to insert username and password into users database
    if(!$stmt){ //error message
        $_SESSION['error'] = true;
        printf("Query Prep Failed: %s\n", $mysqli->error);
        //header("Location: home.php");
        exit;
    }
    $stmt->bind_param('s', $id); //set the insert parameters to the username and hashed pssword
    if(!$stmt->execute()){ //go to error page on failure
        $_SESSION['error'] = true;
        printf("Query Prep Failed: %s\n", $mysqli->error);
        //header("Location: home.php");
        exit;
    }
$stmt->close();
header("Location: home.php");
exit;
?>