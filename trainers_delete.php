<?
$mysql = new mysqli('localhost','root','','registration');
$id = $_POST['id'];

$mysql->query("DELETE FROM trainers WHERE id = '${id}'"); 
$mysql->close();

 header('Location: trainers.php');
?>