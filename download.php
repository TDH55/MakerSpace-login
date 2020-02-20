<?php
session_start();
require "mysql_login.php";
$now = date("Y-m-d");

$filename = "signins_$now";


$query = "SELECT * FROM sign_ins";
if (!$result = mysqli_query($mysqli, $query)) {
    exit(mysqli_error($mysqli));
}

$sign_ins = array();
if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        $sign_ins[] = $row;
    }
}
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename='.$filename.'.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('No', 'id', 'time'));

if (count($sign_ins) > 0) {
    foreach ($sign_ins as $row) {
        fputcsv($output, $row);
    }
}

?>