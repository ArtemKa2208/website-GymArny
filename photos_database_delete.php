<?
$mysql = new mysqli('localhost','root','','registration');
$id = $_POST['id'];

$mysql->query("DELETE FROM photos WHERE id = '${id}'"); 
$mysql->close();

 header('Location: photos.php');
?>