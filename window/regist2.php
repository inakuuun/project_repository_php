<?php
    // データベースに接続用の処理
    require_once('../common/database.php');
    
    /* データベースへ登録 */
    if(!empty($_POST['name'])||!empty($_POST['tel']))
    {
        try
        {
            // インサート文の作成
            $sql  = 'INSERT INTO user(name,tel) VALUES(:ONAMAE,:TEL)';
            $stmt = $dbh->prepare($sql);

            // パラメータの設定
            $stmt->bindParam(':ONAMAE', $_POST['name'], PDO::PARAM_STR);
            $stmt->bindParam(':TEL', $_POST['tel'], PDO::PARAM_STR);

            $stmt->execute();

            header('location: http://localhost:8888/regist.php');

            exit();
        }
        catch (PDOException $e) 
        {
            echo 'データベースにアクセスできません！'.$e->getMessage();
        }
    }
?>

<div id="drag-area">
    <?php
        $sql = 'SELECT * FROM user';
        $stmt = $dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        
        // foreach ($stmt as $result)
        // {
        //     echo '  <div class="drag" data-num="'.$result['id'].'" style="left:'.$result['left_x'].'px; top:'.$result['top_y'].'px;">'.PHP_EOL;
        //     echo '  <p><span class="name">'.$result['id'].' '.$result['name'].' '.$result['tel'].'</span></p>'.PHP_EOL;
        //     echo '  </div>'.PHP_EOL;
        // }
    ?>
    <table border="1" width="350">
        <tr>
            <th width="10%">ID</th>
            <th width="40%">名前</th>
            <th width="50%">電話番号</th>
        </tr>
        <?php foreach ($stmt as $result): ?>
            <tr>
                <td><span class="id"><?php echo $result['id'];?></span></td>
                <td><span class="name"><?php echo $result['name'];?></span></td>
                <td><span class="tel"><?php echo $result['tel'];?></span></td>
            </tr>
        <?php endforeach;?>
    </table>
</div>
