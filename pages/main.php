<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<style>
.main_menu{
  transition:0.2s;
  text-align:center;
  padding:10px;
  padding-left:70px;
  padding-right:70px;
  box-sizing:border-box;
  border-radius:3%;
}
.main_menu h3{
  font-size:20px;
  color:red;
}
.main_menu a{
  text-decoration:none;
  color:red;
}
.main_menu:hover{
  background:#888;
  color:white;
  }
.main_menu:hover.main_menu a{
  color:white;
}
.main_menu:hover.main_menu h3{
  color:white;
}
</style>
<div class="container-fluid alert-secondary w-100  " style="height:91.5vh">
<div class="d-flex flex-column justify-content-around h-100 w-100">
    <div class="d-flex w-100 justify-content-around r">
        <div class="main_menu ">
        <a href="./main menu/general.php" class="fa fa-th-list fa-5x"></a>
        <br>
        <h3>General</h3>
        </div>
        <div class="main_menu">
        <a href="" class="fa fa-server fa-5x"></a>
        <br>
        <h3>System</h3>
        </div>
        <div class="main_menu">
        <a href="" class="fa fa-microchip fa-5x"></a>
        <h3>CPU</h3>
        </div>
    </div>
    <div class="d-flex w-100 justify-content-around">
        <div class="main_menu">
        <a href="" class="fas fa-memory fa-5x"></a><br>
        <h3>Memory</h3>
        </div>
        <div class="main_menu">
        <a href="./main menu/battery.php" class="fa fa-battery-half fa-5x"></a><br>
        <h3>Battery</h3>
        </div>
        <div class="main_menu">
        <a href="" class="fa fa-desktop fa-5x"></a><br>
        <h3>Graphics</h3>
        </div>
    </div>
    <div class="d-flex w-100 justify-content-around">
        <div class="main_menu">
        <a href="" class="fas fa-laptop fa-5x"></a><br>
        <h3>OS</h3>
        </div>
        <div class="main_menu">
        <a href="" class="fas fa-chart-line fa-5x"></a>
        <br>
        <h3>Process/Services</h3>
        </div>
        <div class="main_menu">
        <a href="" class="fas fa-hdd fa-5x"></a><br>
        <h3>Disk/FS</h3>
        </div>
    </div>
    <div class="d-flex w-100 justify-content-around">
        <div class="main_menu">
        <a href=" " class="fas fa-network-wired fa-5x"></a><br>
        <h3>Network</h3>
        </div>
        <div class="main_menu">
         <a href="" class="fa fa-wifi fa-5x"></a><br>
        <h3>WIFI</h3>
         </div>
        <div class="main_menu">
        <a href="" class="fa fa-cube fa-5x"></a><br>
        <h3>Virtual Box</h3>
        </div>
    </div>

</div>


</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>