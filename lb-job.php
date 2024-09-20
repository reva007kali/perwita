<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perwita Nusaraya Group</title>
    <!-- Bootstrap CSS -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediaquery.css">
    <link rel="stylesheet" href="css/darkmode.css">
    <script async src="https://tally.so/widgets/embed.js"></script>

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
    <!-- Land based home  -->
    <section class="landbased" id="landbased" style="background-image: url(img/landbased/turkey.png);">
        <div class="landbased-content">
            <h1 class="">LANDBASED <span>JOB</span></h1>
            <p>"Building Futures, Creating Opportunities"</p>
        </div>
    </section>
    <section class="lb-form">
        <iframe data-tally-src="https://tally.so/r/w5vGeM?transparentBackground=1" frameborder="0" marginheight="0" marginwidth="0" title="Turkey Job Application Form"></iframe>
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