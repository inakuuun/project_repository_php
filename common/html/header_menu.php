<?php require_once '../php/path.php'; ?>
    <nav class="top_navi">
        <ul class="display_flex">
            <a href="<?php echo Path::$TOP_ROOT_PATH;?>"><li>トップ</li></a>
            <a href="#"><li>新着一覧</li></a>
            <a href="<?php echo Path::$BASKET_ROOT_PATH;?>"><li>買い物かご</li></a>
            <!-- 非会員の時は非表示にする -->
            <a href="#"><li>注文一覧</li></a>
        </ul>
    </nav>
