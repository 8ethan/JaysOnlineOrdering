
function filterMenu(){
    var input, filter, i, txtValue, cat, category;
    catInput = document.getElementById('cat-input');
    input = document.getElementById('filter-input');
    category = catInput.value.toUpperCase();
    filter = input.value.toUpperCase();
    items = document.getElementsByClassName("menu-item");
    

    // Loop through all menu items, and hide those who don't match the search query
    for (i = 0; i < items.length; i++) {

        txtValue = items[i].getElementsByClassName("item-name")[0].innerText;
        catValue = items[i].getElementsByClassName("cat")[0].innerText;

        if (txtValue.toUpperCase().indexOf(filter) > -1 && (category=="" || catValue.toUpperCase().indexOf(category) > -1)) {
            items[i].style.display = "";
        } else {
            items[i].style.display = "none";
        }
    }
}

function setActive(elem){
    elem.classList.add("active");
    //console.log(elem.classList);
}