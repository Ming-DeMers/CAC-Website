<?php
$title = 'Contact Confirmation';

$form_name = $_POST['name']; // untrusted
$form_email = $_POST['email']; // untrusted
$form_reason = $_POST['rad_reason']; // untrusted
$form_msg = $_POST['msg']; // untrusted
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="/public/styles/site.css" />
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
  <div class="body">
    <h1>Thanks for reaching out!</h1>

    <h2>Here's what you sent us:</h2>
    <dl>
      <dt><strong>Name:</strong></dt>
      <dd><?php echo  htmlspecialchars($form_name); ?></dd>
      <dt><strong>Email:</strong></dt>
      <dd><?php echo  htmlspecialchars($form_email); ?></dd>
      <dt><strong>Reason:</strong></dt>
      <dd><?php echo  htmlspecialchars($form_reason); ?></dd>
      <dt><strong>Message:</strong></dt>
      <dd><?php echo  htmlspecialchars($form_msg); ?></dd>
    </dl>
    <p>We'll get back to you as soon as possible.</p>


  </div>
  <?php include 'includes/footer.php'; ?>
</body>

</html>
