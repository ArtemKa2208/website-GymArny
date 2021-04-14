<?
$mysql = new mysqli('localhost','root','','registration');
$id = $_POST['id'];

$mysql->query("DELETE FROM fitness WHERE id = '${id}'"); 
$mysql->close();

 header('Location: price.php');
?>