<?php
    require("functions/menuFunctions.php");
    require("functions/config.php");
    require("functions/database_functions.php");
?>

<div id="menu-container">

    <!-- Reads from a database to know which menu items to show and their details -->
    <?php
        displayMenu();
    ?>

</div>