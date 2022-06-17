<?php
    // 買い物かごbeanファイルを読み込む
    require_once 'basket_bean.php';

    if(!empty($_GET['delflg']))
    {
        $delflg = filter_input(INPUT_GET,'delflg');
    }

    // 商品番号の値が存在する場合
    if(!empty($_POST['itemno']))
    {
        $itemno = filter_input(INPUT_POST,'itemno');
    }

    // 商品名の値が存在する場合
    if(!empty($_POST['itemname']))
    {
        // 商品名をセット
        $itemname = filter_input(INPUT_POST,'itemname');
    }
    
    // 画像パスの値が存在する場合
    if(!empty($_POST['img_path']))
    {
        // 画像パスをセット
        $img_path = filter_input(INPUT_POST,'img_path');
    }

    // 価格の値が存在する場合
    if(!empty($_POST['price']))
    {
        // 価格をセット
        $price = filter_input(INPUT_POST,'price');
    }

    // 送料の値が存在する場合
    if(!empty($_POST['send_cost']))
    {
        // 送料をセット
        $send_cost = filter_input(INPUT_POST,'send_cost');
    }

    // 在庫の値が存在する場合
    if(!empty($_POST['itemstock']))
    {
        // 在庫数をセット
        $itemstock = filter_input(INPUT_POST,'itemstock');
    }

    // 購入数の値が存在する場合
    if(!empty($_POST['buy_count']))
    {
        // 購入数をセット
        $buy_count = filter_input(INPUT_POST,'buy_count');
    }

    session_start();
    
    $csrf_token = $_SESSION['csrf_token'];
    // 配列の初期化
    $basket = [];
    // 画面遷移時のみ
    if($_SESSION['csrf_token'] == $csrf_token)
    {
        // バスケットクラスのインスタンス化
        $result = new Basket($itemno,$itemname,$img_path,$price,$send_cost,$buy_count,$itemstock);
        $basket[] = $result;
        unset($_SESSION['csrf_token']);
    }

    // 今回生成したインスタンスを配列に格納

    //  TODO: リロード時postのインスタンスが追加されるため、判定が必要
    // セッションの中身が存在する場合
    if(!empty($_SESSION['basket']))
    {
        // セッションにある配列分ループ処理
        foreach($_SESSION['basket'] as $session_basket)
        {
            // セッションに詰めているインスタンスを配列に格納
            $basket[] = $session_basket;
        }

        // セッションを削除
        unset($_SESSION['basket']);
    }

    unset($_SESSION['csrf_token']);
    // 購入商品情報をセッションに格納
    $_SESSION['basket'] = $basket;
    
?>
