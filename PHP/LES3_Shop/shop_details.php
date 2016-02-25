<?php

$products = [
    ['name' => 'Pulp Fiction',
    'price' => 10],
    
    ['name' => 'Reservoir Dogs',
    'price' => 12.99],
    
    ['name' => 'Kill Bill',
    'price' => 15]
    
];

$id = $_GET['id'];
$product = $products[$id];

    
    
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Buy <?php echo $product['name'] . " for only " . $product['price']; ?></title>


    </head>

    <body>


        <h1><?php echo $product['name']; ?></h1>


    </body>

    </html>