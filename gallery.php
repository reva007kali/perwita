<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery Page</title>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/mediaquery.css">
  <link rel="stylesheet" href="css/darkmode.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="icon" href="img/logo-pn.png" type="image/png">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>

<body>
  <section class="about-home" style="background-image:url(img/gallery.jpg)">

    <div class="about-content">
      <h1>Gallery</h1>
      <!-- <p>To carry out activities of Human Resources Development in Indonesia.</p> -->
    </div>

  </section>

  <!-- galery row -->
  <section class="galery">
    <div class="galery-tumbnail">
      <img src="img/gallery/1.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/2.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/3.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/4.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/5.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/6.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/7.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/8.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/9.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/10.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/11.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/12.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/13.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/14.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/15.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/16.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/17.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/18.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/19.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/20.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/21.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/22.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/23.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/24.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/25.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/26.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/27.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/28.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/29.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/30.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/31.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/32.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/33.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/34.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/35.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/36.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/37.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/38.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/39.jpg" alt="" onclick="openGaleryModal(this)">
      <img src="img/gallery/40.jpg" alt="" onclick="openGaleryModal(this)">
    </div>
    <div id="galeryModal" class="galeryModal">
      <span class="closeGalery" onclick="closeGaleryModal()">&times;</span>
      <img class="galery-modalImg" id="galery-modalImg">
    </div>
  </section>


  <!-- Footer Section -->
  <?php
  include('footer.php');
  ?>
  <!-- Footer section end-->

  <!-- floating menu -->
  <div id="circularMenu" class="circular-menu">
    <a class="floating-btn" onclick="document.getElementById('circularMenu').classList.toggle('active');">
      <i data-feather="message-circle"></i>
    </a>
    <menu class="items-wrapper">
      <a href="https://wa.me/6281514299198" class="menu-item"><img
          src="img/icon/3225179_app_logo_media_popular_social_icon.png" alt=""></a>
      <a href="https://www.linkedin.com/company/pt-perwita-nusaraya/?trk=ppro_cprof&originalSubdomain=id"
        class="menu-item"><img src="img/icon/linkedin.png" alt=""></a>
      <a href="https://www.facebook.com/PTPerwitaNusaraya/?locale=id_ID" class="menu-item"><img
          src="img/icon/5296499_fb_facebook_facebook logo_icon.svg" alt=""></a>
      <a href="mailto:apply@perwitanusaraya.co.id" class="menu-item"><img src="img/icon/email.png" alt=""></a>
    </menu>
  </div>
  <!-- floating menu  end -->

  <!-- script list -->
  <script src="https://unpkg.com/feather-icons"></script>

  <script>
    feather.replace();
  </script>
  <script src="script/script.js"></script>
</body>

</html>