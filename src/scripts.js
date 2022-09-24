
function filterMenu(){
    var input, filter, i, txtValue;
    input = document.getElementById('filterInput');
    filter = input.value.toUpperCase();
    items = document.getElementsByClassName("menuItem");
    

    // Loop through all menu items, and hide those who don't match the search query
    for (i = 0; i < items.length; i++) {

        nameElem = items[i].getElementsByClassName("itemName")[0];
        txtValue = nameElem.innerText;

        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            items[i].style.display = "";
        } else {
            items[i].style.display = "none";
        }
    }
}