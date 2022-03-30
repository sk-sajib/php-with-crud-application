<?php


$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$imagePath = '';

if(!$title){
  $errors[] =  "product title is required";
}

if(!$price){
    $errors[] =  "product price is required";
  }

  if(!is_dir(__DIR__.'/public/image')) {
      mkdir(__DIR__.'/public/image');
  }


if(empty($errors)){


    $image = $_FILES['image'] ?? null;
    $imagePath = $products['image'];

    if($image && $image['tmp_name']){

        if($products['image']){
            unlink(__DIR__.'/public/'.$products['image']);
        }

        $imagePath = 'image/'.randomString(8).'/'.$image['name'];
        mkdir(dirname(__DIR__.'/public/'.$imagePath));

        move_uploaded_file($image['tmp_name'], __DIR__.'/public/'.$imagePath);
    }

}
