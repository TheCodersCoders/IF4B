<?php
    class Mobil{
        // Property
        public $warna;
        public $merek;
        private $harga;
        // Method
        function maju(){
            return "Mobil Bergerak maju";
        }
        function setHarga($val){
            $this->harga = $val;
        }
        function getHarga(){
            return $this->harga;
        }
    }
?>