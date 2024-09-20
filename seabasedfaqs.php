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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="icon" href="img/logo-pn.png" type="image/png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <style>
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 80%;
            border: 1px solid gray;
            text-align: left;
            outline: none;
            font-size: 1.2rem;
            transition: 0.4s;
        }

        .active,
        .accordion:hover {
            background-color: #ccc;
        }

        .panel {
            width: 80%;
            height: fit-content;
            text-align: left;
            padding: 20px 18px;
            display: none;
            background-color: white;
        }
    </style>
</head>

<body>
    <section class="faqs" style="background: url(img/background/sbcareer.png); min-height:60vh; justify-content:end;">
        <div class="faqs-container">

            <div class="faqs-card">
                <img src="img/units/sea.jpg" alt="">
                <a href="seabasedfaqs.php">
                    <h1>Sea Based FAQs</h1>
                </a>
            </div>


            <div class="faqs-card">
                <img src="img/units/landbased.jpg" alt="">
                <a href="landbasedfaqs.php">
                    <h1>Land Based FAQs</h1>
                </a>
            </div>

            <div class="faqs-card">
                <img src="img/units/training centers.jpg" alt="">
                <a href="tcfaqs.php">
                    <h1>Training Centers FAQs</h1>
                </a>
            </div>

            <div class="faqs-card">
                <img src="img/units/caretaker.jpeg" alt="">
                <a href="internshipfaqs.php">
                    <h1>Intership FAQs</h1>
                </a>
            </div>

        </div>
    </section>

    <section class="qa">
        <h1>Sea Based FAQs</h1>
        
        <button class="accordion">What services does Perwita Nusaraya provide in the maritime sector ?</button>
        <div class="panel">
            <p>Perwita Nusaraya offers recruitment, training, and career development for individuals in the global maritime industry. We specialize in deploying crew members for ocean, river, and expedition cruises, as well as coastal fishing vessels.
            </p>
        </div>

        <button class="accordion">Which cruise lines does Perwita Nusaraya work with for deployment ?</button>
        <div class="panel">
            <p>We have successfully deployed crew members to leading cruise lines such as Carnival Cruise Line, Oceania, Marella, Regent Seven Seas, and Virgin Voyages.</p>
        </div>

        <button class="accordion">What positions are available for deployment on cruise ships?</button>
        <div class="panel">
            <p>We recruit for a variety of positions across multiple departments, including Food & Beverage, Culinary, Housekeeping, Marine, and other roles like Massage Therapists, Store Keepers, and Sailors.</p>
        </div>

        <button class="accordion">What is the scope of your deployment numbers?</button>
        <div class="panel">
            <p>We have deployed over 4,000 professionals across ocean, river, and expedition cruise lines, as well as coastal fishing vessels.</p>
        </div>

        <button class="accordion">What qualifications are needed to apply for a cruise ship job?</button>
        <div class="panel">
            <p>Qualifications vary depending on the position. Generally, applicants should have relevant experience, strong communication skills, and in some cases, specific certifications or training from our Maritime Training Center.
            </p>
        </div>

        <button class="accordion">What does the Korea Fisherman Program involve?</button>
        <div class="panel">
            <p>Our Korea Fisherman Program involves recruiting and deploying crew members for fishing vessels in Korea. It is a physically demanding job that requires resilience, teamwork, and the ability to work in harsh conditions.
            </p>
        </div>

        <button class="accordion">What kind of tasks do crew members perform on Korean fishing vessels?</button>
        <div class="panel">
            <p>Crew members are responsible for catching, processing, and storing fish, often in challenging and unpredictable weather conditions.
            </p>
        </div>

        <button class="accordion">What kind of tasks do crew members perform on Korean fishing vessels?</button>
        <div class="panel">
            <p>Crew members are responsible for catching, processing, and storing fish, often in challenging and unpredictable weather conditions.
            </p>
        </div>

        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.display === "block") {
                        panel.style.display = "none";
                    } else {
                        panel.style.display = "block";
                    }
                });
            }
        </script>
    </section>

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

    <!-- script list -->

    <script src="https://unpkg.com/feather-icons"></script>

    <script>
        feather.replace();
    </script>
    <script src="script/script.js"></script>
</body>

</html>