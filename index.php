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

      <div class="thumbnail-gallery">
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
      </div>

      <h2>What we offer</h2>

      <ul>
        <li>G-body meetings</li>
        <li>Workshops</li>
        <li>Photowalks</li>
        <li>Collabs</li>
        <li>Socials</li>
      </ul>


      <div class="col"></div>
    </div>
    <script src="scripts/jquery-3.6.1.js"></script>
    <script src="scripts/image-gallery.js"></script>

    <?php include 'includes/footer.php'; ?>


</body>

</html>
