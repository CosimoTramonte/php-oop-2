<?php

include __DIR__ . "/models/Food.php";
include __DIR__ . "/models/Toy.php";
include __DIR__ . "/data/database.php";



$arrayProducts = [
    $prod1,
    $prod2,
    $prod3,
    $prod4,
    $prod5,
    $prod6,
    $prod7,
    $prod8
];

// var_dump($prod1);
// var_dump($prod2);
// var_dump($prod3);
// var_dump($prod4);
// var_dump($prod5);
// var_dump($prod6);
// var_dump($prod7);
// var_dump($prod8);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Pet Shop</title>
</head>
<body>

    <div class="container d-flex flex-wrap">
        <?php foreach($arrayProducts as $product) : ?>
            <div class="card mx-4 my-3" style="width: 18rem;">

                <img src="<?php echo $product->getImage() ?>" class="card-img-top" alt="...">

                <div class="card-body">
                    <h3><?php echo $product->getName() ?></h3>
                    <h6><?php echo $product->getBrand() ?></h6>
                    
                    <?php foreach($product->getTypology() as $type) : ?>
                        <span><?php echo $type ?></span>
                    <?php endforeach; ?>

                    <h4><?php echo $product->getPrice() ?></h4>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
    
</body>
</html>