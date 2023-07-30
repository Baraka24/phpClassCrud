<?php
$to = "bkinywa24@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: conaccechaplainscongo@gmail.com" . "\r\n" .
    "CC: bkinywa24@gmail.com";

mail($to,$subject,$txt,$headers);
?>