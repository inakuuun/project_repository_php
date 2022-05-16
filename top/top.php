<!-- スタイルの設定 -->
<link rel="stylesheet" href="../common/css/style.css">
<link rel="stylesheet" href="../common/css/template.css">
<link rel="stylesheet" href="../common/css/header_menu.css">
<link rel="stylesheet" href="../common/css/side_menu.css">
<link rel="stylesheet" href="top.css">

<!-- 処理の継承 -->
<?php require_once('top_bg.php')?>
<?php require_once('top_beans.php')?>

<!-- ヘッダーの作成 -->
<?php require_once('../common/html/header.php')?>
<?php

?>
<div class="container">
    <!-- ヘッダーメニューの作成 -->
    <?php require_once('../common/html/header_menu.php')?>
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
                            <td><span id="name"><a href="../window/items/item_detail_bg.php?itemno=<?php echo $item->getItemno();?>"><?php echo $item->getName();?></a></span></td>
                            <td><span id="price"><?php echo $item->getPrice();?></span></td>
                            <td><span id="category_name"><?php echo $item->getCategoryName();?></span></td>
                        </tr>
                    <?php endforeach;?>
                <?php endif;?>
            </table>
        </div><!-- main-left -->
        <!-- サイドメニューの作成 -->
        <?php require_once('../common/html/side_menu.php')?>
    </div><!-- main -->
</div><!-- container -->
<!-- フッターの作成 -->
<?php require_once('../common/html/footer.php')?>
