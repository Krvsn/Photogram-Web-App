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

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


</head>

<body>

  <header>

    <?load_template('header')//refers header html?>

  </header>

  <main>

    <?load_template('calltoaction')//Refers section between header and album posts.?>
    <?load_template('album')//Refers album posts.?>

  </main>

  <?load_template('footer')//Refers album posts.?>
  <script src="/app/assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>