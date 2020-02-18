<?php
    $mysqli = new mysqli('localhost', 'jubelmakerspace', 'MakerTech138', 'makerspace_sign_in');

    if($mysqli->connect_errno) {
	    printf("Connection Failed: %s\n", $mysqli->connect_error);
        exit;
    }
?>