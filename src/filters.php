<select type="select" id="cat-input" onchange="filterMenu()" placeholder="">
    <option value="">Select a category...</option>
    <option value="">All</option>
    <?php
    getCategories();
    ?>
</select>
<input type="text" id="filter-input" onkeyup="filterMenu()" placeholder="Search for an item...">
