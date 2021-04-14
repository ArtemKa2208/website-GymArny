<?
$mysql = new mysqli('localhost','root','','registration');
$id = $_POST['id'];

$mysql->query("DELETE FROM price WHERE id = '${id}'"); 
$mysql->close();

 header('Location: price.php');
?>