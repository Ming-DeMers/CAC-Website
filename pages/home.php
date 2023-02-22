<?php
$title = 'Home';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Capture @ Cornell</title>
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
    <div class="col">
      <h2>Who we are</h2>
      Capture @ Cornell (C@C), founded in Spring of 2022, is a
      community-focused club for photographers and videographers of any skill
      level. We host bi-weekly g-body's, photowalks, competitions, and
      collaborations with other clubs and organizations. Membership and access
      to all events are and will always be free for all Cornellians.

      <h2>What we offer</h2>

      <div class="tile-group">
        <div class="tile">
          <h2>G-Body Meetings</h2>
          <!-- Source: (original work) Ming DeMers -->
          <img src="public/images/gbody_thumb.jpg" alt="cac group photo Spring 2022">
          <p>Regular meetings where members can learn about photography, share their work, and socialize. Free pizza included!</p>
        </div>

        <div class="tile">
          <h2>Photowalks</h2>
          <!-- Source: (original work) Ming DeMers -->
          <img src="/public/images/photowalks_thumb.jpg" alt="photowalk photo">
          <p>Themed photowalk and workshops help to explore and try new skills with others in a fun environment.
          </p>
        </div>

        <div class="tile">
          <h2>Collabs</h2>
          <!-- Source: (original work) Ming DeMers -->
          <img src="/public/images/collabs_thumb.jpg" alt="collabs photo">
          <p>Unique opportunities to get real-world experience with other clubs and orgs. at Cornell.

          </p>
        </div>
      </div>

      <ul>
        <li>4 Officers</li>
        <li>178 Members</li>
        <li>8 Events</li>

      </ul>
      <h2>Membership</h2>
      <h3>Events & Activities</h3>
      <p>Have access to numerous free opportunities to explore and grow your skills</p>
      <h3>Exclusive Content</h3>
      <p>Rent out camera gear, participate in competitions, and have community of CAC behind you</p>
      <h3>Networking</h3>
      <p>Meet other like-minded creatives to share ideas, learn from each other, and even find paid work</p>
    </div>
    <script src="scripts/jquery-3.6.1.js"></script>
    <script src="scripts/image-gallery.js"></script>
  </div>

  <?php include 'includes/footer.php'; ?>

</body>

</html>
