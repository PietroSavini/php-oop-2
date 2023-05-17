<?php 
class Prodotto {
    private $img;
    private $title;
    private $description;
    private $quantity;
    private $price;
    private $category;
    
    public function __construct($_img,$_title,$_description,$_quantity, $_price, $_category) {
        $this->img = $_img;
        $this->title = $_title;
        $this->description = $_description;
        $this->quantity = $_quantity;
        $this->price = $_price;
        $this->category = $_category;
    }

    public function stampaCard() {
        if($this->category === "cane"){
            echo '<div class="card dog">
                    <div class="card-head">
                        <i class="fa-solid fa-dog"></i>
                        <img src="'. $this->img .'" alt="">
                    </div>
                    <h2>'. $this->title.'</h2>
                    <p>'.$this->description.'</p>
                    <div class="status">
                        <span>quantità: '.$this->quantity.'</span>
                        <span>€ '.$this->price.'</span>
                    </div>
                  </div>';
        }else if($this->category === "gatto"){
            echo '<div class="card cat">
                    <div class="card-head">
                        <i class="fa-solid fa-cat"></i>
                        <img src="'. $this->img .'" alt="">
                    </div>
                    <h2>'. $this->title.'</h2>
                    <p>'.$this->description.'</p>
                    <div class="status">
                        <span>quantità: '.$this->quantity.'</span>
                        <span>€ '.$this->price.'</span>
                    </div>
                  </div>';
        }
    }
}
?>