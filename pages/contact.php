<?php
$title = 'Contact';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Join</title>
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
    <h2>Let's get in touch!</h2>
    <form id="contact-form" action="/contact/confirmation" method="post" novalidate>
      <div class="form-label">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
      </div>
      <div class="form-label">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" />
      </div>
      <div class="form-group label-input" role="group" aria-labelledby="grp">
        <div id="grp">
          <p>Reason for Contact:</p>
        </div>
        <div>
          <div>
            <input type="radio" id="inquire" name="rad_reason" value="inquire" />
            <label for="inquire">Inquire about CAC</label>
          </div>
          <div>
            <input type="radio" id="collab" name="rad_reason" value="collab" />
            <label for="collab">Request a Collab</label>
          </div>
          <div>
            <input type="radio" id="donate" name="rad_reason" value="donate" />
            <label for="donate">Donate</label>
          </div>
        </div>
      </div>
      <div>
        <p><label for="msg">Message (optional):</label></p>
        <textarea id="msg" name="msg" rows="4" cols="50"> </textarea>
      </div>
      <div class="form-buttons">
        <input type="reset" value="Reset">
        <div class="align-right">
          <input id="send-msg" type="submit" value="Send Message" />
        </div>
      </div>
    </form>
  </div>

  <?php include 'includes/footer.php'; ?>

</body>

</html>
