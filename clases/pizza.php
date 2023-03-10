<?php

include ("product.php");

class Pizza extends Product{
    private $category;

    public function __construct ($id, $name, $description, $picture, $quantity, $size, $category, $price){
        parent::__construct ($id, $name, $description, $picture, $quantity, $size, $price);
        $this->category=$category;

    }

    public static function calculatePrice($Plist){
        $total = 0;
        foreach($Plist as $list){
            $total = $total + $list;
               
        }
        return $total;
    }

    public function  calculateSQ(){
        $q = 0;
        $s = 0;
        if($this->quantity == 1){
            $q = 1;
        }
        if($this->quantity == 2){
            $q = 2;
        }
        if($this->quantity == 3){
            $q = 3;
        }


        if($this->size == "S"){
            $s = $this->price;
        }
        if($this->size == "M"){
            $s = $this->price + 1.00;
        }
        if($this->size == "L"){
            $s = $this->price + 2.00;
        }

        return $q*$s;
    }

    public function getCategoryName(){
        if($this->category == 1){
            return "Non Vegetarian";
        }elseif($this->category == 2){
            return "Vegetarian";
        }
    }

   


    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

}

?>