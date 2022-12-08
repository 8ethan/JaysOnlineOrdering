(function () {
    "use strict";

    let navButton;
    let profileButton;
    let nav;
    let profileNav;

    window.addEventListener('load',init);

    function init () {
        navButton = document.getElementById('navButton');
        profileButton = document.getElementById('profileButton');
        nav = document.getElementById('nav');
        profileNav = document.getElementById('profileNav');

        window.addEventListener('click',(e) => {
            //console.log(e.target==navButton);
            
            if (e.target==navButton) {
                if (nav.classList.contains('hidden'))
                    nav.classList.remove('hidden');
                else
                    nav.classList.add('hidden');
            } else {
                if (!nav.classList.contains('hidden'))
                    nav.classList.add('hidden');
            }

            if (e.target==profileButton) {
                if (profileNav.classList.contains('hidden'))
                    profileNav.classList.remove('hidden');
                else
                    profileNav.classList.add('hidden');
            } else {
                if (!profileNav.classList.contains('hidden'))
                    profileNav.classList.add('hidden');
            }
        });
    }

})()