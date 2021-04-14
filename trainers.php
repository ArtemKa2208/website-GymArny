<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Treiners</title>
    <link rel="stylesheet" href="trainers.css" type="text/css">
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

      <?php
            if($_COOKIE['user'] == 'admin'):
      ?>
      <div>
      <button class="button_for_admin" onClick='location.href="trainers_admin.php"'>Добавить</button>
      <button class="button_for_admin" onClick='location.href="trainers_form_delete.php"'>Удалить</button>
      </div>
      <?php endif;?> 
      <div class= "content_trainers">
      <?
            $mysql = new mysqli('localhost','root','','registration');
            $result = $mysql->query("SELECT `photo`, `text`,`id` FROM `trainers` LIMIT 25");
            if($result){
              while($news = $result->fetch_assoc()){
                $photo = $news['photo'];
                $text = $news['text'];
                $id=$news['id'];
                if($_COOKIE['user'] == 'admin'){
                  echo "
                  <div class = 'for_ie'>
                  <div><img class='photo_trainers' src='${photo}' alt=''></div>
                  <div class='text_trainers'><p>${text}</p></div>
                  <div class='div_trainers_id_admin'><p class='id_trainers'>id=${id}</p></div>
                  </div>";
                }else{
                  echo "
                  <div class = 'for_ie'>
                  <div><img class='photo_trainers' src='${photo}' alt=''></div>
                  <div class='text_trainers'><p>${text}</p></div>
                  </div>";
                }
               
              }
            }
      ?>
           
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