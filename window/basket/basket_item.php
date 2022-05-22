<!-- スタイルの設定 -->
<?php require_once('../../path.php');?>
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
        <div class="main-left">
            <!-- 配列の数ループ処理 -->
            <?php foreach($basket as $bas):?>
                <div class="basket">
                    <div class="buy-image">
                        <img src="<?php echo $bas->getImagePath(); ?>"/>
                    </div>
                    <div class="buy-content">
                        <!-- 商品名を出力 -->
                        <p><?php echo $bas->getItemName(); ?></p>
                        <div class="buy">
                            <div class="buy-cost">
                                <!-- 税込価格を出力 -->
                                <p><?php echo number_format($bas->getTaxPrice());?><span>円（税込）送料無料</span></p>
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
                            <!-- TODO: 削除用処理画面を作成 -->
                            <p><a href="#">削除</a></p>
                        </div>
                    </div><!-- buy-content -->
                </div><!-- basket -->
            <?php endforeach;?>
         </div><!-- main-left -->
        <!-- サイドメニューの作成 -->
        <div>
            <form method="post" action="">
                <input type="submit">
            </form>
        </div>
    </div><!-- main -->
</div><!-- container -->
<!-- フッターの作成 -->
<?php require_once Path::$FOOTER_HTML; ?>
