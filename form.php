<?php

$nombre = $_POST["Nombre"];
$email = $_POST["Email"];
$localidad = $_POST["Localidad"];
$mensaje = $_POST["Escribí tu mensaje..."];


$mensaje = "Este mensaje fue enviado por: " . $nombre . "/r/n";
$mensaje = "Su e-mail es: " . $email . "/r/n";
$mensaje = "Es de la Localidad de: " . $localidad . "/r/n";
$mensaje = "Su mensaje es: " . $_POST["Escribí tu mensaje..."] ."/r/n";
$mensaje = "Enviado el: " . date("d/m/y", time());

$para = "corazon.de.chocolate@gmail.com";
$asunto = "Tienes un Mail desde la Web de Corazón de Chocolate";

mail($para, $asunto, utf8_decode($mensaje), $header);

header{Location:"./pages/gracias.html"};

?>