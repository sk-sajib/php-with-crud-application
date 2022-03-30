
<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=product_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$search = $_GET['search'] ?? '';

if($search){
  $statement = $pdo->prepare('SELECT * FROM products WHERE title LIKE :title ORDER BY create_date DESC' );
  $statement->bindValue(':title', "%$search%");
} else{
  $statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC' );
}
 

$statement->execute();

$products = $statement->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// var_dump($products);
// echo '</pre>';



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
  </head>
  <body>
    <h1 style="text-align: center; margin-bottom: 20px">Product Crud Application</h1>

<p>
  <a href="create.php" class="btn btn-success">create product</a>
</p>

<form action="index.php" method="GET">
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="search for products" name="search" value="<?php echo $search ?>">
    <button class="bt btn-outline-secondary" type="submit">search</button>
  </div>
</form>


<table class="table">
  <thead class="table-dark">
  <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">description</th>
      <th scope="col">Title</th>
      <th scope="col">price</th>
      <th scope="col">Create Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach( $products as $i=> $product) : ?>

     <tr>
      <th scope="row"><?php echo $i + 1 ?></th>
      <td>
        <img src="<?php echo $product['image'] ?>"  class = "product-img">
      </td>
      <td><?php echo $product["description"] ?></td>
      <td><?php echo $product["title"] ?></td>
      <td><?php echo $product["price"] ?></td>
      <td><?php echo $product["create_date"] ?></td>
      <td>
      <a  href="update.php?id=<?php echo $product['id'] ?>"  class="btn btn-sm btn-warning">Edit</a>

      <form style="display: inline-block;" action="delete.php" method="post">

      <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
      <button type="submit" class="btn btn-sm btn-danger">Delete</button>

      </form>

      </td>
    </tr>

    <?php endforeach; ?>

  </tbody>
</table>


  

  </body>
</html>