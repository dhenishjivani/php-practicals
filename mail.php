<?php
ini_set('display_errors', 0);
$to = "dhenishjivani@gmail.com";

$subject = "My subject";

$txt = "Hello world!";

$headers = "From: rutulsheladiya2@gmail.com" . "\r\n";

mail($to,$subject,$txt,$headers);

?>