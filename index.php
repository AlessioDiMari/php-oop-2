<?php

require_once './Models/Category.php';
require_once './Models/Product.php';
require_once './Models/Food.php';


// Categoria
$catCategory = new Category("Gatto", "fa-cat");
$dogCategory = new Category("Cane", "fa-dog");


// Prodotto
$product = new Product("Osso", 4.99, $dogCategory);


// Cibo
$croccantini = new Food("Croccantini", 19.99, $dogCategory, 5.00, "manzo", 2);

var_dump($croccantini);


var_dump($product);

?>



<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/31a056169f.js" crossorigin="anonymous"></script>

    <title>PHP OOP</title>
</head>
<body>

    <h1>PHP OOP Animals Shop</h1>




    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>