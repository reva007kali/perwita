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
        <h1>Training Centers FAQs</h1>
        
        <button class="accordion">What types of training does Perwita Nusaraya offer at its training centers?</button>
        <div class="panel">
            <p>Perwita Nusaraya’s training centers offer a range of programs, including maritime training, construction skill training, Japanese language and culture training, and other industry-specific certifications like Basic Safety Training (BST), Survival Craft and Rescue Boat (SCRB), and Medical First Aid (MFA).
            </p>
        </div>

        <button class="accordion">Where are Perwita Nusaraya’s training centers located?</button>
        <div class="panel">
            <p>Our training centers are located in Indonesia, including Sidoarjo (East Java), and we have collaborations with other institutions for international training. We also operate a maritime training center and a construction skill training and test center.</p>
        </div>

        <button class="accordion"> Who can enroll in Perwita Nusaraya's training programs?</button>
        <div class="panel">
            <p>Our training programs are open to individuals who are seeking to improve their skills for overseas or domestic job placement. We cater to aspiring seafarers, construction workers, caregivers, and other professionals looking to gain the necessary certifications and skills.</p>
        </div>

        <button class="accordion">What is the Japanese Language and Culture Training Center?</button>
        <div class="panel">
            <p>Our Japanese Language and Culture Training Center prepares individuals for work and internships in Japan. The program includes language lessons, cultural orientation, and practical training to help participants adapt to life and work in Japan.</p>
        </div>

        <button class="accordion">Do I receive a certificate after completing the training?</button>
        <div class="panel">
            <p>Yes, participants who successfully complete our training programs receive recognized certificates that are essential for job placement, particularly in industries such as maritime, construction, and caregiving.</p>
        </div>

        <button class="accordion">How long do the training programs last?</button>
        <div class="panel">
            <p>The length of the training programs varies depending on the course. For example, some courses like Basic Safety Training (BST) or Security Awareness Training (SAT) can be completed in a few days, while more intensive programs, such as Japanese language courses or construction skills, may take several weeks or months.
            </p>
        </div>

        <button class="accordion">Are there specific requirements to join the training programs?</button>
        <div class="panel">
            <p>Yes, specific requirements depend on the type of training. For example, maritime training might require participants to be physically fit, while language courses may require basic language proficiency. We recommend checking the specific requirements for each course.
            </p>
        </div>

        <button class="accordion">Does Perwita Nusaraya offer domestic job opportunities in Indonesia?</button>
        <div class="panel">
            <p>Yes, Perwita Nusaraya offers a variety of domestic job opportunities in Indonesia, including factory work, construction, security, and other sectors. We connect individuals with employers to contribute to the nation’s industrial growth.
            </p>
        </div>

        <button class="accordion">Can the training help me get a job abroad?</button>
        <div class="panel">
            <p>Absolutely. Many of our training programs are designed to prepare you for international job placements. For instance, the Japanese internship program and maritime training are aimed at enhancing your qualifications for jobs overseas.
            </p>
        </div>

        <button class="accordion">Does Perwita Nusaraya assist with job placement after completing training?</button>
        <div class="panel">
            <p>Yes, we assist participants with job placement after they successfully complete the training. We work closely with our recruitment team to match trained individuals with available opportunities both in Indonesia and abroad.
            </p>
        </div>

        <button class="accordion">How do I register for a training program?</button>
        <div class="panel">
            <p>You can register for a training program by contacting us through our website, visiting our training centers, or reaching out via email or phone. Our staff will guide you through the registration process and inform you of the necessary documents and fees.
            </p>
        </div>

        <button class="accordion">What safety protocols are in place at the maritime training center?</button>
        <div class="panel">
            <p>Safety is our top priority. The maritime training center adheres to international safety standards, and all courses include comprehensive safety training modules. Facilities are regularly inspected, and instructors are experienced professionals with years of maritime experience.
            </p>
        </div>

        <button class="accordion">What kind of training does the Maritime Training Center provide?</button>
        <div class="panel">
            <p>Our Maritime Training Center offers a wide range of courses, including Basic Safety Training (BST), Survival Craft and Rescue Boat (SCRB), Crowd Management Training (CMT), Crisis Management and Human Behavior Training (CMHBT), and more. These courses prepare individuals for various roles in the maritime industry.
            </p>
        </div>

        <button class="accordion">What equipment is available at the training centers?</button>
        <div class="panel">
            <p>Our training centers are equipped with industry-standard tools and facilities to ensure hands-on learning. This includes simulation equipment for maritime training, welding machinery, and tools for construction skills, as well as language labs for language training programs.
            </p>
        </div>

        <button class="accordion">Can I apply for multiple training programs?</button>
        <div class="panel">
            <p>Yes, participants are welcome to enroll in multiple training programs, especially if they are looking to enhance their skill set across different industries. For instance, you can combine maritime training with language courses if you are preparing for international job placements.
            </p>
        </div>

        <button class="accordion">How can I get more information about the training programs?</button>
        <div class="panel">
            <p>You can get more information by contacting us through our official website, emailing manpower@perwitanusaraya.co.id, or calling +62 851 7671 5850. You can also visit any of our training centers for in-person consultations.
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