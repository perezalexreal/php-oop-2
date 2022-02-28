

<?php 

class User {
    protected $name;
    protected $surname;
    protected $registered;
    protected $address;
    protected $cart = [];
    protected $creditCard;
    
    public function __construct($_name, $_surname, $_registered, $_address, $_cart)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->registered = $_registered;
        $this->address = $_address;
        $this->cart = $_cart;
    }

    public function addCreditCard($_numbers, $_expirationDate, $_ccv) {
       return $this->creditCard = new CreditCard($_numbers , $this->name,$_expirationDate, $_ccv );
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


?>