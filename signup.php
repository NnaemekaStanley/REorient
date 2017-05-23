<?php
    include 'header.php';


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Beheard </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    
      <?php
if (isset($_SESSION['id'])) {
    echo $_SESSION['id'];

}else {
    echo "You are not logged in";
}
      ?> 
          <br><br><br>
        
          <form action="includes/signup.inc.php" method="POST"> 
    
        <input type="text" name="first" placeholder="firstname"><br>
        <input type="text" name="last" placeholder="lastname"><br>
        <input type="text" name="uid" placeholder="username"> <br>
        <input type="password" name="pwd" placeholder="password"><br>
        <button type="submit">SIGN UP</button>
        </form>
        
        <br><br><br>
        <form action="includes/logout.inc.php">
          
          
       
         </form>
    </body>
</html>