<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jays Online Ordering</title>
    <script src="scripts.js"></script>
</head>

<body>

    <?PHP
    require('header.php');
    require("functions/database_functions.php");
    //require("functions/menuFunctions.php");
    require("functions/config.php");
    ?>

    <div class="main">
        <!--Display something if user is not logged in-->
        <!-- <h2>Please log in to order.</h2> -->

        <!-- Display menu if signed in -->
        <?php
        require('navbar.php');
        ?>
        
    </div>

</body>

</html>