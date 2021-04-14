<?
   $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING); //trim удаляет лишние пробелы из строки
   $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
   $password= filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
   $second_password = filter_var(trim($_POST['second_password']),FILTER_SANITIZE_STRING);
   $admin = filter_var(trim($_POST['admin']),FILTER_SANITIZE_STRING);
   $just_bool = true;
   if(mb_strlen($login) < 4 || mb_strlen($login) > 18){
       echo "Invalid login length";
       exit();
   } else if(mb_strlen($password) < 6 || mb_strlen($password) > 100){
       echo "Invalid password length";
       exit();
   } else if($password != $second_password){
       echo "Password re-entered incorrectly";
        exit(); 
   }

   $password = md5($password."fwaeffasf2663gfhng");
   $mysql = new mysqli('localhost','root','','registration');
   if($result=$mysql->query("SELECT `login` FROM `users`")){
       while($test=$result->fetch_assoc()){
           $second_login = $test['login'];
           if($login==$second_login){
               echo 'This login already exists'; 
               $just_bool = false;
               break;
           }
       }
   }
   if($just_bool == true){
    $mysql->query("INSERT INTO `users` (`login`,`password`,`email`)
    VALUES('$login', '$password', '$email')");
    $mysql->close();
    header('Location: my_account.php');
   }
   

?>