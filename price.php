<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Price</title>
    <link rel="stylesheet" href="price.css" type="text/css">
</head>
<body>
    <div class = "header">
        <img class ="header_name_img" src="img/header_name.jpg" alt="">
        <div class = "navigation">
          <button class = "buttons_header" onClick='location.href="index.php"'>Главная</button> 
          <button class = "buttons_header" onClick='location.href="trainers.php"' >Тренера</button> 
          <button class = "buttons_header" onClick='location.href="price.php"'>Цена</button>
          <button class = "buttons_header" onClick='location.href="photos.php"'>Фото</button>
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
        <p class = "name_price_gym">Тренажерный зал</p>
        <?php
            if($_COOKIE['user'] == 'admin'):
        ?>
        <button class="button_for_admin" onClick='location.href="form_price_gym_admin.php"'>Добавить</button>
        <button class="button_for_admin" onClick='location.href="price_form_delete.php"'>Удалить</button>
        <?php endif;?> 
        <div class = 'content_price_gym'>
        <?
            $mysql = new mysqli('localhost','root','','registration');
            $result = $mysql->query("SELECT `name`, `text`,`id` FROM `price` LIMIT 6");
            if($result){
              while($price = $result->fetch_assoc()){
                $text = $price['text'];
                $name = $price['name'];
                $id=$price['id'];
                if($_COOKIE['user'] == 'admin'){
                  echo "
                  <div class = 'div_price_gym'>
                  <p class = 'text_without_trainer'>$name</p>
                  <p class = 'price_gym'>$text</p>
                  <div class='id_gym'><p>id = $id</p></div>
                  </div>";
                }else{
                  echo "
                  <div class = 'div_price_gym'>
                  <p class = 'text_without_trainer'>$name</p>
                  <p class = 'price_gym'>$text</p>
                  </div>";
                }
                 
               
              }                
            }
            ?>
            </div>

        <p class = "name_price_fitness">Фитнес зал</p>
        <?php
            if($_COOKIE['user'] == 'admin'):
        ?>
        <button class="button_for_admin" onClick='location.href="price_fitness_form.php"'>Добавить</button>
        <button class="button_for_admin" onClick='location.href="fitness_delete_form.php"'>Удалить</button>
        <?php endif;?> 
        <div class = 'content_price_gym'>
        <?
            $mysql = new mysqli('localhost','root','','registration');
            $result = $mysql->query("SELECT `name`, `text`,`id` FROM `fitness` LIMIT 10");
            if($result){
              while($price = $result->fetch_assoc()){
                $text = $price['text'];
                $name = $price['name'];
                $id=$price['id'];
                if($_COOKIE['user'] == 'admin'){
                  echo "
                  <div class = 'div_price_gym'>
                  <p class = 'text_without_trainer'>$name</p>
                  <p class = 'price_gym'>$text</p>
                  <div class='id_gym'><p>id = $id</p></div>
                  </div>";
                }else{
                  echo "
                  <div class = 'div_price_gym'>
                  <p class = 'text_without_trainer'>$name</p>
                  <p class = 'price_gym'>$text</p>
                  </div>";
                }
                 
               
              }                
            }
            ?>
      </div> 
          </div>
      <div class = "footer_information">
        <div class = "first_column_footer">
          <div class="logo">
            <img src="img/logo.png" alt="">
          </div>
          <div class = "icons">
             <a href="viber://chat?number=380985757913"><img src="img/viber.png" alt=""></a>
             <a href="https://m.me/artem.maksimovich22"><img src="img/messenger.png" alt=""></a>
             <a href="https://t.me/artem_maksimovich"><img src="img/telegram.png" alt=""></a>
          </div> 
          <div class = "numbers">
             <a href="tel:+380985757913">+380985757913</a>
             <a href="tel:+380507151093">+380507151093</a>
          </div>
        </div>
        <div class = "second_column_footer">
          <ol class = "adress">
            <li class = "style_for_adress">Adress</li>
            <li class = "style_adress">America</li>
            <li class = "style_adress">California</li>
            <li class = "style_adress">Los Angeles</li>
            <li class = "style_adress">Hawthorne</li>
            <li class = "style_adress">Crenshaw Blvd</li>
          </ol>
        </div>
        <div class = "third_column_footer">
          <ol class = "opening_hours">
            <li class = "name_opening_hours">Opening hours</li>
            <li class = "style_opening_hours">пн:	08:00–22:00</li>
            <li class = "style_opening_hours">вт:	08:00–22:00</li>
            <li class = "style_opening_hours">ср:	08:00–22:00</li>
            <li class = "style_opening_hours">чт:	08:00–22:00</li>
            <li class = "style_opening_hours">пт:	08:00–22:00</li>
            <li class = "style_opening_hours">сб:	09:00–22:00</li>
            <li class = "style_opening_hours">вс:	09:00–19:00</li>
          </ol>
        </div>
      </div>
</body>
</html>