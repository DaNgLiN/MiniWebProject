<style>
.side_menu {
    width: 15vw;
}

.nav-link {
    width: 100%;
    display: flex;
    justify-content: space-between;
}

#sideMenuRight {
    display: none;
}

.side_menu_social_icons_row {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
}

.side_menu_social_icons_col {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;

}

#side_menu_developers {
    height: 48px;
    overflow: hidden;
    line-height: 1.3;
}

.navbaritems .nav-link div:hover {
    text-decoration: underline;
    transition: 0.1s;
}
</style>

<div class="side_menu_item h-100 w-100" style="position:relative">
    <div class="w-100" style="position:absolute;top:100px;">
        <nav id="navbar-example3" class="navbar navbaritems w-100 p-0 font-weight-bold">
            <nav class="nav nav-pills flex-column w-100">
                <a class="nav-link" href="#item-1"><i class="fas fa-home fa-2x"></i>
                    <div>Home</div>
                </a>
                <a class="nav-link" href="#item-2"><i class="fab fa-buffer fa-2x"></i>
                    <div>Features</div>
                </a>
                <a class="nav-link" href="#item-3"><i class="fas fa-hands-helping fa-2x"></i>
                    <div>Support</div>
                </a>
                <a class="nav-link" href="#item-4"><i class="fas fa-fire fa-2x"></i>
                    <div>Community</div>
                </a>
            </nav>
        </nav>
    </div>

    <div class="text-light" style="position:absolute;width:100%;bottom:20px">
        <div class="d-flex w-100 justify-content-between">

            <button type="button" class="p-0 m-0 btn btn-link" data-toggle="modal" data-target="#side_menu_settings">
                <i class="fas fa-cog fa-2x" style="font-size:30px"></i>
            </button>
            <button id="sideMenuLeft" type="button" class="btn btn-link" onclick="sideMenuMouseOver()">
                <i class="fas fa-chevron-circle-left " style="font-size:20px"></i> </button>
            <button id="sideMenuRight" class="btn btn-link " type="button" onclick="sideMenuMouseOut()">
                <i class="fas fa-chevron-circle-right " style="font-size:20px"></i></button>

        </div>
        <div class="d-flex flex-column">
            <div class="d-flex flex-column">
                <div>Follow :</div>
                <div id="side_menu_social_icons" class="w-100 h-100">
                    <i class="fab fa-facebook-f p-1" style="font-size:16px"></i>
                    <i class="fab fa-github p-1" style="font-size:16px"></i>
                    <i class="fab fa-instagram p-1" style="font-size:16px"></i>
                </div>
            </div>
            <div id="side_menu_developers">
                <div id="side_menu_developers" class="d-flex flex-column  align-items-center font-weight-normal">
                    <span style="font-size:12px">&copy Copyright, 2019</span>
                    <span style="font-size:12px">Developers :</span>
                    <span style="font-size:12px">NepsGeek's, Nepal</span>
                </div>
            </div>
        </div>
    </div>


</div>


<!-- Modal 
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
</div> -->