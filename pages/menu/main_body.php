<link rel="stylesheet" href="css/loader_wall.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<style>
#container {
    width: 1000px;
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    position: relative;
}

.circle {
    border-radius: 50%;
    border: 2px solid white;
    background-color: deepskyblue;
    width: 300px;
    height: 300px;
    position: absolute;
    opacity: 0;
    animation: scaleIn 5s infinite cubic-bezier(.36, .11, .89, .32);
}

@keyframes scaleIn {
    from {
        transform: scale(.5, .5);
        opacity: .1;

    }

    to {
        transform: scale(2.5, 2.5);
        opacity: 0;
        border: 150px solid dark;
    }
}

.item {
    z-index: 100;
    padding: 5px;
}

.item button {
    animation: scaleIn1 5s infinite ease-out;
    font-style: italic;
}

@keyframes scaleIn1 {
    0% {
        transform: scale(1);

    }

    50% {
        transform: scale(1.1);

    }
}
</style>

<div class="container-fluid bg-danger position-absolute" id="_loader_wall"
    style="width:100vw;height:100vh;z-index:1000">
    <div class="d-flex flex-column h-100 w-100 justify-content-center align-items-center">
        <div>

            <div class="cssload-box-loading">

            </div>
        </div>
        <div class="pt-4">
            <h1 class="ml1">
                <span class="text-wrapper">
                    <span class="letters">Loading . . .</span>
                    <span class="line line2"></span>
                </span>
            </h1>
        </div>
    </div>
</div>



<div class="container-fluid overflow-auto w-100 h-100 bg-danger p-0 m-0 ">

    <div class="w-100 bg-info">
        <div class="bg-info p-0 m-0 h-10" data-spy="scroll" style="height:100vh;overflow-y:scroll"
            data-target="#navbar-example3" data-offset="100">

            <div class="home w-100 h-100 bg-dark" id="item-1" style="position:relative">
                <div class="" style="position:relative;width:100%;top:-100px">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 200"
                        style="enable-background:new 0 0 1000 200;" xml:space="preserve">
                        <style type="text/css">
                        .st0 {
                            fill: #2873F6;
                            stroke-miterlimit: 10;
                        }
                        </style>
                        <path class="st0" d="M0,94.12c0,0,82.24,83.46,153.1,73.23s155.91-36.18,155.91-36.18s78.74-26.03,160.63-7.13
	s79.53,108.83,260.63,44.18S1000,200,1000,200V0H0V94.12z" />
                    </svg>
                </div>
                <div class="themetextcolor" style="position:relative;width:100%;top:-100px">
                    <div class="alert">
                        <h3 style="font-family:Potra;" class="display-4">Scan Me</h3>
                        <p>A Quick Solution to scan any System. Monitor it, and know your system detail in web.</p>
                        <p>Version 1.02</p>


                        <div class="d-flex w-100  h-100 text-center justify-content-center align-items-center">

                            <div id="outerContainer">
                                <div id="container">
                                    <div class="item">
                                        <button class="btn text-light  rounded-circle btn-primary   "
                                            style="width:150px;height:150px;font-size:50px;font-family:Milea"
                                            onclick="loaderWall()">GO!</button>
                                    </div>

                                    <div class="circle" style="animation-delay: 0s"></div>
                                    <div class="circle" style="animation-delay: 1s"></div>
                                    <div class="circle" style="animation-delay: 2s"></div>
                                    <div class="circle" style="animation-delay: 3s"></div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </div>


            <div class="home w-100 h-100" id="item-2">
                <div data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
                    <div>
                        <h3>1</h3>
                    </div>
                    <div>
                        <h3>2</h3>
                    </div>
                    <div>
                        <h3>3</h3>
                    </div>
                    <div>
                        <h3>4</h3>
                    </div>
                    <div>
                        <h3>5</h3>
                    </div>
                    <div>
                        <h3>6</h3>
                    </div>
                </div>
            </div>

            <div class="home w-100 h-100 bg-dark text-light" id="item-3">
                <div class="d-flex flex-column align-items-center justify-content-around h-100">
                    <div class="d-flex justify-content-around w-100">
                        <div>
                            <h5>SPEED TEST</h5>
                            <P>Advertise <br>
                                Ookla 5G Map <br>
                                Speedtest Awards <br>
                                Speedtest Global Index <br>
                                Speedtest Insights <br>
                                Speedtest Servers</P>
                        </div>
                        <div>
                            <h5>SPEED TEST</h5>
                            <P>Advertise <br>
                                Ookla 5G Map <br>
                                Speedtest Awards <br>
                                Speedtest Global Index <br>
                                Speedtest Insights <br>
                                Speedtest Servers</P>
                        </div>
                        <div>
                            <h5>SPEED TEST</h5>
                            <P>Advertise <br>
                                Ookla 5G Map <br>
                                Speedtest Awards <br>
                                Speedtest Global Index <br>
                                Speedtest Insights <br>
                                Speedtest Servers</P>
                        </div>
                        <div>
                            <h5>APPS</h5>
                            <P>Android <br>
                                Apple TV <br>
                                Google Chrome <br>
                                iOS <br>
                                macOS <br>
                                Windows</P>
                        </div>
                    </div>
                    <div class=" text-center">
                        <p>Ookla®, Speedtest®, and Speedtest Intelligence® are among some of the federally registered
                            trademarks of Ookla, LLC and <br> may only be used with explicit written permission. ©
                            2006-2019 Ookla, LLC. All Rights Reserved</p>
                        <p>Privacy Policy Terms of Use Accessibility
                            AdChoices</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>