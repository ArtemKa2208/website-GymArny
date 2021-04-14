<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="my_account.css" type="text/css">
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
        if($_COOKIE['user'] == ''):
      ?>
      <div class = "content">
          <form action="login.php" method="POST">
              <p>Войдите в аккаунт</p>
              <input name="login" class="login" placeholder="Введите логин" type="text">
              <input name="password" class="password" placeholder="Введите пароль"  type="password">
              <button class = "send">Войти</button>
              <a href="registration.php">Зарегистрироваться</a>
          </form>
      </div>
      <?php endif;?>  


      <?php
        if($_COOKIE['user'] == 'admin'):
      ?>

        <div class="personal_area">
            <form class="div_form_my_admin" action="database_admin.php" method="POST">
                <p class="do_not_disturb">Форма для добавления карточки в базу данных</p>
                <input name="code" minlength = 14 maxlength = 14 placeholder="XX-XXXX-XXX-XX" type="text">
                <input name="id_trainer" placeholder="id тренера" type="text">
                <input name="days" minlength = 1 placeholder="Количество дней действия абонемента" type="text">
                <input name="date" minlength = 10 maxlength = 10 placeholder="Дата регистрации YY-MM-DD" type="text">
                <button>Отправить</button>
            </form>
        </div> 

        <div class="personal_area">
            <form class="div_form_my_admin" action="admin_extend.php" method="POST">
                <p class="do_not_disturb">Продление абонемента</p>
                <input name="code" minlength = 14 maxlength = 14 placeholder="XX-XXXX-XXX-XX" type="text">
                <input name="days" minlength = 1 placeholder="Количество дней действия абонемента" type="text">
                <input name="date" minlength = 10 maxlength = 10 placeholder="Дата регистрации YY-MM-DD" type="text">
                <button>Отправить</button>
            </form>
        </div> 

        <div class="personal_area">
            <form class="div_form_my_admin" action="discover_date.php" method="POST">
                <p class="do_not_disturb">Узнать срок действия абонемента</p>
                <input name="code" minlength = 14 maxlength = 14 placeholder="XX-XXXX-XXX-XX" type="text">
                <button>Отправить</button>
            </form>
        </div> 
        <button class="button_exit"  onClick='location.href="exit.php"'>Exit</button>
        <?php endif;?> 

        <?php
        if($_COOKIE['user'] != 'admin' && $_COOKIE['user'] != ''):  
      ?>

       <div class="personal_area">
            <form class="div_form_my_admin" action="my_account.php" method="POST">
                <p class="do_not_disturb">Узнать срок действия абонемента</p>
                <input name="code" minlength = 14 maxlength = 14 placeholder="XX-XXXX-XXX-XX" type="text">
                <button  >Отправить</button>
            </form>
            <?
             if(isset($_POST['code']) && $_POST['code'] !=''){
              $code=$_POST['code'];
              $mysql = new mysqli('localhost','root','','registration');
              $last_try = $mysql->query("SELECT `number` FROM `cards`"); 
              if($last_try){
                while($try =  $last_try->fetch_assoc()){
                  if($code == $try['number']){
                    $it_end = 111;
                  }
                 
                }
            }
             }
             if($it_end == 111){

              if(isset($_POST['code']) && $_POST['code'] !=''){
                $code=$_POST['code'];
                $mysql = new mysqli('localhost','root','','registration');
                $result = $mysql->query("SELECT `date`,`days`,`trainers` FROM `cards` WHERE `number` = '$code'");
                if($result){
                    while($new = $result->fetch_assoc()){
                      $date = $new['date'];
                      $days = $new['days'];
                      $trainers = $new['trainers'];
                    }
                }
                $date_new = new DateTime($date);
                $date_new->modify("+$days day");
                $pls=$date_new->format('Y-m-d');
                echo "<p class='happy'> Ваш абонемент действует до: $pls </p>" ;
                $mysql->close();
  
                $mysql = new mysqli('localhost','root','','registration');
                $result = $mysql->query("SELECT `text`,`photo` FROM `trainers` WHERE `id` = '$trainers'");
                if($result){
                  while($news = $result->fetch_assoc()){
                    $photo = $news['photo'];
                    $text = $news['text'];
                echo "
                <div class='the_end'>
                <p class='the_end_2'>Ваш тренер</p>
                <div class = 'for_ie'>
                <div><img class='photo_trainers' src='${photo}' alt=''></div>
                <div class='text_trainers'><p>${text}</p></div>
                </div>
                </div>";
               }
              
              }
            }

             }else{
              if(isset($_POST['code'])){
              echo "<p class='happy'>Такого абонемента не существует</p>" ;
              }
             }
          
            ?>
        </div> 


        <button class="button_exit"  onClick='location.href="exit.php"'>Exit</button>
       <?php endif;?> 



       
       
</body>
</html>