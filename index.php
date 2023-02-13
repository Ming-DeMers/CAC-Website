<?php
$title = 'Home';

$nav_home_class = 'active_page';
$nav_citations_class = '';
$nav_cooking_class = '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Capture @ Cornell</title>
  <link rel="stylesheet" type="text/css" href="styles/site.css" />
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

      <!-- <div class="thumbnail-gallery">
        <div id="gallery-figures">
          <figure id="itemA">
            <img src="images/MTD-7.jpg" alt="CAC photowalk" width="640" height="426">
            <figcaption>
              CAC Fall Foliage Photowalk
            </figcaption>
          </figure>

          <figure id="itemB" class="hidden">
            <img src="images/cac_group_photo.jpg" alt="CAC Gbody" width="640" height="426">
            <figcaption>
              CAC's first g-body
            </figcaption>
          </figure>

          <figure id="itemC" class="hidden">
            <img src="images/MTD-ClubFest-4.JPG" alt="CAC Clubfest" width="640" height="426">
            <figcaption>
              Clubfest Fall 2022
            </figcaption>
          </figure>
        </div>
        <div id="gallery-thumbnails">
          <button id="buttonA"><img src="images/MTD-7.jpg" alt="CAC photowalk" id="thumbA" class="outline" width="140"></button>
          <button id="buttonB"><img src="images/cac_group_photo.jpg" alt="CAC group photo" id="thumbB" width="150"></button>
          <button id="buttonC"><img src="images/MTD-ClubFest-4.JPG" alt="CAC at Clubfest" id="thumbC" width="150"></button>
        </div>
      </div> -->

      <h2>What we offer</h2>

      <div class="tile-group">
        <div class="tile">
          <h2>G-Body Meetings</h2>
          <img src="images/gbody thumb.jpg" alt="cac group photo Spring 2022">
          <p>Regular meetings where members can learn about photography, share their work, and socialize. Free pizza included!</p>
        </div>

        <div class="tile">
          <h2>Photowalks</h2>
          <img src="images/photowalks thumb.jpg" alt="photowalk photo">
          <p>Themed photowalk and workshops help to explore and try new skills with others in a fun environment.
          </p>
        </div>

        <div class="tile">
          <h2>Collabs</h2>
          <img src="images/collabs thumb.jpg" alt="collabs photo">
          <p>Unique opportunities to get real-world experience with other clubs and orgs. at Cornell.

          </p>
        </div>
      </div>

      <ul>
        <li>4 Officers</li>
        <li>178 Members</li>
        <li>8 Events</li>

        <h2>Membership</h2>
        <h3>Events & Activities</h3>
        <p>Have access to numerous free opportunities to explore and grow your skills</p>
        <h3>Exclusive Content</h3>
        <p>Rent out camera gear, participate in competitions, and have community of CAC behind you</p>
        <h3>Networking</h3>
        <p>Meet other like-minded creatives to share ideas, learn from each other, and even find paid work</p>


        <div class="col"></div>
    </div>
    <script src="scripts/jquery-3.6.1.js"></script>
    <script src="scripts/image-gallery.js"></script>



</body>
<?php include 'includes/footer.php'; ?>

</html>
