<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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

.main_body_footer div div div p span:hover {
    cursor: pointer;
    text-decoration: underline;
}

.main_body_support h1,
.main_body_support p {
    font-family: 'Roboto Slab', serif;
}

.main_body_support .card-body a {
    font-style: italic;

}
</style>
<div class="container-fluid text-light overflow-auto w-100 h-100 bg-danger p-0 m-0 ">

    <div class="w-100 bg-info">
        <div class="bg-info p-0 m-0 h-10 " data-spy="scroll" style="height:100vh;overflow-y:scroll"
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


            <div class="home bg-danger w-100 h-100" id="item-2">
                <div class="alert text-center pt-5">
                    <h1>Monitoring Work Processes</h1>
                    <h3>One tool – total visibility over your System</h3>
                    <p>Displays all running status, Real-time views, interactive charts, reports <br>See what it can do
                        for you…</p>
                </div>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner text-light" style="height:430px;">
                        <div class="carousel-item  active ">
                            <div class="d-flex justify-content-center">
                                <div class="card bg-dark m-1 pt-4 pb-2 " style="width: 18rem;">
                                    <div class="card-body ">

                                        <h5 class="card-title text-center"> <i class="fa fa-server fa-3x pb-2"></i>
                                            <p>System Information</p>
                                        </h5>
                                        <p class="card-tex mt-5" style=" text-align: justify;">&nbsp;&nbsp; &nbsp;
                                            &nbsp; A computer system is a set of integrated devices that input, output,
                                            process, and store data and information.
                                        </p>
                                        <a href="#" class="btn btn-success w-100"><i class="fa fa-eye pr-2"></i> Run
                                            Test</a>
                                    </div>
                                </div>

                                <div class="card bg-dark m-1 pt-4 pb-2 " style="width: 18rem;">

                                    <div class="card-body">
                                        <h5 class="card-title text-center"> <i class="fa fa-microchip fa-3x pb-2"></i>
                                            <p>CPU</p>
                                        </h5>
                                        <p class="card-text  mt-5" style=" text-align: justify;"> &nbsp;&nbsp; &nbsp;
                                            &nbsp;A central processor or main processor, is the electronic
                                            circuitry within a computer that carries out the instructions</p>
                                        <a href="#" class="btn btn-success w-100"><i class="fa fa-eye pr-2"></i> Run
                                            Test</a>
                                    </div>
                                </div>

                                <div class="card bg-dark m-1 pt-4 pb-2" style="width: 18rem;">

                                    <div class="card-body">
                                        <h5 class="card-title text-center"> <i class="fas fa-memory fa-3x pb-2"></i>
                                            <p>Memory</p>
                                        </h5>
                                        <p class="card-text  mt-5 " style=" text-align: justify;">&nbsp;&nbsp; &nbsp;
                                            &nbsp;It refers to a device that is used to store information for
                                            immediate use in a computer hardware device.</p>
                                        <a href="#" class="btn btn-success w-100"><i class="fa fa-eye pr-2"></i> Run
                                            Test</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="carousel-item" style="height:500px;">
                            <div class="d-flex justify-content-center ">

                                <div class="card bg-dark m-1 pt-4 pb-2 " style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"> <i class="fas fa-laptop fa-3x pb-2"></i>
                                            <p>Operating System</p>
                                        </h5>
                                        <p class="card-text  mt-5 " style=" text-align: justify;"> &nbsp;&nbsp; &nbsp;
                                            &nbsp;An OS is system software that manages computer hardware,
                                            software resources, and provides common services.</p>
                                        <a href="#" class="btn btn-success w-100"><i class="fa fa-eye pr-2"></i> Run
                                            Test</a>
                                    </div>
                                </div>

                                <div class="card bg-dark m-1  pt-4 pb-2" style="width: 18rem;">

                                    <div class="card-body">
                                        <h5 class="card-title text-center"> <i class="fa fa-desktop fa-3x pb-2"></i>
                                            <p>Graphics</p>
                                        </h5>
                                        <p class="card-text  mt-5" style=" text-align: justify;"> &nbsp;&nbsp; &nbsp;
                                            &nbsp;Graphics are pictures and films created using computers. it
                                            refers to computer-generated image data .</p>
                                        <a href="#" class="btn btn-success w-100"><i class="fa fa-eye pr-2"></i> Run
                                            Test</a>
                                    </div>
                                </div>

                                <div class="card bg-dark m-1 pt-4 pb-2" style="width: 18rem;">

                                    <div class="card-body">
                                        <h5 class="card-title text-center"> <i
                                                class="fas fa-network-wired fa-3x pb-2"></i>
                                            <p>Network</p>
                                        </h5>
                                        <p class="card-text mt-5 " style=" text-align: justify;"> &nbsp;&nbsp; &nbsp;
                                            &nbsp;The Network Computer was a diskless desktop computer device
                                            made by Oracle Corporation from about 1996 to 2000..</p>
                                        <a href="#" class="btn btn-success w-100"><i class="fa fa-eye pr-2"></i> Run
                                            Test</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="carousel-item" style="height:500px;">
                            <div class="d-flex justify-content-center">

                                <div class="card bg-dark m-1 pt-4 pb-2 " style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"> <i class="fa fa-wifi fa-3x pb-2"></i>
                                            <p>WIFI</p>
                                        </h5>
                                        <p class="card-text mt-5 " style=" text-align: justify;"> &nbsp;&nbsp; &nbsp;
                                            &nbsp;Wi-Fi in Computer system uses radio waves to provide
                                            wireless high-speed Internet and network connections</p>
                                        <a href="#" class="btn btn-success w-100"><i class="fa fa-eye pr-2"></i> Run
                                            Test</a>
                                    </div>
                                </div>

                                <div class="card bg-dark m-1  pt-4 pb-2" style="width: 18rem;">

                                    <div class="card-body">
                                        <h5 class="card-title text-center"> <i
                                                class="fa fa-battery-half fa-3x pb-2"></i>
                                            <p>Battery</p>
                                        </h5>
                                        <p class="card-text mt-5" style=" text-align: justify;"> &nbsp;&nbsp; &nbsp;
                                            &nbsp;A battery is a hardware component that supplies power to a
                                            device, enabling that device to work without a power cord.</p>
                                        <a href="#" class="btn btn-success w-100"><i class="fa fa-eye pr-2"></i> Run
                                            Test</a>
                                    </div>
                                </div>

                                <div class="card bg-dark m-1 pt-4 pb-2" style="width: 18rem;">

                                    <div class="card-body">
                                        <h5 class="card-title text-center"> <i class="fa fa-cube fa-3x pb-2"></i>
                                            <p>Virtual Box</p>
                                        </h5>
                                        <p class="card-text mt-5" style=" text-align: justify;"> &nbsp;&nbsp; &nbsp;
                                            &nbsp;Oracle VM VirtualBox (VB) is a free and VB open-source hosted
                                            hypervisor for x86 virtualization, developed by Oracle Corporation.</p>
                                        <a href="#" class="btn btn-success w-100"><i class="fa fa-eye pr-2"></i> Run
                                            Test</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="home w-100  bg-warning text-dark text-center main_body_support" id="item-3">
                <div class="container pt-5">
                    <h1>Want to Improve Your Results?
                    </h1>
                    <p>Here are a few steps you can take:</p>
                </div>
                <div class="d-flex flex-row justify-content-around align-items-around h-100 w-100 flex-wrap p-5">

                    <div class="card m-1 " style="width: 15rem;">

                        <div
                            class="card-body text-center d-flex align-items-between flex-column justify-content-around">
                            <i class="fas fa-tachometer-alt fa-3x p-1"></i>
                            <h5 class="card-title">Improve Speeds</h5>
                            <p class="card-text">Explore steps you can take to improve your Internet speed.</p>
                            <a href="#" class="btn btn-primary">Get Tips</a>
                        </div>
                    </div>

                    <div class="card m-1" style="width: 15rem;">

                        <div
                            class="card-body text-center d-flex align-items-between flex-column justify-content-around">
                            <i class="fas fa-trash fa-3x p-1"></i>
                            <h5 class="card-title">Disk Clean</h5>
                            <p class="card-text">Free up unnecessary spaces. Delete temporary files, unused programs.
                            </p>
                            <a href="#" class="btn btn-primary">Clean up</a>
                        </div>
                    </div>

                    <div class="card m-1" style="width: 15rem;">

                        <div
                            class="card-body text-center d-flex align-items-between flex-column justify-content-around ">
                            <i class="fas fa-recycle fa-3x p-1"></i>
                            <h5 class="card-title">Troubleshoot</h5>
                            <p class="card-text">See if there are any outages and restart your system to become problem
                                free.</p>
                            <a href="#" class="btn btn-primary">Check Outages</a>
                        </div>
                    </div>

                    <div class="card m-1" style="width: 15rem;">

                        <div
                            class="card-body text-center d-flex align-items-between flex-column justify-content-around">
                            <i class="fab fa-hire-a-helper fa-3x p-1"></i>
                            <h5 class="card-title">Help Online</h5>
                            <p class="card-text">We are 24 hours online. <br>
                                Toll-free : xx-xxxxxxxxxx <br>
                                <p>scan_me@scme.com</p>
                            </p>
                            <a href="#" class="btn btn-primary">Contact-us</a>
                        </div>
                    </div>
                    <div class="w-100 mt-5">
                        <div class="alert alert-success p-5 w-100" style="box-shadow:0px 5px 10px 1px black">
                            <h1>All-in-One IT systems Monitoring!</h1>
                            <h3>Affordable. Powerful. Get Started in Minutes.</h3>
                            <button class="btn btn-success mt-5 w-50 text-bold" style="box-shadow:0px 2px 10px 1px black">
                                Build your custom plan
                            </button>
                        </div>
                    </div>
                </div>
            </div>



            <div class="home main_body_footer w-100 h-100 bg-dark text-light" id="item-4">
                <div class="d-flex flex-column align-items-center justify-content-around h-100">
                    <div class="d-flex justify-content-around w-100">
                        <div>
                            <h5>System(Hardware)</h5>
                            <P>
                                <span>Manufacture</span> <br>
                                <span>Model </span> <br>
                                <span>Version </span> <br>
                                <span>Type</span> <br>
                                <span>Serial No </span> <br>

                        </div>
                        <div>
                            <h5>Memory</h5>
                            <P><span>Total</span> <br>
                                <span>Available</span> <br>
                                <span> Free </span><br>
                                <span> Manufacture </span><br>
                                <span> Clock Speed </span><br>
                                <span> Size</span> <br>
                                <span> Voltage Configured</span> </p>

                        </div>
                        <div>
                            <h5>Networks </h5>
                            <P><span>Protocal </span><br>
                                <span> Local Address</span><br>
                                <span> Local Port</span> <br>
                                <span> Peer Address </span><br>
                                <span> Peer Port</span> <br>
                                <span> State </span><br>
                                <span> Process ID(PID)</span></p>
                        </div>
                        <div>
                            <h5>Operating System</h5>
                            <P><span>Platform </span><br>
                                <span> Kernel </span><br>
                                <span> Distribution </span><br>
                                <span> Architecture</span> <br>
                                <span> Build</span> <br>
                                <span> Serial </span><br>
                                <span> Service Pack </span><br>
                                <span> Virtual Box</span></P>
                        </div>

                        <div>
                            <h5>APPS</h5>
                            <P><span>Android </span><br>
                                <span> Apple TV </span><br>
                                <span> Google Chrome</span> <br>
                                <span> iOS </span><br>
                                <span> macOS </span><br>
                                <span> Windows</span></P>
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