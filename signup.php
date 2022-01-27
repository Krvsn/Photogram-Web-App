<?php
      include 'libs/load.php'
?>
<!doctype html>
<html lang="en">

<head>
    <?load_template('head')//refers head html?>

</head>

<body>
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

        .form-signin input[type="text"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[name="phone"] {
            margin-bottom: -1px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>

    <header>

        <?load_template('header')//refers header html?>

    </header>

    <main>

        <?load_template('signupform')//Refers section between header and album posts.?>


    </main>

    <?load_template('footer')//Refers album posts.?>
    <script src="/app/assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>