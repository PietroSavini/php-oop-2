<?php
    require_once __DIR__ . './prodotto.php';

    class Cibo extends Prodotto {
        private $expiration;
        private $type;
        public function __construct($_expiration,$_type,$_img,$_title,$_description,$_quantity, $_price, $_category) {
            parent::__construct($_img,$_title,$_description,$_quantity, $_price, $_category);
            $this->expiration = $_expiration;
            $this->type = $_type;
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

        private $dimensions;
        private $materials;
    
        public function __construct($_dimension,$_material,$_img,$_title,$_description,$_quantity, $_price, $_category) {
            parent::__construct($_img,$_title,$_description,$_quantity, $_price, $_category);
            $this->dimensions = $_dimension;
            $this->materials = $_material;
        }

        public function stampaCard() {
            parent::stampaCard();
            echo "Tipo di articolo: Cuccia<br>";
        }
    }

?>