<?php  
   include 'funciones_clases/funciones.php';
   include 'funciones_clases/clases.php';

    $query = conexionDB("SELECT id FROM jobs WHERE id =".$_POST['id']);
    while ($row=mysqli_fetch_array($query)){
        $jobs = new jobs($row['id']);
               
        echo $jobs->description;
    }
?>