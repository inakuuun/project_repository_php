<?php

    class Basket {
        // 商品名
        private $itemname;

        // 価格
        private $price;

        // 送料
        private $send_cost;

        // 数量
        private $buy_count;

        // 在庫
        private $stock;

        public function __constract($itemname,$price,$send_cost,$buy_count,$stock){
            $this->itemname = $itemname;
            $this->price = $price;
            $this->send_cost = $send_cost;
            $this->buy_count = $buy_count;
            $this->stock = $stock;
        }

        public function getItemName(){
            return $this->itemname;
        }

        public function getTaxPrice(){
            $tax = 1.08;
            $tax_price = $this->price * $tax;
            return $tax_price;
        }

        public function getSendCost(){
            return $this->itemname;
        }

        public function getBuyCount(){
            return $this->buy_count;
        }

        public function getStock(){
            return $this->stock;
        }
    }
?>