<?php
    include 'header.php';


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Beheard </title>
    </head>
    <body>

      <?php
if (isset($_SESSION['id'])) {
    echo $_SESSION['id'];

}else {
    echo "You are not logged in";
}
      ?>
      
    </body>
</html>
