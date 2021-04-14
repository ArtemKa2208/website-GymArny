<?
 setcookie('user', $user['login'], time()+3600*24 - 3600*24, "/");
 header('Location: my_account.php');
?>