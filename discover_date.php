<?
$code=$_POST['code'];

if(isset($_POST['code'])){
  $code=$_POST['code'];
  $mysql = new mysqli('localhost','root','','registration');
  $last_try = $mysql->query("SELECT `number` FROM `cards`"); 
  if($last_try){
    while($try =  $last_try->fetch_assoc()){
      if($code == $try['number']){
        $it_end = 111;
      }
     
    }
}
 }
if($it_end == 111){
  $mysql = new mysqli('localhost','root','','registration');
  $result = $mysql->query("SELECT `date`,`days` FROM `cards` WHERE `number` = '$code'");
  if($result){
      while($new = $result->fetch_assoc()){
        $date = $new['date'];
        $days = $new['days'];
      }
  }
  
  $date_new = new DateTime($date);
  $date_new->modify("+$days day");
  echo $date_new->format('Y-m-d');
}else{
  echo "This subscription does not exist";
}

$mysql->close();

?>
