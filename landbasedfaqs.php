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
        <h1>Land Based FAQs</h1>
        
        <button class="accordion">What types of land-based jobs does Perwita Nusaraya offer?</button>
        <div class="panel">
            <p>We offer a wide range of land-based job opportunities, both domestically and internationally, including hotel jobs, construction work, caregiving, domestic work, factory work, and welding.
            </p>
        </div>

        <button class="accordion">Which countries does Perwita Nusaraya deploy workers to?</button>
        <div class="panel">
            <p>Perwita Nusaraya deploys workers to countries such as Malaysia, Taiwan, Japan, and Turkey. Additionally, we provide job placement services within Indonesia for various roles, including factory workers and security staff.</p>
        </div>

        <button class="accordion">How do I apply for a job abroad through Perwita Nusaraya?</button>
        <div class="panel">
            <p>You can apply for a job abroad by visiting our website’s “Jobs” section and selecting the position you are interested in. You can also contact our recruitment team for further assistance with the application process.</p>
        </div>

        <button class="accordion">What services does Perwita Nusaraya provide to candidates?</button>
        <div class="panel">
            <p>We offer recruitment services, training and development programs, consulting, human resource management, and compliance and legal support. We assist candidates with visa applications, job placement, and career development.</p>
        </div>

        <button class="accordion">What qualifications do I need to work as a caregiver or maid abroad?</button>
        <div class="panel">
            <p>To work as a caregiver or maid, you typically need basic caregiving skills, empathy, and a willingness to help others. Additional qualifications and certifications may be required depending on the country of deployment and the specific employer.
            </p>
        </div>

        <button class="accordion">What opportunities are available for welders?</button>
        <div class="panel">
            <p>Perwita Nusaraya deploys highly skilled welders to meet the demands of various industries. Welders can find opportunities in roles requiring expertise in MIG, TIG, Stick, and Flux-Cored Arc Welding (FCAW) for materials like steel, aluminum, and stainless steel.
            </p>
        </div>

        <button class="accordion">What kind of training does Perwita Nusaraya provide for land-based workers?</button>
        <div class="panel">
            <p>We provide specialized training programs designed to equip candidates with the skills necessary to succeed in their roles. This includes technical training, language courses, and cultural orientation, depending on the job and destination.
            </p>
        </div>

        <button class="accordion">Does Perwita Nusaraya offer domestic job opportunities in Indonesia?</button>
        <div class="panel">
            <p>Yes, Perwita Nusaraya offers a variety of domestic job opportunities in Indonesia, including factory work, construction, security, and other sectors. We connect individuals with employers to contribute to the nation’s industrial growth.
            </p>
        </div>

        <button class="accordion">What are the benefits of working in a hotel in Turkey?</button>
        <div class="panel">
            <p>Working in a hotel in Turkey offers exposure to a dynamic hospitality industry, serving a diverse international clientele. Benefits often include competitive salaries, opportunities for career growth, and the chance to experience a new culture.
            </p>
        </div>

        <button class="accordion">How many land-based workers has Perwita Nusaraya deployed?</button>
        <div class="panel">
            <p>Perwita Nusaraya has successfully deployed over 3,000 caregivers and maids, 500 construction workers, and more than 4,600 factory and security staff within Indonesia.
            </p>
        </div>

        <button class="accordion">What is the process for securing a land-based job?</button>
        <div class="panel">
            <p>The process includes applying through our website or contacting our recruitment team, undergoing an interview and selection process, participating in required training, and completing visa and legal documentation before deployment.
            </p>
        </div>

        <button class="accordion">What licenses and certifications does Perwita Nusaraya hold for land-based recruitment?</button>
        <div class="panel">
            <p>Perwita Nusaraya holds ISO 9001:2015 certification, BP2MI approval from the Ministry of Manpower, and a Business Identification Number (NIB) for compliance with industry standards.
            </p>
        </div>

        <button class="accordion">How can I contact Perwita Nusaraya for land-based job opportunities?</button>
        <div class="panel">
            <p>You can contact us through our website, by email at manpower@perwitanusaraya.co.id, or by phone at +62 851 7671 5850. We have offices in Jakarta, Bali, and Busan (South Korea) for in-person assistance.
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