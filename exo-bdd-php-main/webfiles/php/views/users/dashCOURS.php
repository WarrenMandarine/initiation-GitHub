<?php 
 
  session_start();

  if(!empty($_SESSION) && $_SESSION["conn"] === TRUE){
    echo "Bienvenue sur votre espace administrateur";
  }

  else{
    echo "Bah vous etes pas la bienvenue, CHEH !";
  }

?>