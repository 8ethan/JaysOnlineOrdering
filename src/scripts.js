window.addEventListener("load",filterMenu)

function filterMenu(){
    var input, filter, i, txtValue, cat, category;
    catInput = document.getElementById('catInput');
    input = document.getElementById('filterInput');
    category = catInput.value.toUpperCase();
    filter = input.value.toUpperCase();
    items = document.getElementsByClassName("menuItem");
    

    // Loop through all menu items, and hide those who don't match the search query
    for (i = 0; i < items.length; i++) {

        txtValue = items[i].getElementsByClassName("itemName")[0].innerText;
        catValue = items[i].getElementsByClassName("cat")[0].innerText;

        if (txtValue.toUpperCase().indexOf(filter) > -1 && (category=="" || catValue.toUpperCase().indexOf(category) > -1)) {
            items[i].style.display = "";
        } else {
            items[i].style.display = "none";
        }
    }
}