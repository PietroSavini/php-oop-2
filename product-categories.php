<?php
    require_once __DIR__ . './prodotto.php';
    
    class Cibo extends Prodotto {

    // data di scadenza 
    // gusto
        public function __construct($_img,$_title,$_description,$_quantity, $_price, $_category) {
            parent::__construct($_img,$_title,$_description,$_quantity, $_price, $_category);
        }

        public function stampaCard() {
            parent::stampaCard();
            echo "Tipo di articolo: Cibo<br>";
        }
    }

    // Classe Gioco
    class Gioco extends Prodotto {
        public function __construct($_img,$_title,$_description,$_quantity, $_price, $_category) {
            parent::__construct($_img,$_title,$_description,$_quantity, $_price, $_category);
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
        public function __construct($_img,$_title,$_description,$_quantity, $_price, $_category) {
            parent::__construct($_img,$_title,$_description,$_quantity, $_price, $_category);
        }

        public function stampaCard() {
            parent::stampaCard();
            echo "Tipo di articolo: Cuccia<br>";
        }
    }

?>