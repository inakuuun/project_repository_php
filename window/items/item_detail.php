<?php require_once '../../common/php/path.php'; ?>
<!-- トークン発行用ファイル -->
<?php require_once PATH::$CREATE_TOKEN_PHP; ?>
<!-- スタイルファイル読み込み -->
<link rel="stylesheet" href="<?php echo Path::$STYLE_CSS?>">
<link rel="stylesheet" href="<?php echo Path::$TEMPLATE_CSS?>">
<link rel="stylesheet" href="<?php echo Path::$HEADER_MENU_CSS?>">
<link rel="stylesheet" href="<?php echo Path::$SIDE_MENU_CSS?>">
<link rel="stylesheet" href="item_detail.css">

<?php require_once('item_detail_bg.php'); ?>
<!-- ヘッダーの作成 -->
<?php require_once Path::$HEADER_HTML; ?>
<div class="container">
    <!-- ヘッダーメニューの作成 -->
    <?php require_once Path::$HEADER_MENU_HTML;?>

    <!-- 遷移先を「basket_controller.php」に設定 -->
    <form method="post" action="<?php echo Path::$BASKET_ROOT_PATH;?>">
    <div class="main">
        <div class="main-left">
            <h3>商品詳細</h3>
            <div class="detail">
                <div class="detail-left">
                    <img src="<?php echo Path::$IMG_ROOT_PATH.$stmt[0]['img_path'];?>">
                </div>
                <div class="detail-right">
                    <h2><?php echo $stmt[0]['name'];?></span></h2>

                    <h4>
                        <span>価格：</span><?php echo number_format($stmt[0]['price']*1.08)."円"; ?><span>（税込）<?php echo '送料無料'; ?></span>
                    </h4>

                    <dl>
                        <dt>在庫：<?php echo $stmt[0]['itemstock'];?></dt>
                    </dl>
                    <div class="buy">
                        <div class="buy-count">
                            <span>個数：</span>
                            <!-- for文で在庫分ループ処理をすればいい。 -->
                            <select name="buy_count">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="buy-submit">
                            <input type="submit" value="買い物かごへ追加" />
                            <input type="submit" value="ご購入手続きへ"/>
                        </div>
                    </div>
                </div><!-- detail-right -->
            </div><!-- detail -->
        </div><!-- main-left -->
        <!-- サイドメニューの作成 -->
         <?php require_once Path::$SIDE_MENU_HTML; ?>
        <!-- 商品番号 -->
        <input type="hidden" name="itemno" value="<?php echo $stmt[0]['itemno'];?>" />
        <!-- 商品名 -->
        <input type="hidden" name="itemname" value="<?php echo $stmt[0]['name'];?>" />
        <!-- 画像パス -->
        <input type="hidden" name="img_path" value="<?php echo Path::$IMG_ROOT_PATH.$stmt[0]['img_path'];?>" />
        <!-- 価格 -->
        <input type="hidden" name="price" value="<?php echo $stmt[0]['price'];?>" />
        <!-- 送料 -->
        <input type="hidden" name="send_cost" value="<?php echo '送料無料'?>" />
        <!-- 在庫 -->
        <input type="hidden" name="itemstock" value="<?php echo $stmt[0]['itemstock'];?>" />
    </div><!-- main -->
    <!-- TODO: ここを見直す必要がある -->
    </form>
</div><!-- container -->
<!-- フッターの作成 -->
<?php require_once Path::$FOOTER_HTML;?>
