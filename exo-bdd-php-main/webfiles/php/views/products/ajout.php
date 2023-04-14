<?php
require_once('../header.php');
require_once('../../actions/dbconnect.php');
?>
    <h1>Formulaire d'ajout de produits</h1>
    <form action="../../actions/products/scriptAjout.php" method="POST">
        <input type="text" name="designation" placeholder="Le nom du produit">
        <input type="url" name="img" placeholder="L'illustration du produit">
        <input type="number" name="prix" placeholder="49.99">
        <button type="submit">Ajouter le produit</button>
    </form>


    <footer>
<?php
    require_once('../footer.php');

    ?>
    
    </footer>
</body>
</html>


<?php
                      