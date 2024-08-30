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
  <div class="footer">

    <h1 class="footer-header"><img src="img/logo-no-background.png" alt="">Perwita Nusaraya Group</h1>

    <div class="footer-content-container">

      <div class="offices">

        <div class="office-content">
          <h1>Corporate Office</h1>
          <ul>
            <li><span class="material-symbols-outlined">location_on</span>Graha Perwita Building Jalan Raya Bypass Krian
              Km.31 Sidoarjo 61262. East Java-Indonesia.</li>
            <li><span class="material-symbols-outlined">email</span>manpower@perwitanusaraya.co.id</li>
            <li><span class="material-symbols-outlined">phone</span>+62 851 7671 5850</li>
            <li><span class="material-symbols-outlined">map</span><a href="#" style="color: white;">Click to see map</a>
            </li>
          </ul>
        </div>

        <div class="office-content">
          <h1>Jakarta Branch Office</h1>
          <ul>
            <li><span class="material-symbols-outlined">location_on</span>Perwita Nusaraya Wisma Bumiputera LT. 3A, Jl.
              Jend Sudirman Kav. 75, South Jakarta 12910, DKI Jakarta.
            </li>
            <li><span class="material-symbols-outlined">email</span>manpower@perwitanusaraya.co.id</li>
            <li><span class="material-symbols-outlined">phone</span>+62 800 0000 0000</li>
            <li><span class="material-symbols-outlined">map</span><a href="#" style="color: white;">Click to see map</a>
            </li>
          </ul>
        </div>

        <div class="office-content">
          <h1>Bali Branch Office</h1>
          <li><span class="material-symbols-outlined">location_on</span>Jl. Bina Kusuma No. 9 , Ubung - Denpasar , Bali.
          </li>
          <li><span class="material-symbols-outlined">email</span>email@perwitanusaraya.co.id</li>
          <li><span class="material-symbols-outlined">phone</span>+62 800 0000 0000</li>
          <li><span class="material-symbols-outlined">map</span><a href="#" style="color: white;">Click to see map</a>
          </li>
        </div>

        <div class="office-content">
          <h1>South Korea Branch Office</h1>
          <li><span class="material-symbols-outlined">location_on</span>Hanil Office Tower 152, Jaseong-ro, 1815,
            Munhyeon-dong, Nam-gu, Busan, South Korea</li>
          <li><span class="material-symbols-outlined">email</span>email@perwitanusaraya.co.id</li>
          <li><span class="material-symbols-outlined">phone</span>+000 0000 0000 000</li>
          <li><span class="material-symbols-outlined">map</span>Click to see map<a href="#" style="color: white;"
              class="map-link"></a>
          </li>
        </div>

      </div>

      <div class="link-and-sm">
        <h2>Link</h2>
        <a href="index.html">Home</a>
        <a href="about.html">About</a>
        <a href="units.html">Units</a>
        <a href="job-portal.html">Jobs</a>
        <a href="partner.html">Partner</a>
        <a href="#">Gallery</a>
        <a href="faqs.html">FAQs</a>
      </div>

      <div class="contact-form">
        <h1>Contact us</h1>
        <form action="php/submit_form.php" method="post">
          <input type="text" name="name" placeholder=" Your Name" required>
          <input type="email" name="email" placeholder=" Your Email" required>
          <textarea name="message" rows="4" placeholder="Your Message" required></textarea>
          <button type="submit">Send Message</button>
        </form>

        <div class="sm-icons">
          <p>Sea Based Social Media:</p>
          <a href="https://www.instagram.com/perwitanusaraya.manning/?hl=en" target="_blank"><img src="img/icon/ig.png"
              alt=""></a>
          <a href="https://www.facebook.com/PTPerwitaNusaraya/?locale=id_ID" target="_blank"><img src="img/icon/fb.png"
              alt=""></a>
          <a href="https://id.linkedin.com/company/pt-perwita-nusaraya?trk=ppro_cprof" target="_blank"><img
              src="img/icon/linkedin.png" alt=""></a>
        </div>

        <div class="sm-icons">
          <p>Land Based Social Media:</p>
          <a href="https://www.instagram.com/perwitanusaraya.p3mi/?hl=en" target="_blank"><img src="img/icon/ig.png"
              alt=""></a>
          <a href="https://www.facebook.com/perwitanusarayagresik/?locale=id_ID" target="_blank"><img
              src="img/icon/fb.png" alt=""></a>
          <!-- <a href="https://id.linkedin.com/company/pt-perwita-nusaraya?trk=ppro_cprof" target="_blank"><img
                  src="img/icon/linkedin.png" alt=""></a> -->
        </div>

        <div class="sm-icons">
          <p>Internship Social Media:</p>
          <a href="https://www.instagram.com/japan.perwitanusaraya/" target="_blank"><img src="img/icon/ig.png"
              alt=""></a>
          <!-- <a href="https://www.facebook.com/PTPerwitaNusaraya/?locale=id_ID" target="_blank"><img
                  src="img/icon/fb.png" alt=""></a>
          <a href="https://id.linkedin.com/company/pt-perwita-nusaraya?trk=ppro_cprof" target="_blank"><img
                  src="img/icon/linkedin.png" alt=""></a> -->
        </div>
      </div>
    </div>


    <div class="copyright"><i data-feather="copyright"></i>&copy; Perwita Nusarya Group 2024</div>
    <img src="img/assest/group logo.png" alt="" class="group-logo-footer">
  </div>
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