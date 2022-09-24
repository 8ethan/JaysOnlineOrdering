<?php
    require("menuFunctions.php");
    require("config.php");
    require("database_functions.php");
?>


<div id="menu-container">

    <!-- Reads from a database to know which menu items to show and their details -->
    <?php
        displayMenu();
    ?>


</div>