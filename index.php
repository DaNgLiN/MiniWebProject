<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        scroll-behavior: smooth;
    }

    *::-webkit-scrollbar {
        width: 12px;
        background-color: ;
    }

    *::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);

        background-color: black;
    }

    *::-webkit-scrollbar-thumb {

        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: green;
    }
    </style>
</head>

<body>
    <div class="container-fluid bg-primary m-0 p-0" style="height:100vh">
        <div class="side_menu bg-danger h-100" id="_sidemenu">
            <?php include 'pages/menu/side_menu.php'?>

        </div>
        <div class="main_body bg-info p-0 m-0" style="height:100vh">
            <?php include 'pages/menu/main_body.php'?>

        </div>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
<script src="scripts/data.js"></script>
<script src="scripts/side_menu.js"></script>
<script src="scripts/main_body.js"></script>