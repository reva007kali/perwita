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
        <h1>Internship FAQs</h1>

        <button class="accordion">What is the Perwita Nusaraya Internship Program to Japan?</button>
        <div class="panel">
            <p>The Perwita Nusaraya Internship Program to Japan is a unique opportunity that allows young professionals from Indonesia to gain international work experience while immersing themselves in Japanese culture and industries. The program helps participants develop their language skills, enhance their professional expertise, and grow their global networks.</p>
        </div>

        <button class="accordion">Who is eligible for the Japan Internship Program?</button>
        <div class="panel">
            <p>The program is open to Indonesian citizens aged between 18-30 years old who meet the necessary qualifications, including educational background, basic Japanese language proficiency, and a strong desire to learn and work in Japan. Specific industries may have additional requirements.</p>
        </div>

        <button class="accordion">What kind of industries can I work in?</button>
        <div class="panel">
            <p>Participants in the Perwita Nusaraya Internship Program can work in a variety of industries including manufacturing, agriculture, hospitality, and construction, among others. The specific industry depends on the participant's background, training, and the current demand in Japan.</p>
        </div>

        <button class="accordion">Is Japanese language proficiency required?</button>
        <div class="panel">
            <p>Yes, basic Japanese language proficiency is required. The Foreign Language and Culture Training Center of Perwita Nusaraya Group provides language and cultural training to help participants meet the language requirements before they begin their internship in Japan.</p>
        </div>

        <button class="accordion">What are the benefits of participating in this program?</button>
        <div class="panel">
            <p>Participants gain valuable work experience in Japan, improve their language skills, and have the opportunity to experience Japanese culture firsthand. The program also provides a pathway to career advancement and increases participants' competitiveness in the global job market.</p>
        </div>

        <button class="accordion">How long does the internship last?</button>
        <div class="panel">
            <p>The duration of the internship can vary but typically lasts between one and three years. Participants can choose their program based on their career goals and industry needs.</p>
        </div>

        <button class="accordion">How do I apply for the internship program?</button>
        <div class="panel">
            <p>Interested candidates can apply by contacting Perwita Nusaraya Group directly through their website or visiting their training centers. The application process includes submitting your CV, attending interviews, and undergoing necessary training and assessments.</p>
        </div>

        <button class="accordion">Will accommodation and transportation be provided?</button>
        <div class="panel">
            <p>Yes, accommodation and transportation are often arranged for participants during their internship in Japan. These benefits can vary depending on the employer and the specific industry in which the participant is placed.</p>
        </div>

        <button class="accordion">What support is available for participants in Japan?</button>
        <div class="panel">
            <p>Perwita Nusaraya Group provides continuous support to participants throughout their internship. This includes guidance with work-related issues, cultural adaptation, and legal matters. In addition, the local team in Japan will assist with any challenges participants may face.</p>
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