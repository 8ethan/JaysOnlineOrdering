(function () {
    "use strict";

    let categories;
    let searchBox;
    let menuContainer;
    let searchForm;
    let checkoutButton;
    let checkoutBadge;

    let selectedItem;

    window.addEventListener('load',init);

    function init() {
        categories = document.getElementById('categorySelect');
        searchBox = document.getElementById('textSearch');
        menuContainer = document.getElementById('menuContainer');
        searchForm = document.getElementById('searchForm');
        checkoutButton = document.getElementById('checkoutButton');
        checkoutBadge = document.getElementById('checkoutBadge');

        // populate categories
        populateCategories();
        
        // populate all foods by default
        search();

        categories.addEventListener("change", search);
        searchBox.addEventListener("input", search);
        searchBox.addEventListener("propertychange", search);

        document.addEventListener('click',orderItem);
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

    function updateMenu(foodItems) {
        menuContainer.innerHTML = '';

        foodItems.forEach(item => {
            let card = `
            <div class="menuItem itemNo${item.itemID}">
                <img src='https://cdnimg.webstaurantstore.com/images/products/large/520039/1998265.jpg'>
                <p class="itemName">${item.itemName}<br>$${item.price}</p>
                <button type="button" class="orderButton pushButton"></button>
            </div>
            `;
            menuContainer.innerHTML += card;
        });

        menuContainer.innerHTML += '<div class="gridRow"></div>'
    }

    function focusItem(item) {
        if (selectedItem) {
            selectedItem.classList.remove('active');
        }

        item.classList.add('active');
        selectedItem = item;
    }
    function unfocusItem(item) {
        item.classList.remove('active');
        selectedItem = null;
    }

    function orderItem(e) {

         if (e.target.classList.contains('orderButton')) {
            let itemButton = e.target;
    
            // Item has not been ordered yet, highlight item and add to order
            if (!itemButton.classList.contains('orderedItem')) {
                itemButton.classList.add('orderedItem');
    
            // Item has already been ordered, highlight item and remove from order
            } else {
                itemButton.classList.remove('orderedItem');
            }
            unfocusItem(itemButton.parentElement);

        // For mobile: If food card was clicked, highlight card
        } else {
            let item;
            if (e.target.classList.contains('menuItem')) {
                item = e.target;
            } else if (e.target.parentElement.classList.contains('menuItem')) {
                item = e.target.parentElement;
            }

            if (item) {
                // Item has not been selected yet, highlight item and show order button
                if (!item.classList.contains('active')) {
                    focusItem(item);
                // Item has already been selected, unhighlight item and hide order button
                } else {
                    unfocusItem(item);
                }
            }

        }
    }

})();