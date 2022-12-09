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
                    <form id="editForm" action="/menuEdit.php">
                        <div id="editFormContainer">
                            <div>
                                <p id=editID_label>Item ID: </p>
                                <input type="hidden" id=editID name="editID">
                                <label for="itemName">Item Name: </label>
                                <input type="text" id="editName" name="itemName"><br>
                                <label for="category">Category:</label>
                                <input type="text" id="editCat" name="category"><br>
                                <label for="price">Price: $</label>
                                <input type="number" id="editPrice" name="price"><br>
                                <label for="available">Available:</label>
                                <input type="checkbox" id="editAvail" name="available"><br>
                                <input type="hidden" name="desc">
                                <input type="hidden" name="calories">
                                <input type="hidden" name="dir">
                                <label for="img">New image:</label>
                                <input type="file" name="img" id="editImg" accept="image/*"><br>
                                <input type="submit" value="Save Changes">
                            </div>
                            <div id="itemImage">
                                <img id="editImage"><br>
                            </div>
                        </div>
                    </form>
                    <br>
                    <h2>Add New Item:</h2>
                    <form id="addForm" action="/menuEdit.php">
                        <label for="itemName">Item Name: </label>
                        <input type="text" name="itemName"><br>
                        <label for="category">Category:</label>
                        <input type="text" name="category"><br>
                        <label for="price">Price: $</label>
                        <input type="number" name="price"><br>
                        <label for="available">Available:</label>
                        <input type="checkbox" name="available"><br>
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