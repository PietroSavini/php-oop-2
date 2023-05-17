<?php 
class Prodotto {
    private $img;
    private $title;
    private $description;
    private $quantity;
    private $prezzo;
    private $category;
    

    public function __construct($_img,$_title,$_description,$_quantity, $_prezzo, $_category) {
        $this->img = $_img;
        $this->title = $_title;
        $this->description = $_description;
        $this->quantity = $_quantity;
        $this->prezzo = $_prezzo;
        $this->category = $_category;
    }

    public function stampaCard() {
        if($this->category === "cane"){
            echo '<div class="card">
                    <img src="'. $this->img .'alt="">"
                    <h2></h2>
                    <p></p>
                    
                  </div>';
        }
    }
}
?>