<?
$text_form_price=$_POST['text_form_price'];
$name_form_price=$_POST['name_form_price'];
$mysql = new mysqli('localhost','root','','registration');
$mysql->query("INSERT INTO `fitness` (`text`,`name`)
VALUES('$text_form_price','$name_form_price')");

$mysql->close();

header('Location: price.php');
?>
