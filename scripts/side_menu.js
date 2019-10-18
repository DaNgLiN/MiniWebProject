var sidemenufontsize = 16

// default-theme
document.getElementById("_sidemenubar").style.background = "#333"
themetextcolor = document.getElementsByClassName("themetextcolor"); //side-menu-color
themetextfont = document.getElementsByClassName("themetextfont"); //side-menu-font-name
for (i = 0; i < themetextcolor.length; i++) {
    themetextcolor[i].style.color = "white";
}
for (i = 0; i < themetextfont.length; i++) {
    themetextfont[i].style.fontFamily = "'Roboto', sans-serif";
    themetextfont[i].style.fontSize = sidemenufontsize + 'px';
}

// theme
function funcsidemenutheme(themeValue) {
    if (themeValue == 'dark') {
        document.getElementById("_sidemenubar").style.background = "#333"
        themetextcolor = document.getElementsByClassName("themetextcolor");
        for (i = 0; i < themetextcolor.length; i++) {
            themetextcolor[i].style.color = "white";
        }
    }
    else if (themeValue == 'light') {
        document.getElementById("_sidemenubar").style.background = "#ddd"
        themetextcolor = document.getElementsByClassName("themetextcolor");
        for (i = 0; i < themetextcolor.length; i++) {
            themetextcolor[i].style.color = "black";
        }


    }

}

// side-menu-position
document.getElementById("_sidemenu").style.float = "left";

function funtionSideMenuPosition(params) {
    if (params == 'left')
        document.getElementById("_sidemenu").style.float = "left";
    else if (params == 'right')
        document.getElementById("_sidemenu").style.float = "right";
    console.log(params)
}

// side-menu-font-name
function funcSideMenuFontName(params) {
    if (params == 'font1') {
        themetextfont = document.getElementsByClassName("themetextcolor");
        for (i = 0; i < themetextfont.length; i++) {
            themetextfont[i].style.fontFamily = "'Roboto', sans-serif";
        }
    }
    else if (params == 'font2') {
        themetextfont = document.getElementsByClassName("themetextcolor");
        for (i = 0; i < themetextfont.length; i++) {
            themetextfont[i].style.fontFamily = "'Roboto Slab', serif";
        }
    }
    else if (params == 'font3') {
        themetextfont = document.getElementsByClassName("themetextcolor");
        for (i = 0; i < themetextfont.length; i++) {
            themetextfont[i].style.fontFamily = "'Open Sans Condensed', sans-serif";
        }
    }
    else if (params == 'font4') {
        themetextfont = document.getElementsByClassName("themetextcolor");
        for (i = 0; i < themetextfont.length; i++) {
            themetextfont[i].style.fontFamily = "'Ubuntu', sans-serif";
        }
    }
}

// side-menu-font-size

function funcSideMenuFontSize(params) {
    if (params == 'sub' && sidemenufontsize >= 12) {
        sidemenufontsize = sidemenufontsize - 2
    }
    else if ('add' && sidemenufontsize <= 20) {
        sidemenufontsize = sidemenufontsize + 2
    }
    themetextfont = document.getElementsByClassName("themetextcolor");
    for (i = 0; i < themetextfont.length; i++) {
        themetextfont[i].style.fontSize = sidemenufontsize + 'px';
    }
}

// side-menu-left-right
document.querySelector(".sidemenuRightbtn").style.display = "none";
document.querySelector(".sidemenuLeftbtn").style.display = "block";
function funcSideMenuLeftBtn() {
    var sidemenuleftright = document.getElementsByClassName("sidemenuleftright")

    for (i = 0; i < sidemenuleftright.length; i++) {
        sidemenuleftright[i].style.display = "none";
    }

    document.querySelector(".sidemenuRightbtn").style.display = "block";
    document.querySelector(".sidemenuLeftbtn").style.display = "none";
    document.getElementById("_sidemenubar").style.width = "7vw"
}
function funcSideMenuRightBtn() {
    var sidemenuleftright = document.getElementsByClassName("sidemenuleftright")
    setTimeout(function () {
        for (i = 0; i < sidemenuleftright.length; i++) {
            sidemenuleftright[i].style.display = "block";
        }
    }, 250)
    document.querySelector(".sidemenuLeftbtn").style.display = "block";
    document.querySelector(".sidemenuRightbtn").style.display = "none";
    document.getElementById("_sidemenubar").style.width = "15vw"
}