<?php 
require_once __DIR__ . './prodotto.php';
require_once __DIR__ . './store-db.php';
require_once __DIR__ . './product-categories.php';
require_once __DIR__ . './categories.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- my style -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <?php  foreach ($in_store as $value) 
            $value->stampaCard()
        ?>
    </div>
</body>
</html>