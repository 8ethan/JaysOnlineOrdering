(function () {
    "use strict";

    let categories;
    let searchBox;
    let menuContainer;
    let searchForm;
    let editTable;
    let selectedItem;

    window.addEventListener('load',init);

    function init() {
        categories = document.getElementById('categorySelect');
        searchBox = document.getElementById('textSearch');
        menuContainer = document.getElementById('menuContainer');
        searchForm = document.getElementById('searchForm');
        editTable = document.getElementById('editTable');

        // populate categories
        populateCategories();

        let url = "./functions/search.php";
        fetch(url)
        .then((response) => response.json())
        .then((r) => {
          //console.log(r);
          updateMenu(r);
        });

        categories.addEventListener("change", search);
        searchBox.addEventListener("input", search);
        searchBox.addEventListener("propertychange", search);
    }

    function search() {
        let url = "./functions/search.php";
        url += '?category='+categories.value+'&name='+searchBox.value;

        fetch(url)
        .then((response) => response.json())
        .then((r) => {
          console.log(r);
          updateMenu(r);
        });
    }

    function populateCategories () {
        let url = "api.php?category=all";
        
        fetch(url)
        .then((response) => response.json())
        .then((cats) => {
            cats.forEach(category => {
                categories.innerHTML+=`
                <option>${category.category}</option>
                `;
            });
        });
    }

    function updateMenu(foodItems) {
        editTable.innerHTML = `
        <tr id="editHeader">
            <th>Item ID</th>
            <th>Item Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Availability</th>
        </tr>
        `;

        foodItems.forEach(item => {
            let card = `
            <tr>
                <th>${item.itemID}</th>
                <th>${item.itemName}</th>
                <th>${item.category}</th>
                <th>${item.price}</th>
                <th>${item.isAvailable}</th>
            </tr>
            `
            editTable.innerHTML += card;
        });
    }


})();