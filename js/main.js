const menuIcon = document.getElementById("menu-icon");
const mobileMenu = document.getElementById("mobile-menu");
const searchExpand = document.getElementById("search-expand");
const searchDiv = document.getElementById("search-div");
const mobileSearch = document.getElementById("mobile-search");
let desktop = window.matchMedia("(min-width: 600px)");


// if (chkObject("contact-logo-div")){
//     customBanner("contact-logo-div");
// }
// if (chkObject("resource-logo-div")) {
//     customBanner("resource-logo-div");
// }
menuIcon.addEventListener('click', function () {
    if (mobileMenu.style.opacity == "1") {
        mobileMenu.style.opacity = '0';
        mobileMenu.style.pointerEvents = 'none';
        // mobileMenu.style.top = '0';
    } else {
        mobileMenu.style.opacity = "1";
        mobileMenu.style.pointerEvents = "auto";
        // mobileMenu.style.top = "55px";
    }
})
searchExpand.addEventListener('click', function () {
    if (searchDiv.style.opacity == "1") {
        searchDiv.style.opacity = '0';
        searchDiv.style.pointerEvents = 'none';
        // mobileMenu.style.top = '0';
    } else {
        searchDiv.style.opacity = "1";
        searchDiv.style.pointerEvents = "auto";
        // mobileMenu.style.top = "55px";
    }
})
mobileSearch.addEventListener('click', function () {
    if (searchDiv.style.opacity == "1") {
        searchDiv.style.opacity = '0';
        searchDiv.style.pointerEvents = 'none';
        // mobileMenu.style.top = '0';
    } else {
        searchDiv.style.opacity = "1";
        searchDiv.style.pointerEvents = "auto";
        // mobileMenu.style.top = "55px";
    }
})

//adjusts the contact page header image based on size.  If I choose to do this on another page
//it needs to be a function.
function customBanner(id){
    const customLogo = document.getElementById(id);
    if (id == "contact-logo-div") {
        if (desktop.matches) {
            customLogo.innerHTML = `<img src="../wp-content/themes/codewod/img/BB1900-thin.png" alt="">`
        } else {
            customLogo.innerHTML = `<img src="../wp-content/themes/codewod/img/BB600-thin.png" alt="">`
        }
    } else if (id == "resource-logo-div"){
        if (desktop.matches) {
            customLogo.innerHTML = `<img src="../wp-content/themes/codewod/img/resources1900.png" alt="">`
        } else {
            customLogo.innerHTML = `<img src="../wp-content/themes/codewod/img/resources900.png" alt="">`
        }
    }
   
}

//checks to see if div exists
function chkObject(elemId) {
    return (document.getElementById(elemId)) ? true : false;
}