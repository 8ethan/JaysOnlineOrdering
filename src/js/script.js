(function () {
    "use strict";

    let categories;
    let searchBox;
    let menuContainer;

    window.addEventListener('load',init);

    function init() {
        categories = document.getElementById('catInput');
        searchBox = document.getElementById('filterInput');
        menuContainer = document.getElementById('menu-container');

        categories.addEventListener("change", search);
        searchBox.addEventListener("change", search);
    }

    function search() {
        let url = "";
    
        let data = new FormData();
        data.append('category',categories.value);
        data.append('text',searchBox.value);
        console.log(data);
    
        fetch(url,{method:'POST', body: data})
        .then(checkStatus)
        .then((r) => {
          updateMenu(r.foodItems);
        })
        .catch(console.error);
    }

    function checkStatus(response) {
        if (response.ok) {
            return response.json();
        } else {
            return Promise.reject(new Error(response.status + ": " + response.statusText));
        }
    }

    function updateMenu() {
        menuContainer.append();
    }
})();