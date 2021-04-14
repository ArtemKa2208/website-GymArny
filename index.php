<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Study</title> 
        <link rel="stylesheet" href="style.css" type="text/css">
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
        <div class = "header_video_bar">
          <video class= "head_video" src="video/videoplayback (online-video-cutter.com) (1).mp4" autoplay muted loop preload></video>
        </div>
        <div class = "content_main">
          <img src="img/2_main.jpg" alt="">
          <img src="img/1_main.jpg" alt="">
          <img src="img/3_main.jpg" alt="">
          <img src="img/4_main.jpg" alt="">
          <img src="img/5_main.jpg" alt="">
          <div class="content_text">
            <a class="text_on_photo" href="my_account.php">Join and start pumping yourself today</a>
          </div>
        </div>
        <div class = "news" >
          <p class = "text_news">News</p>
          <div class = "news_slider">
            <!-- <button class = "button_slider_left"> Previous</button> -->
            <?
            $mysql = new mysqli('localhost','root','','registration');
            $result = $mysql->query("SELECT `photo`, `text`,`id` FROM `news` LIMIT 3");
            if($result){
              while($news = $result->fetch_assoc()){
                $photo = $news['photo'];
                $text = $news['text'];
                $id=$news['id'];
                if($_COOKIE['user'] == 'admin'){
                  echo "
                  <div class ='news_slider_div'>
                  <div><img class='img_news' src='${photo}' alt=''></div>
                  <div class='div_news_p'><p>${text}</p></div>  
                  <div class='div_news_button_admin'><button onClick='location.href=`news_admin.php`' class='news_button_for_admin'>Редактировать ${id}</button></div>
                  </div>";
                }else{
                  echo "
                  <div class ='news_slider_div'>
                  <div><img class='img_news' src='${photo}' alt=''></div>
                  <div class='div_news_p'><p>${text}</p></div>
                  </div>";
                }
               
              } 
                            
            }
        
            ?>
            <!-- <div><button onClick='location.href="news_admin.php"' class="news_button_for_admin">Редактировать</button></div>
            <div><button onClick='location.href="news_admin.php"' class="news_button_for_admin">Редактировать</button></div>
            <div><button onClick='location.href="news_admin.php"' class="news_button_for_admin">Редактировать</button></div> -->
            <!-- <div><button class="news_button_for_admin">Редактировать</button></div>
            <div><button class="news_button_for_admin">Редактировать</button></div>
            <div><button class="news_button_for_admin">Редактировать</button></div>
            <div><button class="news_button_for_admin">Редактировать</button></div>
            <div><button class="news_button_for_admin">Редактировать</button></div> -->
            <!-- <img src="img2/8.jpg" alt=""> -->
            <!-- <button class = "button_slider_right">Next</button> -->
          </div>
        </div>
        <div class="footer">
          <div class = "map_footer">
            <p class = "map_text">We are on the map</p>
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d282.29453973691204!2d-118.32695945701562!3d33.91714730731488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sru!2sua!4v1586260547247!5m2!1sru!2sua" 
              width="100%" height="600" frameborder="0"  allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
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
        </div>
        <script type="text/javascript" src="script.js"></script>
    </body>   
   
</html
