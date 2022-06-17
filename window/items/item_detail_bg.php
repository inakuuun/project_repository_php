<?php
    // データベースに接続
    require_once('../../common/databases/stores.php');
    
    /**
     * @summary where文を構成
     */
    $wherePart = 'itemno = :ITEMNO';
    
    try{
      // 商品テーブルとカテゴリーテーブルから情報を取得
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
          $wherePart ";

        // 準備
        $prepare = $dbh->prepare($sql);

        // 商品番号の取得
        $itemno = $_GET['itemno'];
        // 商品番号をバインド
        $prepare->bindValue(':ITEMNO', $itemno , PDO::PARAM_INT);

        // SQLの実行
        $prepare->execute();

        // SQLの情報を配列で取得
        $stmt = $prepare->fetchAll(PDO::FETCH_ASSOC);

    }catch(PDOException $e){
      echo $e->getMessage();
    }
?>
