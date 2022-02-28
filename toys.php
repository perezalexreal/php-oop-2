<?php 


class Toys {
    protected $rangeAge;

    public function __construct($_name, $_sku, $_brand, $_price, $_rangeAge)
    {
        $this->name = $_name;
        $this->sku = $_sku;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->rangeAge = $_rangeAge;
    }

    

    /**
     * Get the value of rangeAge
     */ 
    public function getRangeAge()
    {
        return $this->rangeAge;
    }

    /**
     * Set the value of rangeAge
     *
     * @return  self
     */ 
    public function setRangeAge($rangeAge)
    {
        $this->rangeAge = $rangeAge;

        return $this;
    }
}