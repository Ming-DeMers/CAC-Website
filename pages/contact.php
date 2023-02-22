<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Join</title>
  <link rel="stylesheet" type="text/css" href="/public/styles/site.css" />

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
      <p>

      <div class="form-group label-input" role="group" aria-labelledby="grp">
        <div id="grp">Reason for Contact:</div>
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
      </p>
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
    </section>
  </div>

  <?php include 'includes/footer.php'; ?>

</body>

</html>
