<?php
    // データベースに接続
    require_once('../common/databases/stores.php');
    /**
     * @summary ログインユーザーチェック
     * @remarks ログインユーザの情報がデータベースに存在するかをチェックする。
     */

    session_start();
    $err[] = array();
    $errFlg = true;
    $pattern = '/^[a-zA-Z0-9]*$/';

    $user_password = filter_input(INPUT_POST, "user_password");
    $user_mail = filter_input(INPUT_POST, "user_mail");

    // メールアドレスがnullまたは空の場合
    if(empty($user_mail))
    {
        $err[1] = '・メールアドレスは必須項目です。';
        $errFlg = false;
    }

    // パスワードがnullまたは空の場合
    if(empty($user_password))
    {
        $err[2] = '・パスワードは必須項目です。';
        $errFlg = false;
    }

    // 半角英数字以外の場合
    if(!preg_match($pattern,$user_password))
    {
        $err[3] = "・パスワードは正しい形式で入力してください。";
        $errFlg = false;
    }

    // パスワードが8文字未満16文字を超える場合
    if(strlen($user_password) < 8 ||  16 < strlen($user_password))
    {
        $err[4] = "・パスワードは8文字以上16文字以内で入力してください。";
        $errFlg = false;
    }

    // メールアドレスまたはパスワードのエラーに引っかかった場合
    if(!$errFlg)
    {
        $err[0] = "・メールアドレス、もしくはパスワードが間違っています。";
        // ユーザパスワード
        $_SESSION['err_message'] = $err;
        // ログイン画面へポストバック
        header('Location: login.php');

        return;
    }

    

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
        $prepare = $dbh->prepare($sql);
    
        // パラメータの設定
        $prepare->bindValue(':USER_MAIL', $_POST['user_mail'], PDO::PARAM_STR);
        $prepare->bindValue(':USER_PASSWORD', $_POST['user_password'], PDO::PARAM_STR);
    
        // ユーザーテーブルSQLの実行
        $prepare->execute();

        // テーブル情報を配列で取得
        $stmt[] = $prepare->fetchAll(PDO::FETCH_ASSOC);
    
        // レコードが1件の場合
        if(count($stmt) == 1)
        {
            // ユーザno
            $_SESSION['userno'] = $result['userno'];
            // ユーザメール
            $_SESSION['user_mail'] = $result['user_mail'];
            // ユーザパスワード
            $_SESSION['user_password'] = $result['user_password'];
            // トップページ画面へ遷移
            header('Location: ../top/top.php');
        }

        // レコードが1件もない場合
        else if(count($stmt) <= 0)
        {
            // ログイン画面へポストバック
            header('Location: login.php');   
        }
        // レコードが複数件ある場合
        else
        {
            echo "ユーザーが複数存在します。";
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
