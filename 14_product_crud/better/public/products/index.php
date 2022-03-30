
<?php

require_once('../../database.php');



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



<?php include_once '../../view/partials/header.php' ?>

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
        <img src="../<?php echo $product['image'] ?>"  class = "product-img">
      </td>
      <td><?php echo $product["description"] ?></td>
      <td><?php echo $product["title"] ?></td>
      <td>$<?php echo $product["price"] ?></td>
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