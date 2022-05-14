<?php
  $user = 'いなくん';
  $member = '新規会員登録';

  // セッションに値を設定
  setcookie('user',$user);
  setcookie('member',$member);
  setcookie('attach',$attach);
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>8888-personal</title>
    <link rel="stylesheet" href="../common/css/style.css">
  </head>
  
  <body>
    <div id="wrapper">
      <div id="input_form">
        <form action="regist.php" method="POST">
          名前：<input type="text" name="name">
          <br />
          TEL：<input type="text" name="tel" value="0">
          <input type="submit" value="登録">
        </form>
      </div>
    </div>
  </body>
</html>
