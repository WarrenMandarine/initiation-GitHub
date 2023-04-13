
    <?php 
      require_once('../../actions/dbconnect.php');
      require_once('../../views/header.php');
     
     
      if (!empty($_COOKIE["toto"]) ){
        echo "Hey c'est moi ";
      }
      else{
        echo "C'est qui ?";
      }
      
        setcookie("toto", "bonjour", time()+10); 
   




        if(!empty($conn)):
            /* echo "Connexion BDD réussie"; */
    ?>
    <header>
        <nav>
            <p class="logo">Amazoone</p>
            <ul>
                <li><a href="#">Flash</a></li>
                <li><a href="#">Basics</a></li>
                <li><a href="#">Cart. cadeaux</a></li>
                <li><a href="#">Coupons</a></li>
                <li><a href="./ajout.php">Nouveau</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Beauté</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Ventes flash et promotions</h1>
        <div class="container">


            <?php 
                $exec = $conn->query("SELECT * FROM products");
                if($exec != false):

                $res = $exec->fetchAll(PDO::FETCH_ASSOC);
          
                foreach($res as $tuple):
            ?>
                <div class="card">
                
                    <form action="../../actions/products/scriptDelete.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $tuple["id"]; ?>">
                        <button type="submit">X</button>
                    </form>
                   
                    <form action="./formEdit.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $tuple["id"]; ?>">
                    <button type="submit">Edit</button>

                    </form>

                    <img 
                        src="<?= $tuple["img"]; ?>" 
                        alt="illustration de <?= $tuple["designation"]; ?>"
                    >
                    <p class="info"><?= $tuple["prix"]; ?> €&nbsp;-&nbsp;Vente flash</p>
                    <p class="product"><?= $tuple["designation"]; ?></p>
                    
                </div>
                <!-- Fin du modèle de carte -->
            <?php endforeach; ?>

            <?php else: ?>
                <p>Requete SQL non valide.</p>
            <?php endif;?>









            
            
        </div>
    </main>
    <?php
    require_once('../../views/footer.php');
    ?>
    <?php endif; ?>
</body>
</html>