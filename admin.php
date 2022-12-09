<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            require('head.php');
        ?>
        <title>Jays Online Ordering</title>
        <script src="js/admin.js"></script>
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
            <div id="editContainer">
                <table id="editTable">
                    <tr id="editHeader">
                        <th>Item ID</th>
                        <th>Item Name</th>
                        <th>Price</th>
                    </tr>
                </table>
                <div id="modPanel">
                    <h2>Edit Item:</h2>
                    <form id="editForm" action="/menuEdit.php" method="POST">
                        <div id="editFormContainer">
                            <div>
                                <p id=editID_label>Item ID: </p>
                                <input type="hidden" id=editID name="editID">
                                <label for="itemName">Item Name: </label>
                                <input type="text" id="editName" name="itemName"><br>
                                <label for="category">Category:</label>
                                <input type="text" id="editCat" name="category"><br>
                                <label for="price">Price: $</label>
                                <input type="number" step="0.01" id="editPrice" name="price"><br>
                                <input type="hidden" name="desc" value="">
                                <input type="hidden" name="calories" value="">
                                <label for="isAvailable">Available:</label>
                                <input type="number" id="editAvail" name="isAvailable"><br>
                                <input type="hidden" name="dir" value="">
                                <label for="img">New image:</label>
                                <input type="file" name="img" id="editImg" accept="image/*"><br>
                                <input type="submit" value="Save Changes">
                            </div>
                            <div id="itemImage">
                                <img id="editImage" src="https://cdnimg.webstaurantstore.com/images/products/large/520039/1998265.jpg"><br>
                            </div>
                        </div>
                    </form>
                    <br>
                    <h2>Add New Item:</h2>
                    <form id="addForm" action="/menuEdit.php" method="POST">
                        <label for="itemName">Item Name: </label>
                        <input type="text" name="itemName"><br>
                        <label for="category">Category:</label>
                        <input type="text" name="category"><br>
                        <label for="price">Price: $</label>
                        <input type="number" name="price"><br>
                        <label for="isAvailable">Available:</label>
                        <input type="number" name="isAvailable"><br>
                        <label for="img">Upload image:</label>
                        <input type="file" name="img" accept="image/*"><br>
                        <input type="hidden" name="desc">
                        <input type="hidden" name="calories">
                        <input type="hidden" name="dir">
                        <input type="submit" value="Add Item">
                    </form>
                </div>
            </div>
            <footer>
            </footer>
        </main>

    </body>
</html>