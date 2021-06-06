<?php  
   include 'funciones_clases/funciones.php';
   include 'funciones_clases/clases.php';


   $to = $_POST['email'];
   $subject = $_POST['asunto'];
   $message = $_POST['mensaje'];
   $header = "From: gimenezadan1@gmail.com" . "\r\n";
   $header.= "X-Mailer: PHP/". phpversion();

   echo mail($to, $subject, $message, $header);
?>