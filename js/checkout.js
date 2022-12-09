(function () {
    "use strict";

    let yourOrder;

    window.addEventListener('load',init);

    function init() {
        yourOrder = document.getElementById('yourOrder');

        getOrder();
    }

    function getOrder () {
        let url = "./functions/checkout.php";
        
        fetch(url, {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({action: 'get'})
        })
        .then((response) => response.json())
        .then((r) => {
          console.log(r);
          update(r);
        });
    }

    function update(order) {

        let idsList = [];
        foodItems.forEach(item => idsList+=item.id);

        fetch(url, {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({action: 'get'})
        })
        .then((response) => response.json())
        .then((r) => {
          console.log(r);
          update(r);
        });

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

        editTable.innerHTML = innerHTML;
    }
})();