<?php 

class CreditCard {
 
    protected $numbers;
    protected $accountHolder;
    protected $expirationDate;
    protected $ccv; 

    public function __construct($_numbers, $_accountHolder, $_expirationDate, $_ccv)
    {
        $this->numbers = $_numbers;
        $this->accountHolder = $_accountHolder;
        $this->expirationDate = $_expirationDate;
        $this->ccv = $_ccv;
    }

    // public function checkExpirationDate() {

    //     $second_date = $this->expirationDate;
    //     $first_date = new DateTime('now');
    //     $difference = $first_date->diff($second_date);
    //     if($this->expirationDate > ){
    //         echo  date_format($this->;, 'Y-m-d');
    //     }
    // }
    /**
     * Get the value of numbers
     */ 
    public function getNumbers()
    {
        return $this->numbers;
    }

    /**
     * Set the value of numbers
     *
     * @return  self
     */ 
    public function setNumbers($numbers)
    {
        $this->numbers = $numbers;

        return $this;
    }

    /**
     * Get the value of accountHolder
     */ 
    public function getAccountHolder()
    {
        return $this->accountHolder;
    }

    /**
     * Set the value of accountHolder
     *
     * @return  self
     */ 
    public function setAccountHolder($accountHolder)
    {
        $this->accountHolder = $accountHolder;

        return $this;
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

    /**
     * Get the value of ccv
     */ 
    public function getCcv()
    {
        return $this->ccv;
    }

    /**
     * Set the value of ccv
     *
     * @return  self
     */ 
    public function setCcv($ccv)
    {
        $this->ccv = $ccv;

        return $this;
    }
}


?>