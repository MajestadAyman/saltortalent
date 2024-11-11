<?php 
   header("Content-type: image/jpeg"); 
   $imagen = imagecreatefromjpeg("image/mantenimiento.jpg"); 
   imagejpeg ($imagen);
   imagedestroy ($imagen);
?>