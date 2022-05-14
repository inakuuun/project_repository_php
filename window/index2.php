<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>アドレス登録</title>
    </head>
    <body>
        <?php

            $con = mysql_connect('127.0.0.1', 'root', '1234');

            if (!$con) {
                exit('データベースに接続できませんでした。');
                echo 'データベースに接続できませんでした。';
            }

            $result = mysql_select_db('personal', $con);
            
            if (!$result) {
                exit('データベースを選択できませんでした。');
                echo 'データベースを選択できませんでした。';
            }

            $result = mysql_query('SET NAMES utf8', $con);
            if (!$result) {
                exit('文字コードを指定できませんでした。');
                echo '文字コードを指定できませんでした。';
            }

            $no   = $_REQUEST['no'];
            $name = $_REQUEST['name'];
            $tel  = $_REQUEST['tel'];

            $result = mysql_query("INSERT INTO user(no, name, tel) VALUES('$no', '$name', '$tel')", $con);
            if (!$result) {
                exit('データを登録できませんでした。');
                echo 'データを登録できませんでした。';
            }

            $con = mysql_close($con);
            if (!$con) {
                exit('データベースとの接続を閉じられませんでした。');
                echo 'データベースとの接続を閉じられませんでした。';
            }
        ?>

        <p>登録が完了しました。<br /><a href="index.html">戻る</a></p>
    </body>
</html>
