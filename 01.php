<?php

   if( $_GET["name"] || $_GET["age"] )
   {
      if (preg_match("/[^A-Za-z'-]/",$_GET['name'] ))
      {
         die ("Biến name không hợp lệ - nên là các chữ cái");
      }

      echo "Chào mừng ". $_GET['name']. "<br />";
      echo "Bạn ". $_GET['age']. " tuổi.";

      exit();

 }
?>
<html>
   <body>
    
      <form action="<?php $_PHP_SELF ?>" method="GET">
         Họ Tên: <input type="text" name="name" />
         Tuổi: <input type="text" name="age" />
         <input type="submit" />
      </form>

   </body>
</html>
