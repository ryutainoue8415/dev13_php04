<?php
session_start();

//ログアウトはいつも同じ

//データの残りをクリアにするためセッション配列を空にする
$_SESSION = array();
//ブラウザのクッキーの有効期間を現在より昔にしてあげる
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
}

//セッション自体を取り壊す
session_destroy();
header('Location:todo_login.php');
exit();