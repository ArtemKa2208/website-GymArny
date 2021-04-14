<?
$photo_form_photo=$_POST['photo_form_photo'];

$mysql = new mysqli('localhost','root','','registration');
$mysql->query("INSERT INTO `photos` (`photo`)
VALUES('$photo_form_photo')");

$mysql->close();

header('Location: photos.php');
?>
