
<?php

require_once('../../database.php');
require_once('../../function.php');


// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>';

$errors = [];

$title = '';
$description = '';
$price = '';
$products = [
  'image' => ''
];


if($_SERVER['REQUEST_METHOD'] === 'POST'){

  require_once "../../validate_product.php";

if(empty($errors)){


$statement = $pdo->prepare("INSERT INTO products( title, image, description, price, create_date) 
                    VALUES(:title, :image, :description, :price, :date) ");

$statement->bindValue(':title', $title);
$statement->bindValue(':image', $imagePath);
$statement->bindValue(':description', $description);
$statement->bindValue(':price', $price);
$statement->bindValue(':date', date('Y-m-d H:i:s'));
$statement->execute();
header('Location: index.php');

}

}

?>

<?php include_once '../../view/partials/header.php'; ?>

<h1 style="text-align: center; margin-bottom: 20px">Add a new Product</h1>

<a href="index.php" class="btn btn-success">Go back to products</a>

<?php include_once '../../view/products/form.php'; ?>

  

  </body>
</html>