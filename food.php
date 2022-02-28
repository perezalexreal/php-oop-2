<?php 
require_once __DIR__ . "/product.php";

class Food  extends Product {
    protected $expirationDate;

    public function __construct($_name, $_sku, $_brand, $_price, $_expirationDate)
    {
        $this->name = $_name;
        $this->sku = $_sku;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->expirationDate = $_expirationDate;
    }

    /**
     * Get the value of expirationDate
     */ 
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Set the value of expirationDate
     *
     * @return  self
     */ 
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }
}


//$pinco = new Food();

// echo var_dump($pinco);

?>