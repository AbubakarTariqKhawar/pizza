<?php

    abstract class Product{
        protected $id;
        protected $name;
        protected $description;
        protected $picture;
        protected $quantity;
        protected $size;
        protected $price;

        abstract public static function calculatePrice($Plist);

        abstract public function  calculateSQ();


        public function __construct($id, $name, $description, $picture, $quantity, $size, $price){
            $this->id = $id;
            $this->name = $name;
            $this->description = $description;
            $this->picture = $picture;
            $this->quantity = $quantity;
            $this->size = $size;
            $this->price = $price;
        }

        

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
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
         * Get the value of name
         */ 
        public function getDescription()
        {
                return $this->description;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setDescription($description)
        {
                $this->description = $description;

                
                return $this;
        }

        /**
         * Get the value of picture
         */ 
        public function getPicture()
        {
                return $this->picture;
        }

        /**
         * Set the value of picture
         *
         * @return  self
         */ 
        public function setPicture($picture)
        {
                $this->picture = $picture;

                return $this;
        }

        /**
         * Get the value of price
         */ 
        public function getPrice()
        {
                return $this->price;
        }

        /**
         * Set the value of price
         *
         * @return  self
         */ 
        public function setPrice($price)
        {
                $this->price = $price;

                return $this;
        }

        /**
         * Get the value of quantity
         */ 
        public function getQuantity()
        {
                return $this->quantity;
        }

        /**
         * Set the value of quantity
         *
         * @return  self
         */ 
        public function setQuantity($quantity)
        {
                $this->quantity = $quantity;

                return $this;
        }

        /**
         * Get the value of size
         */ 
        public function getSize()
        {
                return $this->size;
        }

        /**
         * Set the value of size
         *
         * @return  self
         */ 
        public function setSize($size)
        {
                $this->size = $size;

                return $this;
        }
    }

?>