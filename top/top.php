<!-- パス設定ファイルの読み込み -->
<?php require_once '../path.php'; ?>
<!-- スタイルの設定 -->
<link rel="stylesheet" href="<?php echo Path::$STYLE_CSS?>">
<link rel="stylesheet" href="<?php echo Path::$TEMPLATE_CSS?>">
<link rel="stylesheet" href="<?php echo Path::$HEADER_MENU_CSS?>">
<link rel="stylesheet" href="<?php echo Path::$SIDE_MENU_CSS?>">
<link rel="stylesheet" href="top.css">

<!-- 処理の継承 -->
<?php require_once('top_bg.php')?>
<?php require_once('top_bean.php')?>

<!-- ヘッダーの作成 -->
<?php require_once Path::$HEADER_HTML; ?>
<div class="container">
    <!-- ヘッダーメニューの作成 -->
    <?php require_once Path::$HEADER_MENU_HTML; ?>
    <div class="main">
        <div class="main-left">
            <h3>商品一覧</h3>
            <table width="100%">
                <tr>
                    <th width="20%">商品画像</th>
                    <th width="40%">商品名</th>
                    <th width="20%">価格</th>
                    <th width="20%">カテゴリ</th>
                </tr>
                <?php if(!empty($itemArray)):?>
                    <?php foreach($itemArray as $item):?>
                        <tr>
                            <td><span id="image_path"><img src="<?php echo $item->getImagePath();?>" /></span></td>
                            <td><span id="name"><a href="../window/items/item_detail.php?itemno=<?php echo $item->getItemno();?>"><?php echo $item->getName();?></a></span></td>
                            <td><span id="price"><?php echo $item->getPrice();?></span></td>
                            <td><span id="category_name"><?php echo $item->getCategoryName();?></span></td>
                        </tr>
                    <?php endforeach;?>
                <?php endif;?>
            </table>
        </div><!-- main-left -->
        <!-- サイドメニューの作成 -->
        <?php require_once Path::$SIDE_MENU_HTML; ?>
    </div><!-- main -->
</div><!-- container -->
<!-- フッターの作成 -->
<?php require_once Path::$FOOTER_HTML; ?>
