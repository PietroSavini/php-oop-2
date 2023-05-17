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
            echo '      <span>gusto: '.$this->type.'</span> <br>   
                        <span> data di scadenza: '.$this->expiration.'</span>
                    </div>
                </div>
            '
            ;
        }
    }

    // Classe Gioco
    class Gioco extends Prodotto {
        public function __construct($_img,$_title,$_description,$_quantity, $_price, $_category) {
            parent::__construct($_img,$_title,$_description,$_quantity, $_price, $_category);
        }

        public function stampaCard() {
            parent::stampaCard();
            echo '  </div>
                </div>
            ';    
            
     
        }
    }

    // Classe Cuccia
    class Cuccia extends Prodotto {

        private $dimensions;
        private $material;
    
        public function __construct($_dimensions,$_material,$_img,$_title,$_description,$_quantity, $_price, $_category) {
            parent::__construct($_img,$_title,$_description,$_quantity, $_price, $_category);
            $this->dimensions = $_dimensions;
            $this->material = $_material;
        }

        public function stampaCard() {
            parent::stampaCard();
                echo '  <span>dimensioni: '.$this->dimensions.'</span> <br>   
                        <span>materiale: '.$this->material.'</span>
                    </div>
                </div>
            ';
        }
    }

?>