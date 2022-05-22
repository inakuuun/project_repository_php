<?php
    require_once 'basket_bean.php';

    // TODO: ここで値が取得できない。
    if(!empty($_POST['itemname']))
    {
        // postで受け取った商品名をセット
        $itemname = filter_input(INPUT_POST,'itemname');
    }
    
    if(!empty($_POST['img_path']))
    {
        // postで受け取った画像パスをセット
        $img_path = filter_input(INPUT_POST,'img_path');
    }

    if(!empty($_POST['price']))
    {
        // postで受け取った価格をセット
        $price = filter_input(INPUT_POST,'price');
    }

    if(!empty($_POST['send_cost']))
    {
        // postで受け取った送料をセット
        $send_cost = filter_input(INPUT_POST,'send_cost');
    }

    if(!empty($_POST['itemstock']))
    {
        // postで受け取った在庫数をセット
        $itemstock = filter_input(INPUT_POST,'itemstock');
    }

    if(!empty($_POST['buy_count']))
    {
        // postで受け取った購入数をセット
        $buy_count = filter_input(INPUT_POST,'buy_count');
    }

    $result = new Basket($itemname,$img_path,$price,$send_cost,$buy_count,$itemstock);

    // 配列の初期化
    // セッションスタート
    session_start();
    $basket = [];
    // バスケットのセッションがある場合
    if(!empty($_SESSION['basket']))
    {
        // セッションにある配列分ループ処理
        foreach($_SESSION['basket'] as $session_basket)
        {
            // セッションのインスタンスを配列に格納
            $basket[] = $session_basket;
        }
        // セッション情報を削除
        unset($_SESSION['basket']);
    }

    // 今回選択した配列を格納
    $basket[] = $result;

    // 購入商品をセッションに格納
    $_SESSION['basket'] = $basket;
?>
 