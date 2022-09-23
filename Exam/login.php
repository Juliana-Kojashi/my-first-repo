<?php

  $host = 'localhost';
  $database = 'examdb';
  $username = 'root';
  $password = '';
  $attribute = "mysql:host=$host; dbname=$database";

  try {
    $pdo = new PDO($attribute, $username, $password);
  } catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
  }

 ?>
