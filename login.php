<?php
      include 'libs/load.php'
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Keerthivasan">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Photogram by Krvsn</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.0/css/hover-min.css"
        integrity="sha512-glciccPoOqr5mfDGmlJ3bpbvomZmFK+5dRARpt62nZnlKwaYZSfFpFIgUoD8ujqBw4TmPa/F3TX28OctJzoLfg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- Bootstrap core CSS -->
    <link href="/app/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        body {
            background-image: url(https://images.pexels.com/photos/62693/pexels-photo-62693.jpeg);
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;


        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>


</head>

<body>

    <header>

        <?load_template('header')//refers header html?>

    </header>

    <main>

        <?load_template('loginform')//Refers section between header and album posts.?>


    </main>

    <?load_template('footer')//Refers album posts.?>
    <script src="/app/assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>