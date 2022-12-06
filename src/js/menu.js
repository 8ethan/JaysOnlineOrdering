(function () {
    "use strict";

    let categories;
    let searchBox;
    let menuContainer;
    let searchForm;

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
        if (!e.target.classList.contains('orderButton')) return;

        e.target.style

    }

})();