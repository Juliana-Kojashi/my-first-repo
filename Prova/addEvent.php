<?php
require_once="login.php";

if (isset(_POST['name'])&&isset(_POST['category'])&&isset(_POST['date'])) {
  $name = $_POST["name"];
  $category = $_POST["category"];
  $date = $_POST["date"];
  add_event($pdo, $name, $category, $date);
}

function add_event($pdo, $name, $category, $date)
{
$statement = $pdo->prepare("INSERT INTO event(id, name, category, date) VALUES('', :titulli, :name, :category, :date)");
 if($statement->bindparameter(':titulli', $titulli)&&
  $statement->bindparameter(':name', $name)&&
  $statement->bindparameter(':category', $categpry)&&
$statement->bindparameter(':date',$date) )
 {
   if($statement->execute()){
     echo "<br>Insert u krye me sukses </br>";
   }else{
     echo "<br>Gabim ne ekzekutim</br>"
   }
 }

}



 ?>
