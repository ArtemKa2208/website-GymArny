<?
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $password= filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
    $admin = filter_var(trim($_POST['admin']),FILTER_SANITIZE_STRING);
    $password = md5($password."fwaeffasf2663gfhng");

    $mysql = new mysqli('localhost','root','','registration');
    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    $user = $result->fetch_assoc(); //конвертируем данные в массив
    if(count($user) == 0){
        echo "User is not found";
        exit();
    }

    setcookie('user', $user['login'], time()+3600*24, "/");
    $mysql->close();
    header('Location: my_account.php');
?>