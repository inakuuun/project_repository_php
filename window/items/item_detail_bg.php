<?php
    // データベースに接続
    require_once('../common/databases/stores.php');
    
    $itemno = $_GET['itemno'];
    $wherePart = 'itemno = :ITEMNO';
    
    try{
        $sql = 
          ' SELECT '
        . '   itemno'
        . '   ,name'
        . '   ,img_path'
        . '   ,price'
        . '   ,itemstock'
        . '   ,description'
        . ' FROM'
        . '   items'
        . ' WHERE'
        .     $wherePart ;

        // 準備
        $prepare = $dbh->prepare($sql);

        // パラメータにバインド
        // 商品番号
        $prepare->bindValue(':ITEMNO', $itemno , PDO::PARAM_INT);

        // SQLの実行
        $prepare->execute();


        header('Location: item_detail.php');
    }catch(PDOException $e){

    }
?>