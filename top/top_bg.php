<?php
    // データベースに接続
    require_once('../common/databases/stores.php');
    require_once('top_beans.php');

    try{
        // SQLの作成
        $sql  = 
            ' SELECT '
        . '   items.itemno'
        . '   ,items.name'
        . '   ,items.img_path'
        . '   ,items.price'
        . '   ,categories.categoryno'
        . '   ,categories.category_name'
        . ' FROM items'
        . '   INNER JOIN categories'
        . '   ON items.categoryno = categories.categoryno'
        . ' WHERE'
        . '   items.categoryno in(:CATEGORYNO)'
        . '   AND items.name LIKE :VAGUENAME';

        // 準備
        $prepare = $dbh->prepare($sql);
        
        // カテゴリー検索
        $categoriesParam = 2;
        // 初期表示時
        
        // カテゴリー検索の値が空またはnullの時
        if(empty($_GET['categories']))
        {
            // 2を設定する
            $categoriesParam = 2;
        }
        // 検索実行時
        else
        {
            // getで取得したカテゴリー値を設定する
            $categoriesParam = $_GET['categories'];
        }
        
        // 曖昧検索
        // getで取得した曖昧検索値を設定する

        $vagueName = '';
        if(!empty($_GET['vagueName'])){
            $vagueName = $_GET['vagueName'];
        }
        
        // パラメータにバインド
        // カテゴリー検索
        $prepare->bindValue(':CATEGORYNO', $categoriesParam , PDO::PARAM_INT);
        // 曖昧検索
        // LIKE句はバインド時に%を入れないといけない
        $prepare->bindValue(':VAGUENAME', '%'.$vagueName.'%', PDO::PARAM_STR);
        
        // SQLの実行
        $prepare->execute();

        // SQLの情報を取得
        $stmt = $prepare->fetchAll(PDO::FETCH_ASSOC);

        // 取得レコード分ループ処理
        foreach($stmt as $result)
        {
            // レコードをコンストラクタで引数に渡し、Topクラスのインスタンスを作成する
            $top = new Top($result['itemno'],$result['name'],$result['img_path'],$result['price'],$result['categoryno'],$result['category_name']);

            // インスタンスした変数を配列に格納していく
            $itemArray[] = $top;
        }
    }
    // データベースエラーが発生した時にエラーを表示する
    catch (PDOException $e)
    {
        print $e->getMessage();
    }

?>
