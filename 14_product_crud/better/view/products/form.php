<?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $error): ?>
            <div><?php echo $error ?></div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>


<form action="" method="post" enctype="multipart/form-data">

<?php if($products['image']): ?>
    <img src="../<?php echo $products['image'] ?>" class="update-img" >

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
    <textarea class="form-control" name="description"><?php echo $description ?></textarea>
  </div>

  <div class="mb-3">
    <label>Product price</label>
    <input type="number" name="price" step=".02" class="form-control" value="<?php echo $price ?>">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
