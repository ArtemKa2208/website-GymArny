<?
$code=$_POST['code'];
$days=$_POST['days'];
$date=$_POST['date'];

$mysql = new mysqli('localhost','root','','registration');
$mysql->query("UPDATE  `cards` SET `days` = '$days', `date` = '$date' WHERE `number` = '$code'");
$mysql->close();

header('Location: my_account.php');
?>
