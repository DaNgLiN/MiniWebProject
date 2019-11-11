<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ScanMe® - Does faster</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- googlefont -->
    <!-- 
font-family: 'Roboto', sans-serif;
font-family: 'Roboto Slab', serif;
font-family: 'Open Sans Condensed', sans-serif;
font-family: 'Ubuntu', sans-serif;
font-family: 'Fascinate Inline', cursive;
font-family: 'ZCOOL XiaoWei', serif;
font-family: 'Pacifico', cursive;
font-family: 'Satisfy', cursive;
font-family: 'Sarabun', sans-serif;
-->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Roboto|Sarabun|Satisfy|Roboto+Slab|Ubuntu|Pacifico|Fascinate+Inline|ZCOOL+XiaoWei&display=swap"
        rel="stylesheet">

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
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

    @font-face {
        font-family: Potra;
        src: url(font/Potra.otf);
    }

    @font-face {
        font-family: Milea;
        src: url(font/Milea.ttf);
    }
    </style>
</head>

<body>
    <?php include"pages/menu/loading_go.php"?>
    <div class="container-fluid bg-dark p-0 m-0 position-absolute" style="width:100vw;height:100vh;">
        <div class="d-flex h-100 w-100">
            <div class="side_menu h-100 p-1" style="background:#333">
                <?php include "pages/menu/side_menu.php"?>
            </div>
            <div class="main_body bg-danger w-100" style="height:100vh">
                <?php include "pages/menu/main_body.php"?>
            </div>
        </div>


    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />

</body>

</html>
<script src="scripts/side_menu.js"></script>
<script src="scripts/main_body.js"></script>
<script>

</script>