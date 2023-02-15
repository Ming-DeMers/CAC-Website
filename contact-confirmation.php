<?php
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
  <link rel="stylesheet" type="text/css" href="styles/site.css" />
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
