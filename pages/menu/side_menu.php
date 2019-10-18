<style>
@font-face {
    font-family: Potra;
    src: url(font/Potra.otf);
}

@font-face {
    font-family: Milea;
    src: url(font/Milea.ttf);
}

ul {
    list-style: none;
}

.side-menu-setting-btn {
    transform: rotate(0deg);
}

.side-menu-setting-btn:hover {
    transform: rotate(30deg);
    transition: 0.1s;
    transition-timing-function: ease-out;
}

.side-menu-left-right-btn:hover {
    transform: translateX(3px);
    transition: 0.1s;
}

.sidemenuleftright {
    transition: 0.3s;
}

#_sidemenubar {
    transition: 0.3s;
    width: 15vw;
    transition-timing-function: ease-out;
}
</style>
<!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<!-- googlefont -->
<!-- 
font-family: 'Roboto', sans-serif;
font-family: 'Roboto Slab', serif;
font-family: 'Open Sans Condensed', sans-serif;
font-family: 'Ubuntu', sans-serif;
-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Roboto|Roboto+Slab|Ubuntu&display=swap"
    rel="stylesheet">

<div class="d-flex container  justify-content-between h-100 flex-column p-1 m-0" style="" id="_sidemenubar">
    <div class="themetextcolor w-100  d-none border rounded">
        <span class="text-center w-100" style="font-family:Potra;font-size:30px;">Scan Me</span>
    </div>
    <ul>
        <nav id="navbar-example3" class="navbar ">
            <nav class="nav nav-pills flex-column">
                <a class="nav-link themetextcolor themetextfont" href="#item-1"><i class="fas fa-home fa-2x"></i><button
                        class="btn btn-link  themetextcolor themetextfont float-right font-weight-bold sidemenuleftright">Home</button></a>
                <a class="nav-link themetextcolor themetextfont" href="#item-2"><i class="fab fa-buffer fa-2x"></i><button
                        class="btn btn-link themetextcolor float-right font-weight-bold themetextfont sidemenuleftright">Features</button></a>
                <a class="nav-link themetextcolor themetextfont" href="#item-3"><i class="fas fa-hands-helping fa-2x"></i><button
                        class="btn btn-link themetextcolor float-right font-weight-bold themetextfont sidemenuleftright">Support</button></a>
                <a class="nav-link themetextcolor themetextfont" href="#item-4"><i
                        class="fas fa-fire fa-2x"></i><button
                        class="btn btn-link themetextcolor float-right font-weight-bold themetextfont sidemenuleftright">Comunity</button></a>

            </nav>
        </nav>
    </ul>
    <div class="d-flex flex-column" style="font-size:12px">
        <div class="d-flex justify-content-between pl-2 pr-2">
            <button type="button"
                class="side-menu-setting-btn p-0 m-0 btn btn-link align-self-end themetextcolor themetextfont "
                data-toggle="modal" data-target="#side_menu_settings">
                <i class="fas fa-cog fa-2x" style="font-size:30px"></i>
            </button>
            <button type="button"
                class="side-menu-left-right-btn p-0 m-0 btn btn-link align-self-end themetextcolor themetextfont sidemenuLeftbtn"
                onclick="funcSideMenuLeftBtn()">
                <i class="fas fa-chevron-circle-left " style="font-size:20px"></i>
            </button>
            <button type="button"
                class="side-menu-left-right-btn p-0 m-0 btn btn-link align-self-end themetextcolor themetextfont sidemenuRightbtn"
                onclick="funcSideMenuRightBtn()">
                <i class="fas fa-chevron-circle-right " style="font-size:20px"></i>
            </button>
        </div>
        <div class="themetextcolor themetextfont pt-2" style="font-size:12px">
            <span style="font-size:12px;">Follow us:</span>
            <div class="d-flex justify-content-around pb-0 pt-2" style="font-size:12px">
                <i class="fab fa-facebook-f" style="font-size:16px"></i>
                <i class="fab fa-github" style="font-size:16px"></i>
                <i class="fab fa-instagram" style="font-size:16px"></i>
            </div>
            <div class="sidemenuleftright" style="transition:0.0s;">
                <span style="font-size:12px">&copy Copyright, 2019</span><br>
                <span style="font-size:12px">Developers :</span>
                <span style="font-size:12px">NepsGeek's</span>
            </div>
            <p></p>


        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="side_menu_settings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header alert-secondary">
                <h5 class="modal-title" id="side_menu_settings">Settings</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">


                    <label for="" class="font-weight-bold">Side Menu</label>


                    <div class="form-group border p-2 rounded">
                        <label for="">Theme's</label>
                        <select class="form-control" id="sidemenutheme" onchange="funcsidemenutheme(this.value)">
                            <option value='dark'>Dark</option>
                            <option value='light'>Light</option>
                            <option value='classic'>Classic</option>
                            <option value='modern'>Modern</option>
                        </select>
                    </div>

                    <div class="form-group rounded border p-2">
                        <label for="">Position</label>
                        <div class="d-flex w-100 justify-content-around">
                            <label for=""><button class="btn btn-success pl-5 pr-5 btn-sm"
                                    onclick="funtionSideMenuPosition('left')">Left</button></label>
                            <label for=""><button class="btn btn-success pl-5 pr-5 btn-sm"
                                    onclick="funtionSideMenuPosition('right')">Right</button></label>
                        </div>
                    </div>

                    <div class="form-group border rounded p-2">
                        <label for="">Font Name</label>
                        <select class="form-control" onchange="funcSideMenuFontName(this.value)">
                            <option value='font1'>'Roboto', sans-serif</option>
                            <option value='font2'>'Roboto Slab', serif</option>
                            <option value='font3'>'Open Sans Condensed', sans-serif</option>
                            <option value='font4'>'Ubuntu', sans-serif</option>
                        </select>
                    </div>

                    <div class="form-group border rounded p-2">
                        <label for="">Font Style</label>
                        <div class="d-flex justify-content-around">
                            <button class="btn btn-success btn-sm" style="width:80px">Italic</button>
                            <button class="btn btn-success btn-sm" style="width:80px">Bold</button>
                            <button class="btn btn-success btn-sm" style="width:80px"
                                onclick="funcSideMenuFontSize('sub')">A-</button>
                            <button class="btn btn-success btn-sm" style="width:80px"
                                onclick="funcSideMenuFontSize('add')">A+</button>
                        </div>
                    </div>

                    <div class="form-group border rounded p-2">
                        <label for="">Transparency</label>
                        <input type="range" class="custom-range" min="0" max="1" step="0.2" id="">
                        <label for="customRange1">Example range</label>
                        <input type="range" class="custom-range" id="customRange1">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>