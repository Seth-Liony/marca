<?php 
  $destino="sethliony2711@gmail.com";
  $nombre= $POST["name"];
  $email= $POST["email"];
  $mensaje= $POST["message"];
  $contenido= "nombre: ".$nombre."\n Correo: ".$email."\n Mensaje: ".$mensaje;
  mail($destino,"CONTACTO",$contenido);
  heder("Location:gracias.html");
?>