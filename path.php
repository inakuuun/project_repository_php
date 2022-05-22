<!-- グローバル変数の作成 -->
<?php
    class Path {
        // ================================================================================
        //          共通HTML
        // ================================================================================
        /**
         * @summary ヘッダー
         */
        public static $HEADER_HTML = 'http://localhost:8888/stores/common/html/header.php';
        /**
         * @summary ヘッダーメニュー
         */
        public static $HEADER_MENU_HTML = 'http://localhost:8888/stores/common/html/header_menu.php';
         /**
         * @summary サイドメニュー
         */
        public static $SIDE_MENU_HTML = 'http://localhost:8888/stores/common/html/side_menu.php';
         /**
         * @summary フッター
         */
        public static $FOOTER_HTML = 'http://localhost:8888/stores/common/html/footer.php';

        // ================================================================================
        //          共通CSS
        // ================================================================================
        /**
         * @summary 共通
         */
        public static $STYLE_CSS = 'http://localhost:8888/stores/common/css/style.css';
        /**
         * @summary テンプレート
         */
        public static $TEMPLATE_CSS = 'http://localhost:8888/stores/common/css/template.css';
        /**
         * @summary ヘッダーメニュー
         */
        public static $HEADER_MENU_CSS = 'http://localhost:8888/stores/common/css/header_menu.css';
        /**
         * @summary サイドメニュー
         */
        public static $SIDE_MENU_CSS = 'http://localhost:8888/stores/common/css/side_menu.css';

        // ================================================================================
        //          画像
        // ================================================================================
        /**
         * @summary 商品画像ルートパス
         */
        public static $IMG_ROOT_PATH = 'http://localhost:8888/stores/common/images/items/';

        // 買い物かご画面
        public static $BASKET_ROOT_PATH = 'http://localhost:8888/stores/window/basket/basket_item.php';

        // トップページ
        public static $TOP_ROOT_PATH = 'http://localhost:8888/stores/top/top.php';
        
    }

?>
