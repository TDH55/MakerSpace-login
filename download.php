<?php
session_start();
require "mysql_login.php";
$now = date("Y-m-d");

$filename = "signins_$now";

$export_data = '';

$stmt = $mysqli->prepare("SELECT * FROM sign_ins");
$field = mysql_num_fields($stmt);

for($i = 0; $i < $field; $i++) {
    $csv_export.= mysql_field_name($stmt,$i).',';
}
$csv_export.= '
';

while($row = mysql_fetch_array($stmt)) {
    // create line with field values
    for($i = 0; $i < $field; $i++) {
      $csv_export.= '"'.$row[mysql_field_name($query,$i)].'",';
    }	
    $csv_export.= '
    ';	
}

header("Content-type: text/x-csv");
header("Content-Disposition: attachment; filename=".$filename."");
echo($csv_export);

?>