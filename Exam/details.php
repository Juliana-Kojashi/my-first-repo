<?php

  require_once 'login.php';

  $query = "SELECT * FROM event WHERE name = 'Kala Festival'";
  $result = $pdo->query($query);
  $row = $result->fetch();
  $name = htmlspecialchars($row['name']);
  $date = htmlspecialchars($row['date']);
  $time = htmlspecialchars($row['time']);
  $location = htmlspecialchars($row['location']);
  $category = htmlspecialchars($row['category']);
  $description = htmlspecialchars($row['description']);
  $organizer = htmlspecialchars($row['organizer']);


 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <header>
       <p>bla bla bla, logo</p>
     </header>
     <div class="content">
       <figure>
         <img src="" alt="">
         <figcaption>
           <?php echo "$name at $date $time" ?>
         </figcaption>
       </figure>
       <aside class="event_data">
         <?php
            echo <<<_END
              <p>Name: $name</p>
              <p>Date and Time: $date starts at $time</p>
              <p>Category: $category</p>
              <p>Location: $location</p>
              <p>Description</p>
              <p>$description</p>
              <p>Organizer: $organizer</p>
            _END;
          ?>
       </aside>
     </div>
     <footer>
       <p>bla bla bla</p>
     </footer>
   </body>
 </html>
