<?
$mysql = new mysqli('localhost','root','','registration');
$id = $_POST['id'];

$mysql->query("DELETE FROM news WHERE id = '${id}'"); 
$mysql->close();

 header('Location: news_admin.php');
?>