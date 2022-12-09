(function () {
    "use strict";

    let yourOrder;

    window.addEventListener('load',init);

    function init() {
        yourOrder = document.getElementById('yourOrder');

        getOrder();
    }

    function getOrder () {
        let url = "./functions/cart.php";
        
        let data = new FormData();
        data.append("action","get");

        fetch(url, {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: data
        })
        .then((response) => response.json())
        .then((r) => {
          console.log(r);
          update(r);
        });
    }

    function update(order) {

        /* let idsList = [];
        order.forEach(item => idsList+=item.id); */

        /* fetch(url, {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({action: 'get'})
        })
        .then((response) => response.json())
        .then((r) => {
          console.log(r);
          update(r);
        }); */

        let innerHTML = '';
        innerHTML = `
        <tr id="editHeader">
            <th>Item ID</th>
            <th>Item Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Notes</th>
        </tr>
        `;

        order.forEach(item => {
            let card = `
            <tr>
                <td>${item.id}</td>
                <td>idk</td>
                <td>idk</td>
                <td>${item.quantity}</td>
                <td>${item.notes}</td>
            </tr>
            `
            innerHTML += card;
        });

        yourOrder.innerHTML = innerHTML;
    }
})();