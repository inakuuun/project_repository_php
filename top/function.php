<?php

/** 
 * XSS対策：エスケープ処理
 * 
 * @param string $str 対象の文字列
 * @return string 処理された文字列
 */
function h($str){
    // XSS対策　：　エスケープ処理
    // 意味のない文字列として
    return htmlspecialChars($str, ENT_QUOTES, 'UTF-8');
}
/** 
 * CSRF対策
 * @param void
 * @return string $csrf_token
 */
function setToken(){
    // トークンを生成
    // フォームからそのトークンを送信
    // 送信後の画面でそのトークンを照会
    // トークンを削除
    
    session_start();
    $csrf_token = bin2hex(random_bytes(32));

    $_SESSION["csrf_tokem"] = $csrf_tokem;

    return $csrf_token;
}
?>