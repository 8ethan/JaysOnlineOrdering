(function () {
    "use strict";

    let categories;
    let searchBox;
    let menuContainer;

    window.addEventListener('load',init);

    function init() {
        categories = document.getElementById('cat-input');
        searchBox = document.getElementById('filter-input');
        menuContainer = document.getElementById('menu-container');

        categories.addEventListener("change", search);
        searchBox.addEventListener("change", search);
    }

    function search () {
        
    }
})();