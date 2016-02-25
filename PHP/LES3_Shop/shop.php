<?php

$products = [
    ['name' => 'Pulp Fiction',
    'price' => 10],
    
    ['name' => 'Reservoir Dogs',
    'price' => 12.99],
    
    ['name' => 'kill Bill',
    'price' => 15]
    
];
    
    
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Shop</title>

    </head>

    <body>
        
        <section>
            <?php 
                foreach( $products as $key => $p):  ?>
                
        <article>
            <a href="shop_details.php?id=<?php echo $key; ?>">
               <?php  echo $p ['name']; ?>
            </a>
            
        </article> 
                  
            <?php 
                endforeach  ?>
        </section>



    </body>

    </html>