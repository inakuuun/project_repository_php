<?php
  $user = 'ログイン';
  $member = '新規会員登録';
  $title = 'ログインページ';
  setcookie('user',$user);
  setcookie('member',$member);
  setcookie('title',$title);
?>

<link rel="stylesheet" href="../common/css/style.css">
<link rel="stylesheet" href="../common/css/template.css">
<link rel="stylesheet" href="login.css">

<?php require_once('../common/html/header.php')?>
    <div class="wrapper">
      <div class="tpad_80px">
        <h4>メールアドレスとパスワードを入力してください。</h4>
      </div>
      <div class="error w_450px mrg-auto hidden-control">
          <p>・メールアドレス、もしくはパスワードが間違っています。</p>
          <p>・パスワードは正しい形式で入力してください。</p>
          <p>・パスワードは必須項目です。</p>
          <p>・メールアドレスは必須項目です。</p>
          <p>・パスワードは8文字以上16文字以内で入力してください。</p>
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
