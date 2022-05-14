<?php
    // データベースに接続
    require_once('../common/databases/stores.php');

    // ログインユーザーチェック
    try{
        // ユーザーテーブルからデータを取得
        $sql  = 
        ' SELECT'
        . '   userno'
        . '  ,user_mail'
        . '  ,user_password'
        . ' FROM users'
        . '   WHERE user_mail = :USER_MAIL'
        . '   AND user_password = :USER_PASSWORD';

        // 準備
        $stmt = $dbh->prepare($sql);
    
        // パラメータの設定
        $stmt->bindValue(':USER_MAIL', $_POST['user_mail'], PDO::PARAM_STR);
        $stmt->bindValue(':USER_PASSWORD', $_POST['user_password'], PDO::PARAM_STR);
    
        // ユーザーテーブルSQLの実行
        $stmt->execute();
    
        // 取得レコード分ループ処理
        foreach($stmt as $result)
        {
            // 取得したユーザテーブル情報をセッションに格納
            // セッションスタート
            session_start();
    
            // セッションに値を設定
            //ユーザno
            $_SESSION['userno'] = $result['userno'];
            //ユーザメール
            $_SESSION['user_mail'] = $result['user_mail'];
            // ユーザパスワード
            $_SESSION['user_password'] = $result['user_password'];
        }
        // データが1件以上ある場合
        if(!empty($_SESSION['userno']))
        {
            // トップページ画面へ遷移
            header('Location: ../top/top.php');
        }
        // データが1件もない場合
        else
        {
            // ログイン画面へポストバック
            header('Location: login.php');
        }

    }
    //処理でデータベースエラーが発生した時はこちらを実行する
    catch (PDOException $e)
    {
        print $e->getMessage();
    }

?>
