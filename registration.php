<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="registration.css" type="text/css">
</head>
<body>
    <div class = "header">
        <img class ="header_name_img" src="img/header_name.jpg" alt="">
        <div class = "navigation">
          <button class = "button_main" onClick='location.href="index.php"'>Главная</button> 
          <button class = "button_trainer" onClick='location.href="trainers.php"' >Тренера</button> 
          <button class = "button_price" onClick='location.href="price.php"'>Цена</button>
          <button class = "button_photo" onClick='location.href="photos.php"'>Фото</button>
          <?php
            if($_COOKIE['user'] == ''):
          ?>
           <button class = "button_login" onClick='location.href="my_account.php"'>Войти</button>   
          <?php else:?>
            <button class = "button_login" onClick='location.href="my_account.php"'><?=$_COOKIE['user']?></button> 
          <?php endif;?>  
        </div>
      </div> 
      <div class = "content">
        <form action="regist.php" method="POST">
            <p>Регистрация</p>
            <input class="login" name="login" maxlength = 18 minlength = 4 placeholder="Введите имя пользователя" type="text">
            <input class="email" name="email" placeholder="Введите електронный адрес"  type="email">
            <input class="password" name="password" minlength = 6 maxlength = 100  placeholder="Введите пароль"  type="password">
            <input class="second_password" name="second_password" placeholder="Повторите пароль"  type="password">
            <!-- <input class="code_number" placeholder="ХХ-ХХХ-ХХ-ХХХХ - код с карты"  type="text"> -->
            <button class='send' >Зарегистрироватся</button>
            <a href="my_account.php">Войти</a>
        </form>
    </div>  
</body>
</html>