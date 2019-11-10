var side_menu_social_icons = document.getElementById("side_menu_social_icons")
side_menu_social_icons.classList.add("side_menu_social_icons_row");

function sideMenuMouseOver() {
    var side_menu_social_icons = document.getElementById("side_menu_social_icons")
    side_menu_social_icons.classList.remove("side_menu_social_icons_row");
    side_menu_social_icons.classList.add("side_menu_social_icons_col");

    document.getElementById("side_menu_developers").style.display = "none";
    setTimeout(function () {
        document.getElementById("side_menu_developers").style.transition = "0.5s";
        document.getElementById("side_menu_developers").style.opacity = 0;
    }, 100)
    document.getElementById("sideMenuLeft").style.display = "none";
    document.getElementById("sideMenuRight").style.display = "block";
    document.getElementsByClassName("side_menu")[0].style.width = "5.5vw";
    document.getElementsByClassName("side_menu")[0].style.transition = "0.3s";
    var x = document.querySelectorAll(".navbaritems .nav-link div");
    for (i = 0; i < x.length; i++) {
        x[i].style.transition = "0.1s";
        x[i].style.opacity = 0;
    }
}

function sideMenuMouseOut() {
    var side_menu_social_icons = document.getElementById("side_menu_social_icons")
    side_menu_social_icons.classList.remove("side_menu_social_icons_col");
    side_menu_social_icons.classList.add("side_menu_social_icons_row");


    document.getElementById("side_menu_developers").style.display = "block";
    setTimeout(function () {
        document.getElementById("side_menu_developers").style.transition = "1s";
        document.getElementById("side_menu_developers").style.opacity = 1;
    }, 100)
    document.getElementById("sideMenuLeft").style.display = "block";
    document.getElementById("sideMenuRight").style.display = "none";
    document.getElementsByClassName("side_menu")[0].style.width = "15vw";
    document.getElementsByClassName("side_menu")[0].style.transition = "0.3s";
    var x = document.querySelectorAll(".navbaritems .nav-link div");
    for (i = 0; i < x.length; i++) {
        x[i].style.transition = "0.3s";
        x[i].style.opacity = 1;
    }

}