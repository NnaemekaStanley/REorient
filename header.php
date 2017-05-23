<?php
session_start();


?>


<!DOCTYPE html>
<html>
    <head>
        <title> Beheard </title>
        <!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=700, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-grid.css">

	<!-- Theme Styles CSS -->
	<link rel="stylesheet" type="text/css" href="css/theme-styles.css">
	<link rel="stylesheet" type="text/css" href="css/blocks.css">

    <!-- Main Font -->
    <script src="js/webfontloader.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });
    </script>

	<link rel="stylesheet" type="text/css" href="css/fonts.css">

	<!-- Styles for plugins -->
	<link rel="stylesheet" type="text/css" href="css/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">

    </head>
    <body>
   <header>
<nav>
	<ul>
		<li><a href="index.php" >Home</a></li>
        <?php
        if (isset($_SESSION['id'])) {
          echo "<form action='includes/logout.inc.php'>

            <button> LOG OUT </button>
            </form>";

        }else {
            echo "<form action= 'includes/login.inc.php' method= 'POST'>
             <input type='text' name='uid' placeholder='Username'>
             <input type= 'password' name='pwd' placeholder='Password'>
             <button type= 'submit'>Login</button>
             </form>";
        }
        ?>

        <li><a href="signup.php" >Signup</a></li>
	</ul>
</nav>
</header>
</body>
</html>
