<?php  
   include 'funciones_clases/funciones.php';
   include 'funciones_clases/clases.php';


   $to = 'gimenezadan1@gmail.com';
   $subject = $_POST['asunto'];
   $message = $_POST['mensaje'].$_POST['email'];
   $header = "From: gimenezadan1@gmail.com" . "\r\n";
   $header.= "X-Mailer: PHP/". phpversion();

   echo mail($to, $subject, $message, $header);
?>