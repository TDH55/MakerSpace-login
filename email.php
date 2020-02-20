<?php
// session_start();
// require "mysql_login.php";
// $to = 'jubelmakerspace@gmail.com';
// $from = 'jubelmakerspace@gmail.com';
// $fromName = 'sign in system';
// $day = date('d-m-Y');
// $subject = 'sign in sheet as of '.$day;

// $file = "/home/pi/Downloads/".$day.".csv";

// $headers = "From: $fromName"." <".$from.">";

// $message = "";

// //boundary 
// $semi_rand = md5(time()); 
// $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

// //headers for attachment 
// $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

// //multipart boundary 
// $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
// "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 

// //preparing attachment
// if(!empty($file) > 0){
//     if(is_file($file)){
//         $message .= "--{$mime_boundary}\n";
//         $fp =    @fopen($file,"rb");
//         $data =  @fread($fp,filesize($file));

//         @fclose($fp);
//         $data = chunk_split(base64_encode($data));
//         $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 
//         "Content-Description: ".basename($file)."\n" .
//         "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 
//         "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
//     }
// }
// $message .= "--{$mime_boundary}--";
// $returnpath = "-f" . $from;

// $mail = @mail($to, $subject, $message, $headers, $returnpath); 


// header("Location: home.php");
// exit;
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("jubelmakerspace@gmail.com","My subject",$msg);

?>
