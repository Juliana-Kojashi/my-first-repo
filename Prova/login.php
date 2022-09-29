<?php



 $host='localhost';
 $database='examdb'
 $user='root';
 $password='root';
 $attribute="mysql:host=$host; dbname=$database";

 try{
   $pdo=new PDO($attribute, $user, $password);
}
catch(PDOException $e)
{
 echo "Lidhja nuk u krye, ndodhi nje gabim $e->getMessage() dhe ka nr $e->getCode()";
}
?>
