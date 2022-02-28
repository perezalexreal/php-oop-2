

<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

require_once __DIR__ . "/food.php";
require_once __DIR__ . "/toys.php";
require_once __DIR__ . "/product.php";
require_once __DIR__ . "/creditCard.php";

class User {
    protected $name;
    protected $surname;
    protected $registered = false;
    protected $address;
    protected $cart = [];
    protected $creditCard;
    
    public function __construct($_name, $_surname, $_registered, $_address)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->registered = $_registered;
        $this->address = $_address;
    }

    public function addCreditCard($_numbers, $_expirationDate, $_ccv) {
       return $this->creditCard = new CreditCard($_numbers , $this->name,$_expirationDate, $_ccv );
    }


    public function isRegistered() {
        if($this->registered){
            return "Sconto applicato del 20%";
        }
        return "Nessun codice applicato";
    }

    public function addToCart($productToAdd){
        return $this->cart = $productToAdd;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */ 
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of registered
     */ 
    public function getRegistered()
    {
        return $this->registered;
    }

    /**
     * Set the value of registered
     *
     * @return  self
     */ 
    public function setRegistered($registered)
    {
        $this->registered = $registered;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of cart
     */ 
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * Set the value of cart
     *
     * @return  self
     */ 
    public function setCart($cart)
    {
        $this->cart = $cart;

        return $this;
    }
}


$ossoFinto = new Toys("Osso", '34992230202ks', 'Cuccioli3', 39, "+2");

$pincoPallino = new User("Alexander", "Perez", true, "Via Roma 12");

$pincoPallino->addToCart($ossoFinto);

echo $pincoPallino->isRegistered();

$pincoPallino->addCreditCard("4333 1234 1548 4848", "20-12-1999", '313');

echo var_dump($pincoPallino);

?>

