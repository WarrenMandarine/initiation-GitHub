<?php 
   
   require_once('../dbconnect.php');
    if(!empty($conn)){

        $nom = $_POST["designation"]; var_dump($_POST);
        $image = $_POST["img"];
        $prix = $_POST["prix"];

        $req = "INSERT INTO products (designation, img, prix) VALUES ('$nom', '$image', '$prix')";

        $exec = $conn->query($req);

        if($exec != false){
            echo "l'ajout a fonctionné";
        }
        else{
            echo "la requête n'a pas fonctionné";
        }
    }
    else{
        // Connexion à la BDD n'a pas fonctionnée

        

    }
?>