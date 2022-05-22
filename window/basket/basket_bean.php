<?php
    /**
     * @summary 買い物かごbean
     * @remarks 買い物かごbeanクラス
     */
    class Basket {
        // 商品名
        private $itemname;
        // 画像パス
        private $image_path;
        // 価格
        private $price;
        // 送料
        private $send_cost;
        // 数量
        private $buy_count;
        // 在庫
        private $stock;

         /**
         * @summary コンストラクタ
         * @param itemname 商品名
         * @param img_path 画像パス
         * @param price 価格
         * @param send_cost 送料
         * @param buy_count 購入数
         * @param stock 在庫数
         */

        public function __construct($itemname,$image_path,$price,$send_cost,$buy_count,$stock){
            // 商品名をセット
            $this->itemname = $itemname;
            // 画像パスをセット
            $this->image_path = $image_path;
            // 価格をセット
            $this->price = $price;
            // 送料をセット
            $this->send_cost = $send_cost;
            // 購入数をセット
            $this->buy_count = $buy_count;
            // 在庫数をセット
            $this->stock = $stock;
        }

        // 商品名getter
        public function getItemName(){
            return $this->itemname;
        }

        // 画像パスgetter
        public function getImagePath(){
            return $this->image_path;
        }

        // 税込価格getter
        public function getTaxPrice(){
            $tax = 1.08;
            $tax_price = $this->price * $tax;
            return $tax_price;
        }

        // 送料getter
        public function getSendCost(){
            return $this->itemname;
        }

        // 購入数getter
        public function getBuyCount(){
            return $this->buy_count;
        }

        // 在庫数getter
        public function getStock(){
            return $this->stock;
        }
    }
?>