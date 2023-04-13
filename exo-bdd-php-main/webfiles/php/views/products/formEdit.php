

<?php 

require_once('../../actions/dbconnect.php');

$id = $_POST["id"];

$exec = $conn->query("SELECT * FROM products where id = $id");
if($exec != false){
    $res = $exec->fetchAll(PDO::FETCH_ASSOC);
    var_dump($res);
}




   
    
/*var_dump($id);*/
?>


<form action="../../actions/products/scriptEdit.php" method="POST">

<input type="url" name=img placeholder ="image" value ="<?php echo $res[0]["img"];?>">
<input type="text" name=designation placeholder = "design" value ="<?php echo $res[0]["designation"];?>">
<input type="number" name= prix  value="<?php echo $res[0]["prix"];?>]">
<input type="submit" value = Envoyer>
<input type="hidden" name=id value="<?php echo $id; ?>">
</form>

<?php
require_once('../../views/footer.php');
?>
</body>
</html>