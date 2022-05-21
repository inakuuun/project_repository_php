<!-- スタイルの設定 -->
<?php require_once('../../path.php')?>
<link rel="stylesheet" href="<?php echo Path::$STYLE_CSS?>">
<link rel="stylesheet" href="<?php echo Path::$TEMPLATE_CSS?>">
<link rel="stylesheet" href="<?php echo Path::$HEADER_MENU_CSS?>">
<link rel="stylesheet" href="<?php echo Path::$SIDE_MENU_CSS?>">
<link rel="stylesheet" href="basket_item.css">

<!-- 処理の継承 -->
<?php require_once('basket_item_bg.php')?>
<!-- ヘッダーの作成 -->
<?php require_once Path::$HEADER_HTML; ?>
<div class="container">
    <!-- ヘッダーメニューの作成 -->
    <?php require_once Path::$HEADER_MENU_HTML; ?>
    <div class="main">
        <div class="main-left" style="display:flex;">
            <div class="buy-image">
                <img src=""/>
            </div>
            <div class="buy-content">
                <p><?php echo "商品名"; ?></p>
                <div class="buy">
                    <div class="buy-cost">
                        <p><?php echo "1,782";?><span>円（税込）送料無料</span></p>
                    </div>
                    <div class="buy-count">
                        <span>数量：</span>
                        <select name="buy-count">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
                <div class="stock">
                    <p>在庫あり</p>
                    <p><a>削除</a></p>
                </div>
            </div>
        </div><!-- main-left -->
        <!-- サイドメニューの作成 -->
        <div>
            <button>
        </div>
        <?php require_once Path::$SIDE_MENU_HTML; ?>
    </div><!-- main -->
</div><!-- container -->
<!-- フッターの作成 -->
<?php require_once Path::$FOOTER_HTML; ?>
