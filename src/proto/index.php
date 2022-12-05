<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            require('head.php');
        ?>
        <title>Jays Online Ordering</title>
        <script src="scripts.js"></script>
    </head>
    <body>
        <?php 
            require('header.php');
        ?>
        <main>
            <form>
                <h2>Search</h2>
                <select>
                    <option>Select a category...</option>
                </select>
                <input type="text" placeholder="Search for an item...">
            </form>
            <div id="menuContainer">
                <div class="menuItem">
                    <img src='https://cdnimg.webstaurantstore.com/images/products/large/520039/1998265.jpg'>
                    <p class="item-name">Buffalo Chicken Quesadilla<br>$5</p>
                    <button type="button" class="orderButton"> <!-- Add to Order --> </button>
                </div>
                <div class="menuItem">
                    <img src='https://cdnimg.webstaurantstore.com/images/products/large/520039/1998265.jpg'>
                    <p class="item-name">Chicken Tenders<br>$5</p>
                    <button type="button" class="orderButton"> <!-- Add to Order --> </button>
                </div>
            </div>
            <div id="orderButton">
                <div id="orderBadge">
                    <span>5</span>
                </div>
            </div>
        </main>

    </body>
</html>