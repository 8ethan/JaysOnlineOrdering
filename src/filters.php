<select type="select" id="catInput" onchange="filterMenu()" placeholder="">
    <option value="">Select a category...</option>
    <option value="">All</option>
    <?php
    getCategories();
    ?>
</select>
<input type="text" id="filterInput" onkeyup="filterMenu()" placeholder="Search for an item...">
