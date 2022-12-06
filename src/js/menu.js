(function () {
    "use strict";

    let categories;
    let searchBox;
    let menuContainer;
    let searchForm;

    let selectedItem;

    window.addEventListener('load',init);

    function init() {
        categories = document.getElementById('categorySelect');
        searchBox = document.getElementById('textSearch');
        menuContainer = document.getElementById('menuContainer');
        searchForm = document.getElementById('searchForm');

        // populate categories
        let url = "./functions/search.php";
        fetch(url)
        .then((response) => response.json())
        .then((r) => {
          console.log(r);
          updateMenu(r);
        });

        categories.addEventListener("change", search);
        searchBox.addEventListener("input", search);
        searchBox.addEventListener("propertychange", search);

        document.addEventListener('click',orderItem);
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
    }

    function orderItem(e) {
        if (selectedItem) {
            selectedItem.classList.remove('active');
            selectedItem = null;
        }

         if (e.target.classList.contains('orderButton')) {
            let item = e.target;
    
            // Item has not been ordered yet, highlight item and add to order
            if (!item.classList.contains('orderedItem')) {
                item.classList.add('orderedItem');
    
            // Item has already been ordered, highlight item and remove from order
            } else {
                item.classList.remove('orderedItem');
                console.log(item);
            }

        } else {
            let item;
            if (e.target.classList.contains('menuItem')) {
                item = e.target;
            } else if (e.target.parentElement.classList.contains('menuItem')) {
                item = e.target.parentElement;
            }

            if (item) {
                // For mobile: Item has not been selected yet, highlight item and show order button
                if (!item.classList.contains('active')) {
                    item.classList.add('active');
                    selectedItem = item;
                // Item has already been selected, unhighlight item and hide order button
                } else {
                    item.classList.remove('active');
                    console.log(item);
                }
            }

        }
    }

})();