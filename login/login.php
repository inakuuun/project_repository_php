<?php
  $user = 'ログイン';
  $member = '新規会員登録';
  $title = 'ログインページ';
  setcookie('user',$user);
  setcookie('member',$member);
  setcookie('title',$title);
  session_start();
  if(!empty($_SESSION['err_message']))
  {
    $err = $_SESSION['err_message'];
    unset($_SESSION['err_message']);
  }
?>

<!-- スタイルの設定 -->
<link rel="stylesheet" href="../common/css/style.css">
<link rel="stylesheet" href="../common/css/template.css">
<link rel="stylesheet" href="login.css">

<!-- ヘッダーの作成 -->
<?php require_once('../common/html/header.php')?>
    <div class="wrapper">
      <div class="tpad_80px">
        <h4>メールアドレスとパスワードを入力してください。</h4>
      </div>
      <div class="error w_450px mrg-auto">
        <?php 
          if(!empty($err)):?>
            <p><?php if(!empty($err[0])){echo $err[0];} ?></p>
            <p><?php if(!empty($err[1])){echo $err[1];} ?></p>
            <p><?php if(!empty($err[2])){echo $err[2];} ?></p>
            <p><?php if(!empty($err[3])){echo $err[3];} ?></p>
            <p><?php if(!empty($err[4])){echo $err[4];} ?></p>
        <?php 
          endif;?>
      </div>
      <form action="loginCheck.php" method="POST">
        <div class="main">
          <span>メールアドレス：<input type="text" name="user_mail"></span>
          <span>パスワード：<input type="text" name="user_password"></span>
          <span class="login-btn"><input type="submit" value="ログイン"></span>
        </div>
        <div class="clear"></div>
      </form>
    </div>
    <?php require_once('../common/html/footer.php')?>
  </body>
</html>
