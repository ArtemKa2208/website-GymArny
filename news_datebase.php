<?
$photo_form_news=$_POST['photo_form_news'];
$text_form_news=filter_var(trim($_POST['text_form_news_admin']),FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost','root','','registration');
$mysql->query("INSERT INTO `news` (`photo`,`text`)
VALUES('$photo_form_news', '$text_form_news')");

$mysql->close();

header('Location: index.php');
?>
