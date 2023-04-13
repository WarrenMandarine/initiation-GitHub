<?php 

require_once("../dbconnect.php");
   
    if(!empty($conn)){

        
       
        $prix = $_POST["prix"];
        $img = $_POST["img"];
        $designation = $_POST["designation"];
        $id = $_POST["id"];

 
        $req = "UPDATE  products set  designation =  '$designation', prix = '$prix', img= '$img' WHERE id= '$id'";

        $exec = $conn->query($req);

        if($exec != false){
            echo "Modification effectuée";
        //    header("location: ./index.php");
        }
        else{
            echo "Requête invalide";
        }
    }
  
    

?>