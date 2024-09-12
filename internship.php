<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship</title>
    <!-- Bootstrap CSS -->

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
    <section class="seabased" id="seabased" style="background-image: url(img/units/internship.png);">
        <div class="seabased-content">
            <h1>INTERNSHIP <span>PROGRAM</span></h1>
            <p>From Indonesia to Japan: Unlocking Global Opportunities</p>
        </div>
    </section>

    <!-- training centers service -->
    <section class="perwita" id="perwita" style="background-image: url(img/background/milestonebg.png);">

        <div class="perwita-tittle">
            <img src="img/logo/Internshiplogo.png" alt="">
            <h1>The Perwita Nusaraya Internship Program to Japan offers young professionals a unique opportunity to gain valuable international experience while immersing themselves in Japanese culture and industry.</h1>
            <p>Designed to cultivate skilled, globally competitive talent, this program bridges the gap between Indonesia and Japan, empowering participants to enhance their expertise, language skills, and professional networks.</p>
            <img src="img/assest/group logo.png" alt="">
        </div>
    </section>

    <div class="sb-river" id="flc" style="min-height:100vh;">
        <div class="river-content" style="background-color: rgb(255, 249, 78);">
            <h1>Foreign Language and culture</h1>
            <p>The Foreign Language and Culture Training Center of Perwita Nusaraya Group is an esteemed institution
                focused on equipping individuals with essential language skills and cultural understanding for
                international opportunities. Specializing in Japanese language and cultural education, the center
                offers meticulously designed programs that cover language proficiency, cultural nuances, and
                professional etiquette.</p>
            <br>
            <ul style="list-style: circle; font-size: 1rem;">
                <li><strong>Japanese Language Program</strong></li>
            </ul>
            <a href="https://perwitainternship.com/training" target="_blank">Learn More<span
                    class="material-symbols-outlined">arrow_right</span></a>
        </div>
        <div class="sb-river-img" style="background-image: url(img/japan/3.jpg)"></div>
    </div>



    <!-- floating menu -->
    <div id="circularMenu" class="circular-menu">
        <a class="floating-btn" onclick="document.getElementById('circularMenu').classList.toggle('active');">
            <i data-feather="message-circle"></i>
        </a>
        <menu class="items-wrapper">
            <a href="https://wa.me/6281514299198" class="menu-item"><img src="img/icon/3225179_app_logo_media_popular_social_icon.png" alt=""></a>
            <a href="https://www.linkedin.com/company/pt-perwita-nusaraya/?trk=ppro_cprof&originalSubdomain=id" class="menu-item"><img src="img/icon/linkedin.png" alt=""></a>
            <a href="https://www.facebook.com/PTPerwitaNusaraya/?locale=id_ID" class="menu-item"><img src="img/icon/5296499_fb_facebook_facebook logo_icon.svg" alt=""></a>
            <a href="mailto:apply@perwitanusaraya.co.id" class="menu-item"><img src="img/icon/email.png" alt=""></a>
        </menu>
    </div>
    <!-- floating menu  end -->
    <?php
    include 'footer.php';
    ?>
    <!-- script list -->
    <script src="https://unpkg.com/feather-icons"></script>

    <script>
        feather.replace();
    </script>
    <script src="script/script.js"></script>
</body>

</html>