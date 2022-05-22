<?php
    /**
     * @summary 商品一覧bean
     * @remarks 商品一覧beanクラス
     */
    class Top {
        // 商品番号
        private $itemno;
        // 商品名
        private $name;
        // 画像パス
        private $imgPath = '../common/images/items';
        // 価格
        private $price;
        // カテゴリー番号
        private $categoryno;
        // カテゴリー名
        private $categoryName;

        /**
         * @summary コンストラクタ
         * @param itemno 商品番号
         * @param name 商品名
         * @param imgPath 画像パス
         * @param price 価格
         * @param categoryno カテゴリー番号
         * @param categoryName カテゴリー名
         */
        public function __construct($itemno, $name, $imgPath,$price,$categoryno,$categoryName) {
            // 商品番号をセット
            $this->itemno = $itemno;
            // 商品名をセット
            $this->name = $name;
            // 画像パスをセット
            $this->imgPath = $this->imgPath.$imgPath;
            // 価格をセット
            $this->price = $price;
            // カテゴリー番号をセット
            $this->categoryno = $categoryno;
            // カテゴリー名をセット
            $this->categoryName = $categoryName;
        }

        // 商品番号getter
        public function getItemno(){
            return $this->itemno;
        }

        // 商品名getter
        public function getName(){
            return $this->name;
        }

        // 画像パスgetter
        public function getImagePath(){
            return $this->imgPath;
        }

        // 価格getter
        public function getPrice(){
            return $this->price;
        }

        // カテゴリー番号getter
        public function getCategoryNo(){
            return $this->categoryno;
        }

        // カテゴリー名getter
        public function getCategoryName(){
            return $this->categoryName;
        }
    }
?>
