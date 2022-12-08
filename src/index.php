<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            require('head.php');
        ?>
        <title>Jays Online Ordering</title>
        <script src="js/menu.js"></script>
    </head>
    <body>
        <?php 
            require('header.php');
        ?>
        <main>
            <div id='searchForm' onsubmit="return false">
                <h2>Search</h2>
                <select id='categorySelect'>
                    <option value=''>Select a category...</option>
                </select>
                <input id='textSearch' type="text" placeholder="Search for an item...">
            </div>
            <div id="menuContainer">
            </div>
            <footer>
            </footer>
            <div id="checkoutButton" class="pushButton">
                <div id="checkoutBadge">
                    <span>5</span>
                </div>
            </div>
        </main>

    </body>
</html>