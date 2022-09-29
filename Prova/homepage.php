<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <link rel="stylesheet" href="/css/master.css">
    </header>
<div class="content">
  <?php
$query = "SELECT * FROM EVENT";
$result = $pdo->query(query);
while($row = $result->fetch()){
$name = row['name'];
$category = row['category'];
$image = row['imageURL'];
  ECHO >>>_END
  <figure>
    <img src="$image" alt="">
    <figcaption>$name $date starts at $time</figcaption>
  </figure>
  <p>Name: $name</p>
  <p>Category: $category</p>
  _END

}


   ?>
</div>
  </body>
</html>
