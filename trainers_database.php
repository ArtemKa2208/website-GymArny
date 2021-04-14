<?
$photo_form_trainers=$_POST['photo_form_trainers'];
$text_form_trainers=$_POST['text_form_trainers_admin'];

$mysql = new mysqli('localhost','root','','registration');
$mysql->query("INSERT INTO `trainers` (`photo`,`text`)
VALUES('$photo_form_trainers', '$text_form_trainers')");

$mysql->close();

header('Location: trainers.php');
?>
