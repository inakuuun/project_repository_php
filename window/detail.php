<?php require_once('../common/database.php')?>
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