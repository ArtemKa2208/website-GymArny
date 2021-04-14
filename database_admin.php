<?
$date=$_POST['date'];
$days=$_POST['days'];
$number=$_POST['code'];
$trainers=$_POST['id_trainer'];
if($date != '' && $days != '' && $number != ''){
    $mysql = new mysqli('localhost','root','','registration');
    $mysql->query("INSERT INTO `cards` (`date`,`days`,`number`,`trainers`)
    VALUES('$date', '$days','$number','$trainers')");
    $mysql->close();
   
}
header('Location: my_account.php');
?>
