<?php
$title = '404';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/public/styles/site.css" />
  <title>Document</title>

  <link rel="apple-touch-icon" sizes="180x180" href="public/fav/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="public/fav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="public/fav/favicon-16x16.png">
  <link rel="manifest" href="public/fav/site.webmanifest">
  <link rel="mask-icon" href="public/fav/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
</head>

<body>
  <?php include 'includes/header.php'; ?>


  <div class="body" id="error-page">
    <h2>Oops! Looks like that page doesn't exist.</h2>
    <!-- Source: (original work) Ming DeMers -->
    <img src="public/images/film_roll_confirmation.png" width="300" alt="roll of film">
    <h3>You can:</h3>

    <a href="/">Go Home</a>
    <a href="javascript:history.go(-1)">Go Back</a>

  </div>

  <?php include 'includes/footer.php'; ?>


</body>

</html>
