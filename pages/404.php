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
</head>

<body>
  <?php include 'includes/header.php'; ?>


  <div class="body" id="error-page">
    <h2>Oops! Looks like that page doesn't exist.</h2>
    <img src="/public/images/film_roll_confirmation.png" width="300px" alt="roll of film">
    <h3>You can:</h3>
    <p>
      <button><a href="/">Go Home</a></button>
      <button><a href="javascript:history.go(-1)">Go Back</a></button>
    </p>
  </div>

  <?php include 'includes/footer.php'; ?>


</body>

</html>
