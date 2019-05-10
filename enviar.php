<?php

$destino="whitesyblack@gmail.com";
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];
$contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nTelefono: ".$telefono."\Mensaje".$mensaje;
mail($destino,"Contactar", $contenido);
alert("Mensaje Enviado");

?>