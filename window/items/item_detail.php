<link rel="stylesheet" href="../../common/css/style.css">
<link rel="stylesheet" href="../../common/css/template.css">
<link rel="stylesheet" href="../../common/css/header_menu.css">
<link rel="stylesheet" href="../../common/css/side_menu.css">
<link rel="stylesheet" href="item_detail.css">

<?php require_once('../../common/html/header.php')?>

<div class="container">
    <nav class="top_navi">
        <ul class="display_flex">
            <a href="#"><li>トップ</li></a>
            <a href="#"><li>新着一覧</li></a>
            <a href="#"><li>買い物かご</li></a>
            <!-- 非会員の時は非表示にする -->
            <a href="#"><li>注文一覧</li></a>
        </ul>
    </nav>
    <div class="main">
        <?php require_once('../../common/html/side_menu.php')?>
        <div class="main-right">
            <h3>商品詳細</h3>
            <table width="100%">
                <tr>
                    <th width="20%">商品画像</th>
                    <th width="40%">商品名</th>
                    <th width="20%">価格</th>
                    <th width="20%">カテゴリ</th>
                </tr>
                <?php foreach($itemArray as $item):?>
                    <tr>
                        <td><span id="image_path"><img src="<?php echo $item->getImagePath();?>" /></span></td>
                        <td><span id="name"><a href="../window/item_detail.php"><?php echo $item->getName();?></a></span></td>
                        <td><span id="price"><?php echo $item->getPrice();?></span></td>
                        <td><span id="category_name"><?php echo $item->getCategoryName();?></span></td>
                    </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</div>

<?php require_once('../../common/html/footer.php')?>