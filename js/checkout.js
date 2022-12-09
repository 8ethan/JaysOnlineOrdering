(function () {
    "use strict";

    let yourOrder;

    window.addEventListener('load',init);

    function init() {
        yourOrder = document.getElementById('yourOrder');

    }

    function update() {
        let url = "./functions/checkout.php";
        
        let data = {
            action: 'get'
        };

        fetch(url, {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({action: 'get'})
        })
        .then((response) => response.json())
        .then((r) => {
          console.log(r);
          updateMenu(r);
        });
    }
})();