(function () {
    "use strict";

    let categories;
    let searchBox;
    let menuContainer;
    let searchForm;
    let editTable;
    let selectedItem;
    let editID_label, editID, editName, editCat, editPrice, editAvail, editImg;
    let currentTable;

    window.addEventListener('load',init);

    function init() {
        categories = document.getElementById('categorySelect');
        searchBox = document.getElementById('textSearch');
        menuContainer = document.getElementById('menuContainer');
        searchForm = document.getElementById('searchForm');
        editTable = document.getElementById('editTable');

        editID_label = document.getElementById('editID_label');
        editID = document.getElementById('editID');
        editName = document.getElementById('editName');
        editCat = document.getElementById('editCat');
        editPrice = document.getElementById('editPrice');
        editAvail = document.getElementById('editAvail');
        editImg = document.getElementById('editImg');

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

        editTable.addEventListener("click", (e) => {
                selectItem(e);
        });
    }

    function search() {
        let url = "./functions/search.php";
        url += '?category='+categories.value+'&name='+searchBox.value;

        fetch(url)
        .then((response) => response.json())
        .then((r) => {
          //console.log(r);
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
        let innerHTML = '';
        innerHTML = `
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
                <td>${item.itemID}</td>
                <td>${item.itemName}</td>
                <td>${item.category}</td>
                <td>${item.price}</td>
                <td>${item.isAvailable}</td>
            </tr>
            `
            innerHTML += card;
        });

        currentTable = foodItems;

        editTable.innerHTML = innerHTML;
    }

    function selectItem (e) {
        console.log(currentTable);
        if (e.target.tagName!='TD')
            return;

        // Scuffed
        let rowClicked = Array.prototype.indexOf.call(e.target.parentElement.parentElement.children,e.target.parentElement)-1;
        //console.log(rowClicked);

        let item = currentTable[rowClicked];
        //console.log(Object.entries(item));

        editID_label.innerHTML = "Item ID: "+item.itemID;
        editID.value = item.itemID;
        editName.value = item.itemName;
        editCat.value = item.category;
        editPrice.value = item.price;
        editAvail.value = item.isAvailable;
        editImg.src = 'https://cdnimg.webstaurantstore.com/images/products/large/520039/1998265.jpg';

    }


})();