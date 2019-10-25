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

.progress{
    width: 150px;
    height: 150px;
    line-height: 150px;
    background: none;
    margin: 0 auto;
    box-shadow: none;
    position: relative;
}
.progress:after{
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 12px solid #fff;
    position: absolute;
    top: 0;
    left: 0;
}
.progress > span{
    width: 50%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 1;
}
.progress .progress-left{
    left: 0;
}
.progress .progress-bar{
    width: 100%;
    height: 100%;
    background: none;
    border-width: 12px;
    border-style: solid;
    position: absolute;
    top: 0;
}
.progress .progress-left .progress-bar{
    left: 100%;
    border-top-right-radius: 80px;
    border-bottom-right-radius: 80px;
    border-left: 0;
    -webkit-transform-origin: center left;
    transform-origin: center left;
}
.progress .progress-right{
    right: 0;
}
.progress .progress-right .progress-bar{
    left: -100%;
    border-top-left-radius: 80px;
    border-bottom-left-radius: 80px;
    border-right: 0;
    -webkit-transform-origin: center right;
    transform-origin: center right;
    animation: loading-1 1.8s linear forwards;
}
.progress .progress-value{
    width: 90%;
    height: 90%;
    border-radius: 50%;
    background: #44484b;
    font-size: 24px;
    color: #fff;
    line-height: 135px;
    text-align: center;
    position: absolute;
    top: 5%;
    left: 5%;
}
.progress.blue .progress-bar{
    border-color: #049dff;
}
.progress.blue .progress-left .progress-bar{
    animation: loading-2 1.5s linear forwards 1.8s;
}
.progress.yellow .progress-bar{
    border-color: #fdba04;
}
.progress.yellow .progress-left .progress-bar{
    animation: loading-3 1s linear forwards 1.8s;
}
.progress.pink .progress-bar{
    border-color: #ed687c;
}
.progress.pink .progress-left .progress-bar{
    animation: loading-4 0.4s linear forwards 1.8s;
}
.progress.green .progress-bar{
    border-color: #1abc9c;
}
.progress.green .progress-left .progress-bar{
    animation: loading-5 1.2s linear forwards 1.8s;
}
@keyframes loading-1{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
}
@keyframes loading-2{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
}
@keyframes loading-3{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
}
@keyframes loading-4{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
@keyframes loading-5{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
@media only screen and (max-width: 990px){
    .progress{ margin-bottom: 20px; }
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
                <div class="alert text-center">
                    <h1>Monitoring Work Processes</h1>
                    <h3>One tool – total visibility over your System</h3>
                    <p>Displays all running status, Real-time views, interactive charts, reports <br>See what it can do for you…</p>
                </div>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner text-light">
                        <div class="carousel-item  active " style="height:500px;">
                            <div class="d-flex justify-content-center">
                                <div class="card bg-dark m-1 pt-4 pb-2 " style="width: 18rem;">
                                    <div class="card-body ">

                                        <h5 class="card-title text-center"> <i class="fa fa-server fa-3x pb-2"></i> <p>System Information</p>
                                        </h5>
                                        <p class="card-tex mt-5"style=" text-align: justify;">&nbsp;&nbsp; &nbsp; &nbsp; A computer system is a set of integrated devices that input, output, process, and store data and information.
                                        </p>
                                        <a href="#" class="btn btn-success w-100"><i class="fa fa-eye pr-2"></i>  Run Test</a>
                                    </div>
                                </div>

                                <div class="card bg-dark m-1 pt-4 pb-2 " style="width: 18rem;">

                                    <div class="card-body">
                                        <h5 class="card-title text-center"> <i class="fa fa-microchip fa-3x pb-2"></i> <p>CPU</p></h5>
                                        <p class="card-text  mt-5" style=" text-align: justify;"> &nbsp;&nbsp; &nbsp; &nbsp;A central processor or main processor, is the electronic
                                            circuitry within a computer that carries out the instructions</p>
                                        <a href="#" class="btn btn-success w-100"><i class="fa fa-eye pr-2"></i>  Run Test</a>
                                    </div>
                                </div>

                                <div class="card bg-dark m-1 pt-4 pb-2" style="width: 18rem;">

                                    <div class="card-body">
                                        <h5 class="card-title text-center"> <i class="fas fa-memory fa-3x pb-2"></i> <p>Memory</p></h5>
                                        <p class="card-text  mt-5 " style=" text-align: justify;">&nbsp;&nbsp; &nbsp; &nbsp;It refers to a device that is used to store information for
                                            immediate use in a computer hardware device.</p>
                                        <a href="#" class="btn btn-success w-100"><i class="fa fa-eye pr-2"></i>  Run Test</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="carousel-item" style="height:500px;">
                            <div class="d-flex justify-content-center p-5">

                                <div class="card bg-dark m-1 pt-4 pb-2 " style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"> <i class="fas fa-laptop fa-3x pb-2"></i> <p>Operating System</p></h5>
                                        <p class="card-text  mt-5 " style=" text-align: justify;"> &nbsp;&nbsp; &nbsp; &nbsp;An OS is system software that manages computer hardware,
                                            software resources, and provides common services.</p>
                                        <a href="#" class="btn btn-success w-100"><i class="fa fa-eye pr-2"></i>  Run Test</a>
                                    </div>
                                </div>

                                <div class="card bg-dark m-1  pt-4 pb-2" style="width: 18rem;">

                                    <div class="card-body">
                                        <h5 class="card-title text-center"> <i class="fa fa-desktop fa-3x pb-2"></i> <p>Graphics</p></h5>
                                        <p class="card-text  mt-5" style=" text-align: justify;"> &nbsp;&nbsp; &nbsp; &nbsp;Graphics are pictures and films created using computers. it
                                            refers to computer-generated image data .</p>
                                        <a href="#" class="btn btn-success w-100"><i class="fa fa-eye pr-2"></i>  Run Test</a>
                                    </div>
                                </div>

                                <div class="card bg-dark m-1 pt-4 pb-2" style="width: 18rem;">

                                    <div class="card-body">
                                        <h5 class="card-title text-center"> <i class="fas fa-network-wired fa-3x pb-2"></i> <p>Network</p></h5>
                                        <p class="card-text mt-5 " style=" text-align: justify;"> &nbsp;&nbsp; &nbsp; &nbsp;The Network Computer was a diskless desktop computer device
                                            made by Oracle Corporation from about 1996 to 2000..</p>
                                        <a href="#" class="btn btn-success w-100"><i class="fa fa-eye pr-2"></i>  Run Test</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="carousel-item" style="height:500px;">
                            <div class="d-flex justify-content-center p-5">

                                <div class="card bg-dark m-1 pt-4 pb-2 " style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"> <i class="fa fa-wifi fa-3x pb-2"></i> <p>WIFI</p></h5>
                                        <p class="card-text mt-5 " style=" text-align: justify;"> &nbsp;&nbsp; &nbsp; &nbsp;Wi-Fi in Computer system uses radio waves to provide
                                            wireless high-speed Internet and network connections</p>
                                        <a href="#" class="btn btn-success w-100"><i class="fa fa-eye pr-2"></i>  Run Test</a>
                                    </div>
                                </div>

                                <div class="card bg-dark m-1  pt-4 pb-2" style="width: 18rem;">

                                    <div class="card-body">
                                        <h5 class="card-title text-center"> <i class="fa fa-battery-half fa-3x pb-2"></i> <p>Battery</p></h5>
                                        <p class="card-text mt-5" style=" text-align: justify;"> &nbsp;&nbsp; &nbsp; &nbsp;A battery is a hardware component that supplies power to a
                                            device, enabling that device to work without a power cord.</p>
                                        <a href="#" class="btn btn-success w-100"><i class="fa fa-eye pr-2"></i>  Run Test</a>
                                    </div>
                                </div>

                                <div class="card bg-dark m-1 pt-4 pb-2" style="width: 18rem;">

                                    <div class="card-body">
                                        <h5 class="card-title text-center"> <i class="fa fa-cube fa-3x pb-2"></i> <p>Virtual Box</p></h5>
                                        <p class="card-text mt-5" style=" text-align: justify;"> &nbsp;&nbsp; &nbsp; &nbsp;Oracle VM VirtualBox  (VB) is a free and VB open-source hosted hypervisor for x86 virtualization, developed by Oracle Corporation.</p>
                                        <a href="#" class="btn btn-success w-100"><i class="fa fa-eye pr-2"></i>  Run Test</a>
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
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modelone">
                            Get Tips
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modelone" tabindex="-1" role="dialog" aria-labelledby="modeloneLabel" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modeloneLabel">Tips to make Internet Faster</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <table class="table table-striped text-align-left">
                                        <thead>
                                          
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row">1</th>
                                            <td>Consider Your data cap</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">2</th>
                                            <td>Give your router break</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">3</th>
                                            <td>Reposition your router</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">4</th>
                                            <td>Embrace ethernet</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">5</th>
                                            <td>Block those ads</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">6</th>
                                            <td>Use a streamlined browser</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">7</th>
                                            <td>Install a virus/malware scanner</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">8</th>
                                            <td>Install a “clear cache” plugin</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">9</th>
                                            <td>Negotiate with your internet service provider</td>
                                            </tr>
                                        </tbody>
                                        </table>
                                </div>
                                <div class="modal-footer">
                                   
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>

                    <div class="card m-1" style="width: 15rem;">

                        <div
                            class="card-body text-center d-flex align-items-between flex-column justify-content-around">
                            <i class="fas fa-trash fa-3x p-1"></i>
                            <h5 class="card-title">Disk Clean</h5>
                            <p class="card-text">Free up unnecessary spaces. Delete temporary files, unused programs.
                            </p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modeltwo" onclick="runthis()">
                            Clean Up
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modeltwo" tabindex="-1" role="dialog" aria-labelledby="modeltwoLabel" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modeltwoLabel">Cleaning DiskS</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <div class="container">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="progress blue">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value" id="progessone">0%</div>
                                            
                                        </div>
                                        <h5>Memory Clean</h5>
                                    </div>
                                    <div class="col-5">
                                        <div class="progress yellow">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value" id="progesstwo">0%</div>
                                        </div>
                                        <h5>Cache Clean</h5>
                                    </div>
                                </div>
                               
                            </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                 


                    <div class="card m-1" style="width: 15rem;">

                        <div
                            class="card-body text-center d-flex align-items-between flex-column justify-content-around ">
                            <i class="fas fa-recycle fa-3x p-1"></i>
                            <h5 class="card-title">Troubleshoot</h5>
                            <p class="card-text">See if there are any outages and restart your system to become problem
                                free.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modelthird">
                            Check Outages
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modelthird" tabindex="-1" role="dialog" aria-labelledby="modelthirdLabel" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modelthirdLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    this is third one
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div>
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
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modelfourth">
                            Contact US
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modelfourth" tabindex="-1" role="dialog" aria-labelledby="modelfourthLabel" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modelfourthLabel">Contact Form <Form:post></Form:post></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-12  ">


                                                    <!--Form with header-->

                                                    <form action="#" method="post" id="myForm">
                                                        <div class="card border-primary rounded-0">
                                                            <div class="card-header p-0">
                                                                <div class="bg-info text-white text-center py-2">
                                                                    <h3><i class="fa fa-envelope"></i> Send your Queries</h3>
                                                                    <p class="m-0">Feel free to ask </p>
                                                                </div>
                                                            </div>
                                                            <div class="card-body p-3">

                                                                <!--Body-->
                                                                <div class="form-group">
                                                                    <div class="input-group mb-2">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                                                        </div>
                                                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Username" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group mb-2">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                                                        </div>
                                                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="john@gmail.com" required>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="input-group mb-2">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                                                        </div>
                                                                        <textarea class="form-control" placeholder="Type your message...." required></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="text-center">
                                                                    <input type="submit" value="Send" class="btn btn-info btn-block rounded-5 py-2">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </form>
                                                    <!--Form with header-->


                                                </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"  onClick="resetthis()">Clear</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 mt-5">
                        <div class="alert alert-success p-5 w-100">
                            <h1>All-in-One IT systems Monitoring!</h1>
                            <h3>Affordable. Powerful. Get Started in Minutes.</h3>
                            <button class="btn btn-success mt-5 w-50">
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
<script>
function runthis(){
    
    var interval;
    var val1=0


    interval=setInterval(function(){ 
    val1++;
    document.getElementById('progessone').innerHTML= val1+"%";
    
    
    if(val1==100){
        clearInterval(interval);
    }
    },37);

    var interval2;
    var val2=0


    interval2=setInterval(function(){ 
    val2++;
    document.getElementById('progesstwo').innerHTML= val2+"%";
    
    
    if(val2==100){
        clearInterval(interval2);
    }
    },30);


                                
}

function resetthis(){
    document.getElementById("myForm").reset();
}
</script>
