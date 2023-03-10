<?php

    abstract class Orders{
        protected $OrdId;
        protected $OrdUseId;
        protected $OrdAddId;
        protected $OrdCreatedDate;
        protected $OrdAddIns;
        protected $OrdPaid;
        protected $OrdRecived;


        public function __construct($OrdId, $OrdUseId, $OrdAddId, $OrdCreatedDate, $OrdAddIns, $OrdPaid, $OrdRecived){
            $this->OrdId = $OrdId;
            $this->OrdUseId = $OrdUseId;
            $this->OrdAddId = $OrdAddId;
            $this->OrdCreatedDate = $OrdCreatedDate;
            $this->OrdAddIns = $OrdAddIns;
            $this->OrdPaid = $OrdPaid;
            $this->OrdRecived = $OrdRecived;
        }

        

        /**
         * Get the value of id
         */ 
        public function getOrdId()
        {
                return $this->OrdId;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setOrdId($OrdId)
        {
                $this->OrdId = $OrdId;

                return $this;
        }

        /**
         * Get the value of name
         */ 
        public function getOrdUseId()
        {
                return $this->OrdUseId;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setOrdUseId($OrdUseId)
        {
                $this->OrdUseId = $OrdUseId;

                return $this;
        }

         /**
         * Get the value of name
         */ 
        public function getOrdAddId()
        {
                return $this->OrdAddId;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setOrdAddId($OrdAddId)
        {
                $this->OrdAddId = $OrdAddId;

                
                return $this;
        }

        /**
         * Get the value of picture
         */ 
        public function getOrdCreatedDate()
        {
                return $this->OrdCreatedDate;
        }

        /**
         * Set the value of picture
         *
         * @return  self
         */ 
        public function setOrdCreatedDate($OrdCreatedDate)
        {
                $this->OrdCreatedDate = $OrdCreatedDate;

                return $this;
        }

        /**
         * Get the value of price
         */ 
        public function getOrdAddIns()
        {
                return $this->OrdAddIns;
        }

        /**
         * Set the value of price
         *
         * @return  self
         */ 
        public function setOrdAddIns($OrdAddIns)
        {
                $this->OrdAddIns = $OrdAddIns;

                return $this;
        }

        /**
         * Get the value of quantity
         */ 
        public function getOrdPaid()
        {
                return $this->OrdPaid;
        }

        /**
         * Set the value of quantity
         *
         * @return  self
         */ 
        public function setOrdPaid($OrdPaid)
        {
                $this->OrdPaid = $OrdPaid;

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
        public function setOrdRecived($OrdRecived)
        {
                $this->OrdRecived = $OrdRecived;

                return $this;
        }
    }

?>