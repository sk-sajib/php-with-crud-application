
<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=product_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


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

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

if(!$title){
  $errors[] =  "product title is required";
}

if(!$price){
    $errors[] =  "product price is required";
  }

  if(!is_dir('image')) {
      mkdir('image');
  }


if(empty($errors)){

 

    $image = $_FILES['image'] ?? null;
    $imagePath = $products['image'];

    if($image && $image['tmp_name']){

        if($products['image']){
            unlink($products['image']);
        }

        $imagePath = 'image/'.randomString(8).'/'.$image['name'];
        mkdir(dirname($imagePath));

        move_uploaded_file($image['tmp_name'], $imagePath);
    }



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


function randomString($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);

        $str .= $characters[$index];
    }

    return $str;
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>Product Crud Bad Application</title>
    <link rel="stylesheet" href="app.css">
  </head>
  <body>
    <h1 style="text-align: center; margin-bottom: 20px"> Update the product: <?php echo $products['title'] ?></h1>

    <a href="index.php" class="btn btn-primary">Go back to product page</a>



<?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $error): ?>
            <div><?php echo $error ?></div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>


<form action="" method="post" enctype="multipart/form-data">

<?php if($products['image']): ?>
    <img src="<?php echo $products['image'] ?>" class="update-img" >

<?php endif; ?>


  <div class="mb-3">
    <label>Product Image</label>
    <input type="file" name="image" class="form-control">
  </div>

  <div class="mb-3">
    <label>Product title</label>
    <input type="text" name="title" class="form-control" value="<?php echo $title ?>">
  </div>

  <div class="mb-3">
    <label>Product description</label>
    <textarea name="description" class="form-control" value="<?php echo $description ?>" ></textarea>
  </div>

  <div class="mb-3">
    <label>Product price</label>
    <input type="number" name="price" step=".02" class="form-control" value="<?php echo $price ?>">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  

  </body>
</html>