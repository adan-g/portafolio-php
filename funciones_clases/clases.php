<?php
include_once "funciones.php";

class jobs{
   var $id;
   var $company;
   var $description;
   var $img_url;         
   
   function jobs($id){      
      $result = conexionDB("SELECT * FROM jobs WHERE id=".$id);           
      if ($row = mysqli_fetch_assoc($result)){
         $this->id = $id;         
         $this->company = $row['company'];
         $this->description = $row['description'];
         $this->img_url = $row['img_url'];
      }              
   }
}

class skills{
   var $id;
   var $name;
   var $img_url;         
   
   function skills($id){      
      $result = conexionDB("SELECT * FROM skills WHERE id=".$id);           
      if ($row = mysqli_fetch_assoc($result)){
         $this->id = $id;         
         $this->name = $row['name'];
         $this->img_url = $row['img_url'];
      }              
   }
}

?>