<?php  
   include 'funciones_clases/funciones.php';
   include 'funciones_clases/clases.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Adan gimenez</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>

    <!--Estilos css y bootstrap (inicio)-->
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css">
    <!--Estilos css y bootstrap (fin)-->

    <!--Iconos Fontawesome (inicio)-->
    <link rel="stylesheet" type="text/css" href="librerias/fontawesome-5.12.1/css/all.min.css">
    <!--Iconos Fontawesome (fin)-->

    <link rel="import" href="coments.html">
</head>

<body>
    <header>
        <div class="header_left">
            <div class="div_content_logoCode">
                <img src="img/portafolio/code_logo.png">
            </div>
        </div>
        
        <div class="header_right">
            <a href="#" class="link_menu">Sobre mi</a>
            <a href="#experience" class="link_menu">Experiencia</a>
            <a href="#abilities" class="link_menu">Habilidades</a>
            <a href="#contact" class="link_menu">Contacto</a>
        </div>
    </header>

    <div class="section_about_me">
        <img src="img/portafolio/Fondo-web.jpg" class="section_about_img">
        <div class="section_about_me_text">
            <div class="section_about_me_title">
                Adan Gimenez <br> Desarrollador web
            </div>

            <div class="section_about_me_resume">
                Apasionado por la tecnología e ideas que puedan cambiar nuestro entorno para mejor, siempre con ganas de seguir aprendiendo y mejorando en mi carrera profesional. Soy el tipo de persona que hace lo mejor posible para que las cosas queden bien hechas.
            </div>
        </div>
        
    </div>

   <div class="section_experiency" id="experience">
      <div class="section_experiency_header">
         <div class="section_experiency_header_hijo1">
            <hr style="height: 2px;">
            <div>EXPERIENCIA</div>
            <hr style="height: 2px;">
         </div>
      </div>

      <div class="section_experiency_contenido">   
         <?php 
            $expe = ''; 
            $query = conexionDB("SELECT id FROM jobs");
            while ($row=mysqli_fetch_array($query)){
               $jobs = new jobs($row['id']);
               $img_cover = explode(';', $jobs->img_url);
               
               $expe.= '<div class="section_experiency_contenido_hijo1">';
                  $expe.= '<div class="section_experiency_contenido_hijo2" data-bs-toggle="modal" data-bs-target="#modalimg"
                  onclick="url_img('.$jobs->id.',\''.$jobs->img_url.'\')">
                              <img src="'.$img_cover[0].'" class="img_section_experiency">
                           </div>';
               $expe.= '</div>';
            }

            echo $expe;
         ?>
      </div>


   <div class="section_abilities_contenido" id="abilities">
      <div class="section_abilities_header">
         <div class="section_abilities_header_hijo1">
            <hr style="height: 2px;">
               <div class="section_abilities_header_title">HABILIDADES</div>
            <hr style="height: 2px;">                
         </div>
      </div>
    
      <div class="section_abilities_contenido_hijo1">
         <?php  
            $skills_show = ''; 
            $query = conexionDB("SELECT id FROM skills");
            while ($row=mysqli_fetch_array($query)){
               $skills = new skills($row['id']);

               $skills_show.='<div class="div_abilities_content_img" title="'.$skills->name.'">
                              <img src="'.$skills->img_url.'">
                           </div>';
            }

            echo $skills_show;   
         ?>
      </div>
   </div>
    

    <div class="section_contact_contenido" id="contact">
        <div class="section_contact_header">
            <div class="section_contact_header_hijo1">
                <hr style="height: 2px;">
                <div class="section_contact_header_title">CONTACTO</div>
                <hr style="height: 2px;">
            </div>
        </div>

        <div class="section_contect_contenido_hijo1">
            <div>
                <a href="https://www.linkedin.com/in/adan-gimenez-77b989146/" data-bs-toggle="modal" data-bs-target="#modalContact">
                <img src="img/portafolio/gmail_icon.png" class="icon_gmail">
                </a>
            </div>
            <div>
                <a href="https://www.linkedin.com/in/adan-gimenez-77b989146/" target="_blank">    
                <img src="img/portafolio/linkedin_icon.png" class="icon_linkedin">
                </a>
            </div>
        </div>
    </div>


    
   <?php 
      include 'modales/modales.php'; 
   ?>
 

    <script src='js/index.js'></script>

    <!--Estilos css y bootstrap (inicio)-->
    <script src="librerias/bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"></script>
    <!--Estilos css y bootstrap (fin)-->
</body>

<footer>
    Todos los derechos reservados 2021
</footer>
</html>