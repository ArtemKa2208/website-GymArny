<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="form_news">
    <form class="form_news_admin" action="news_datebase.php"  method="POST">
        <input name="photo_form_news" class="photo_form_news" type="text" placeholder="photo link">
        <textarea name="text_form_news_admin" placeholder="text(не больше 300 символов).Для того что бы сделать абзац, в конце строки напишите <br>"></textarea>    
        <button class="submit_form_news">Ready</button>  
    </form>
    <form  class="form_news_admin" action="delete_news.php" method="POST">
        <p>Удаление</p>
        <input class="photo_form_news" type="text" name="id" placeholder="Для удаления введите id блока который желаете удалить">
        <button class="submit_form_news">Ready</button> 
    </form>
       
    </div>
    
</body>
</html>