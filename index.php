<?php
      include 'libs/load.php'
?>
<!doctype html>
<html lang="en">

<head>

  <?load_template('head')//refers head html?>

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