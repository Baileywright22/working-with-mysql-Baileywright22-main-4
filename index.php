<?php
    INCLUDE("database.php");
?>
<html>
  <head>
    <title>Sales</title>
  </head>
  <body>
     <form action="index.php" method="post">
     Customer ID: <input type="number" name="customer_id"><br>
     First name: <input type="tex" name="first_name"><br>
     Last name: <input type="text" name="last_name"><br>
     City: <input type="text" name="city"><br>
     State: <input type="text" name="state"><br>
     <input type="submit">
     </form>
   <h2>Current Sales</h2>
    <?php
       connect();
       salesTable();
       updateTable();
       close();
    ?>
  </body>
</html>