
<?php

require_once('../../database.php');
require_once('../../function.php');

$id = $_GET['id'] ?? null;

if(!$id){

    header('Location: index.php');
    exit;
}


$statement = $pdo->prepare('SELECT * FROM products WHERE id= :id');
$statement->bindValue(':id', $id);
$statement->execute();
$products = $statement->fetch(PDO::FETCH_ASSOC);


// echo '<pre>';
// var_dump($products);
// echo '</pre>';


$errors = [];

$title = $products['title'];
$description = $products['description'];
$price = $products['price'];



if($_SERVER['REQUEST_METHOD'] === 'POST'){

require_once("../../validate_product.php");

if(empty($errors)){

$statement = $pdo->prepare("UPDATE products SET title = :title, 
                                    image = :image, 
                                    description = :description, 
                                    price = :price WHERE id = :id");

$statement->bindValue(':title', $title);
$statement->bindValue(':image', $imagePath);
$statement->bindValue(':description', $description);
$statement->bindValue(':price', $price);
$statement->bindValue(':id', $id);

$statement->execute();
header('Location: index.php');

}

}


?>



<?php include_once '../../view/partials/header.php'; ?>


    <h1 style="text-align: center; margin-bottom: 20px"> Update the product: <?php echo $products['title'] ?></h1>

    <a href="index.php" class="btn btn-primary">Go back to product page</a>


  <?php include_once '../../view/products/form.php'; ?>

  

  </body>
</html>