<?php 
require_once __DIR__ . './prodotto.php';


// Classe Cibo
class Cibo extends Prodotto {

    // data di scadenza 
    // gusto
    public function __construct($immagine, $titolo, $prezzo, $categoria) {
        parent::__construct($immagine, $titolo, $prezzo, $categoria);
    }

    public function stampaCard() {
        parent::stampaCard();
        echo "Tipo di articolo: Cibo<br>";
    }
}

// Classe Gioco
class Gioco extends Prodotto {
    public function __construct($immagine, $titolo, $prezzo, $categoria) {
        parent::__construct($immagine, $titolo, $prezzo, $categoria);
    }

    public function stampaCard() {
        parent::stampaCard();
        echo "Tipo di articolo: Gioco<br>";
    }
}

// Classe Cuccia
class Cuccia extends Prodotto {

    // dimensioni
    // materiale
    public function __construct($immagine, $titolo, $prezzo, $categoria) {
        parent::__construct($immagine, $titolo, $prezzo, $categoria);
    }

    public function stampaCard() {
        parent::stampaCard();
        echo "Tipo di articolo: Cuccia<br>";
    }
}

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
</head>
<body>
    
</body>
</html>