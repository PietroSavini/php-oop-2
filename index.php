<?php 
require_once __DIR__ . './prodotto.php';
require_once __DIR__ . './categories.php';

// Classe Cibo


// Utilizzo delle classi

$prodotto1 = new Cibo("immagine1.jpg", "Cibo per cani", 10.99, "Cani");
$prodotto1->stampaCard();

$prodotto2 = new Gioco("immagine2.jpg", "Gioco per gatti", 5.99, "Gatti");
$prodotto2->stampaCard();

$prodotto3 = new Cuccia("immagine3.jpg", "Cuccia per cani", 49.99, "Cani");
$prodotto3->stampaCard();

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
    
</body>
</html>