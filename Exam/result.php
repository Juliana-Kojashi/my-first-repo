<?php
  require_once 'login.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      bla bla bla , logo
    </header>
    <div class="content">
      <?php
        if (isset($_POST["search"]))
        {
          $search = $_POST["search"];
          $query="SELECT * FROM `event` WHERE name LIKE '%$search%' OR category LIKE '%$search%' OR organizer LIKE '%$search%'";
        }

        $result=$pdo->query($query);

        if(!$result=$pdo->query($query)){
           echo "Gabim ne ekzekutim";
         }
        else {
          while ($row = $result->fetch()) {
            echo <<<_END
              <p>Name: $row['name']</p>
              <p>Date and Time: $row['date']</p>
              <p></p>
              <p></p>
              <p><a href="">View Details</a></p>
            _END;
          }
          }
       ?>
    </div>
    <footer>
      bla bla bla
    </footer>
  </body>
</html>
