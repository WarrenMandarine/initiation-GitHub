<?php
                        require_once('../exo-bdd-php-main/./webfiles/./php/./actions/./dbconnect.php');
                        
                        $email = $_POST["email"];
                        $password = $_POST["passW"];

                       // if(!empty($conn)){

                         //   echo "Vous êtes connecté";
                       // }
                       // else{
                         //   echo "Erreur";
                        //}

                        $req = "SELECT *FROM users where email = '$email' and passW = '$password'";
                            $exec = $conn->query($req);

                           $res = $exec -> fetchAll(PDO::FETCH_ASSOC);
                           
                    
                            if($exec != false){
                                echo "Erreur";

                                session_start();


                                $_SESSION['conn'] = TRUE;
                            }
                            else{
                                echo "Vous êtes connecté";
                            }
                     
                     ?>