<!-- スタイルの設定 -->
<link rel="stylesheet" href="http://localhost:8888/stores/common/css/style.css">
<link rel="stylesheet" href="http://localhost:8888/stores/common/css/template.css">
<link rel="stylesheet" href="http://localhost:8888/stores/common/css/header_menu.css">
<link rel="stylesheet" href="http://localhost:8888/stores/common/css/side_menu.css">
<link rel="stylesheet" href="item_detail.css">

<?php require_once('item_detail_bg.php')?>
<!-- ヘッダーの作成 -->
<?php require_once('../../common/html/header.php')?>
<div class="container">
    <!-- ヘッダーメニューの作成 -->
    <?php require_once('../../common/html/header_menu.php')?>

    <div class="main">
        <div class="main-left">
            <h3>商品詳細</h3>
            <div class="detail" style="display:flex;">
                <div class="detail-left">
                    <img src="<?php echo $imageRoot.$stmt[0]['img_path'];?>">
                </div>
                <div class="detail-right">
                    <dl>
                        <dt>商品名：</dt>
                        <dd><?php echo $stmt[0]['name'];?></dd>
                    </dl>
                    <dl>
                        <dt>価格：</dt>
                        <dd><?php echo $stmt[0]['price'];?></dd>
                    </dl>
                    <dl>
                        <dt>在庫</dt>
                        <dd><?php echo $stmt[0]['itemstock'];?></dd>
                    </dl>
                    <dl>
                        <dt>カテゴリー</dt>
                        <dd><?php echo $stmt[0]['category_name'];?></dd>
                    </dl>
                    <button type="button" onclick="location.href='http:/\/localhost:8888/stores/top/top.php'">戻る</button>
                    <button type="button" onclick="location.href='http:/\/localhost:8888/stores/top/top.php'">買い物かごへ入れる</button>
                </div>
            </div>
        </div><!-- main-left -->
        <!-- サイドメニューの作成 -->
         <?php require_once('../../common/html/side_menu.php')?>
    </div><!-- main -->
</div><!-- container -->
<!-- フッターの作成 -->
<?php require_once('../../common/html/footer.php')?>
