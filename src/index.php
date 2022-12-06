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
                <div class="menuItem">
                    <img src='https://cdnimg.webstaurantstore.com/images/products/large/520039/1998265.jpg'>
                    <p class="item-name">Buffalo Chicken Quesadilla<br>$5</p>
                    <button type="button" class="orderButton pushButton"> <!-- Add to Order --> </button>
                </div>
                <div class="menuItem">
                    <img src='https://cdnimg.webstaurantstore.com/images/products/large/520039/1998265.jpg'>
                    <p class="itemName">Chicken Tenders<br>$5</p>
                    <button type="button" class="orderButton pushButton"> <!-- Add to Order --> </button>
                </div>
            </div>
            <div id="orderButton" class="pushButton">
                <div id="orderBadge">
                    <span>5</span>
                </div>
            </div>
        </main>

    </body>
</html>