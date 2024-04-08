<?php

require_once './Models/Category.php';
require_once './Models/Product.php';
require_once './Models/Food.php';
require_once './Models/Toy.php';
require_once './Models/Bed.php';


// Categoria
$catCategory = new Category("Gatto", "fa-cat");
$dogCategory = new Category("Cane", "fa-dog");


// Prodotto
$product = new Product("Osso", 4.99, $dogCategory);


// Cibo
$croccantini = new Food("Croccantini", 19.99, $dogCategory, 5.00, "manzo", 2);
$croccantini->setImage("https://shop-cdn-m.mediazs.com/bilder/wolf/of/wilderness/velvet/gloom/tacchino/trota/0/400/wow_redclassic_velvetgloom_frontright_12kg_1000x1000_0.jpg");

// Giocattolo
$giocattolo = new Toy("Lenza con fiocco", 2.59, $catCategory);
$giocattolo->setImage("https://shop-cdn-m.mediazs.com/bilder/lenza/gioco/bird/5/400/26412_pla__katzenangel_bird_fg_7164_5.jpg");
$giocattolo->setMaterial("plastica");
$giocattolo->setSize("normal");

// Cuccia
$cuccia = new Bed("Cuccia imbottita", 43.09, $dogCategory);
$cuccia->setImage("https://shop-cdn-m.mediazs.com/bilder/super/offerta/letto/per/cani/cozy/ecolife/grigio/7/400/180712_pla_cozy_ecolife_grau_fg_6369_7.jpg");
$cuccia->setMaterial("cotone");
$cuccia->setSize("large");


// var_dump($product);

$products = [
    $croccantini,
    $giocattolo,
    $cuccia,
];

var_dump($products);


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


    <div class="container py-5">

        <h1>PHP OOP Animals Shop</h1>


        <div class="row row-col-4 py-5">

            <?php
            foreach ($products as $product) {
                ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $product->image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> <?= $product->name ?> </h5>
                            <h6><small> <?= $product->type ?> </small></h6>
                            <p class="card-text"> €<?= $product->price ?> 
                            <span class="card-text"> <i class="fa-solid <?= $product->category->icon ?>"></i> </span>
                            </p>
                            <a href="#" class="btn btn-success">Aggiungi al carrello</a>
                        </div>
                    </div>
                </div>
                <?php
            }

            ?>

        </div>


    </div>
   


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>