<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="../img/White_E_Logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jays Online Ordering</title>
    <script src="scripts.js"></script>
</head>

<body>

    <?PHP
    require('header.php');
    
    require("functions/database_functions.php");
    require("functions/menuFunctions.php");
    require("functions/config.php");
    ?>

    <div class="main">
        <!--Display something if user is not logged in-->
        <!-- <h2>Please log in to order.</h2> -->

        <!-- Display menu if signed in -->
        <?php
        require('navbar.php');
        ?>
        <div id='menu'>
            <div id='subheader'>
                <h2>Menu</h2>
                <div id='vert-spacer'></div>
                <?php
                    require('filters.php');
                ?>
                <div id='mobile-order-icon'>
                    <img src="../img/bag-icon.png">
                </div>
            </div>
            <?php
            require('menu.php');
            ?>
        </div>
    </div>

</body>

</html>