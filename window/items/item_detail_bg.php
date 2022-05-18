<?php
    // データベースに接続
    require_once('../../common/databases/stores.php');
    
     $itemno = $_GET['itemno'];
    $wherePart = 'itemno = :ITEMNO';
    
    try{
        $sql = 
          "SELECT 
          items.itemno
          ,items.name
          ,items.img_path
          ,items.price
          ,items.itemstock
          ,categories.category_name
          ,items.description
        FROM
          items
          INNER JOIN categories
          ON items.categoryno = categories.categoryno
        WHERE
          $wherePart";

        // 準備
        $prepare = $dbh->prepare($sql);

        // パラメータにバインド
        // 商品番号
        $prepare->bindValue(':ITEMNO', $itemno , PDO::PARAM_INT);

        // SQLの実行
        $prepare->execute();

        // SQLの情報を配列で取得
        $stmt = $prepare->fetchAll(PDO::FETCH_ASSOC);
        $imageRoot = '../../common/images/items';

    }catch(PDOException $e){

    }
?> 