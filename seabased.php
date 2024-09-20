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
</head>

<body>
    <!--seabased home  -->
    <section class="seabased" id="seabased" style="background-image: url(img/hero-picture/1.jpeg);">
        <div class="seabased-content slideupanim">
            <h1>SEA <span>BASED</span></h1>
            <p>"Navigating Excellence, Anchoring Careers"</p>
        </div>
        <div class="sb-cta slideupanim">
            <a href="#ocean">Ocean Cruise</a>
            <a href="#river">River Cruise</a>
            <a href="#expedition">Expedition Cruise</a>
            <a href="#fisherman">Fisherman</a>
        </div>
    </section>

    <!-- overview -->
    <section class="sb-overview" style="background-image:url(img/background/sbbg.png);">
        <div class="managingdirector slideupanim">
            <img src="img/seabased/pakganang.png" alt="">
            <h2>Dwihariyo S.Wibowo</h2>
            <p>Managing Director of Perwita Nusaraya Manning</p>
        </div>
        <div class="sb-content slideupanim">
            <h1>Welcome to Perwita Nusaraya Manning<img src="img/logo/crewmanninglogo.jpg" alt=""></h1>
            <p>"At Perwita Nusaraya, we are committed to shaping the future of maritime professionals. Our seabased
                services provide comprehensive training, recruitment, and career development for individuals aspiring to
                excel in the global maritime industry. We specialize in recruiting for ocean, river, and expedition
                cruise line, as well as coastal fishing vessels. With a focus on excellence, innovation, and safety, we
                prepare our
                trainees and recruits to meet the demands of the ever-evolving maritime sector."</p>
            <br>
            <a href="partner.php">Contact us for partnership</a><a href="https://seaports.perwitamarine.com/">Apply for a Job</a>
        </div>
    </section>
    <!-- overview -->

    <!-- seabased services -->
    <section class="sb-services">
        <h1 class="slideupanim">SEA BASED <span>SERVICES</span></h1>
        <div class="sb-services-container slideupanim">
            <div class="sb-services-card" onclick="openServiceModal('recruitment')">
                <div class="sb-services-box">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M72 88a56 56 0 1 1 112 0A56 56 0 1 1 72 88zM64 245.7C54 256.9 48 271.8 48 288s6 31.1 16 42.3l0-84.7zm144.4-49.3C178.7 222.7 160 261.2 160 304c0 34.3 12 65.8 32 90.5l0 21.5c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-26.8C26.2 371.2 0 332.7 0 288c0-61.9 50.1-112 112-112l32 0c24 0 46.2 7.5 64.4 20.3zM448 416l0-21.5c20-24.7 32-56.2 32-90.5c0-42.8-18.7-81.3-48.4-107.7C449.8 183.5 472 176 496 176l32 0c61.9 0 112 50.1 112 112c0 44.7-26.2 83.2-64 101.2l0 26.8c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32zm8-328a56 56 0 1 1 112 0A56 56 0 1 1 456 88zM576 245.7l0 84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM320 32a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM240 304c0 16.2 6 31 16 42.3l0-84.7c-10 11.3-16 26.1-16 42.3zm144-42.3l0 84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM448 304c0 44.7-26.2 83.2-64 101.2l0 42.8c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-42.8c-37.8-18-64-56.5-64-101.2c0-61.9 50.1-112 112-112l32 0c61.9 0 112 50.1 112 112z" />
                    </svg>
                    <h2>Recruitment Team</h2>
                </div>
            </div>
            <div class="sb-services-card" onclick="openServiceModal('docAssist')">
                <div class="sb-services-box">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M0 64C0 28.7 28.7 0 64 0L384 0c35.3 0 64 28.7 64 64l0 384c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 64zM183 278.8c-27.9-13.2-48.4-39.4-53.7-70.8l39.1 0c1.6 30.4 7.7 53.8 14.6 70.8zm41.3 9.2l-.3 0-.3 0c-2.4-3.5-5.7-8.9-9.1-16.5c-6-13.6-12.4-34.3-14.2-63.5l47.1 0c-1.8 29.2-8.1 49.9-14.2 63.5c-3.4 7.6-6.7 13-9.1 16.5zm40.7-9.2c6.8-17.1 12.9-40.4 14.6-70.8l39.1 0c-5.3 31.4-25.8 57.6-53.7 70.8zM279.6 176c-1.6-30.4-7.7-53.8-14.6-70.8c27.9 13.2 48.4 39.4 53.7 70.8l-39.1 0zM223.7 96l.3 0 .3 0c2.4 3.5 5.7 8.9 9.1 16.5c6 13.6 12.4 34.3 14.2 63.5l-47.1 0c1.8-29.2 8.1-49.9 14.2-63.5c3.4-7.6 6.7-13 9.1-16.5zM183 105.2c-6.8 17.1-12.9 40.4-14.6 70.8l-39.1 0c5.3-31.4 25.8-57.6 53.7-70.8zM352 192A128 128 0 1 0 96 192a128 128 0 1 0 256 0zM112 384c-8.8 0-16 7.2-16 16s7.2 16 16 16l224 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-224 0z" />
                    </svg>
                    <h2>Visa and Document Assistance team</h2>
                </div>
            </div>
            <div class="sb-services-card" onclick="openServiceModal('crewReadiness')">
                <div class="sb-services-box">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3zM625 177L497 305c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L591 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                    </svg>
                    <h2>Crew Readiness Team</h2>
                </div>
            </div>

            <div class="sb-services-card" onclick="openServiceModal('training')">
                <div class="sb-services-box">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M96 64c0-17.7 14.3-32 32-32l32 0c17.7 0 32 14.3 32 32l0 160 0 64 0 160c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-64-32 0c-17.7 0-32-14.3-32-32l0-64c-17.7 0-32-14.3-32-32s14.3-32 32-32l0-64c0-17.7 14.3-32 32-32l32 0 0-64zm448 0l0 64 32 0c17.7 0 32 14.3 32 32l0 64c17.7 0 32 14.3 32 32s-14.3 32-32 32l0 64c0 17.7-14.3 32-32 32l-32 0 0 64c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-160 0-64 0-160c0-17.7 14.3-32 32-32l32 0c17.7 0 32 14.3 32 32zM416 224l0 64-192 0 0-64 192 0z" />
                    </svg>
                    <h2>Training</h2>
                </div>
            </div>
            <div class="sb-services-card" onclick="openServiceModal('deployment')">
                <div class="sb-services-box">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M381 114.9L186.1 41.8c-16.7-6.2-35.2-5.3-51.1 2.7L89.1 67.4C78 73 77.2 88.5 87.6 95.2l146.9 94.5L136 240 77.8 214.1c-8.7-3.9-18.8-3.7-27.3 .6L18.3 230.8c-9.3 4.7-11.8 16.8-5 24.7l73.1 85.3c6.1 7.1 15 11.2 24.3 11.2l137.7 0c5 0 9.9-1.2 14.3-3.4L535.6 212.2c46.5-23.3 82.5-63.3 100.8-112C645.9 75 627.2 48 600.2 48l-57.4 0c-20.2 0-40.2 4.8-58.2 14L381 114.9zM0 480c0 17.7 14.3 32 32 32l576 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L32 448c-17.7 0-32 14.3-32 32z" />
                    </svg>
                    <h2>Deployment</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- seabased services Modals -->
    <div class="sb-modal" id="recruitment">
        <div class="sb-modal-content">
            <span class="sbClose" onclick="closeServiceModal('recruitment')">&times;</span>
            <h3>Recruitment Team</h3>
            <p><strong>The Recruitment team</strong> identifies and attracts potential candidates through job boards,
                social media, and recruitment fairs.
                They review resumes and applications to shortlist suitable candidates, conduct initial interviews, and
                organize assessments to evaluate competencies.</p>
            <p><strong>The team performs background and reference checks</strong> to verify qualifications and work
                history. They
                maintain communication with clients to understand staffing needs and provide regular updates on
                recruitment progress. Ensuring compliance with industry regulations and company policies, they also
                build and maintain a database of qualified candidates for future hiring needs</p>
        </div>
    </div>

    <div class="sb-modal" id="docAssist">
        <div class="sb-modal-content">
            <span class="sbClose" onclick="closeServiceModal('docAssist')">&times;</span>
            <h3>Visa and Document Assistance team</h3>
            <p><strong>The Visa and Document Assistance team helps candidates apply for necessary visas (e.g., C1/D,Schengen)</strong>, coordinates medical examinations, and assists in obtaining the Seafarer’sIdentification and Record Book. They verify the authenticity and completeness </p> of all required
            documents, ensure candidates complete mandatory training (e.g., STCW), and assist with travel arrangements.
            <p>The team ensures compliance with international maritime regulations and company policies, provides
                ongoing support to candidates throughout the documentation process, and maintains accurate records of
                all documentation and correspondence for future reference and compliance audits</p>
        </div>
    </div>

    <div class="sb-modal" id="crewReadiness">
        <div class="sb-modal-content">
            <span class="sbClose" onclick="closeServiceModal('crewReadiness')">&times;</span>
            <h3>Crew Readiness Team</h3>
            <p>
                <strong>The Crew Readiness team </strong>ensures candidates have all necessary documents, such as visas and medical certificates etc, and regularly follows up to remind them about any missing documents and deadlines. They assess candidates’ readiness to join, maintain clear communication to address any concerns, and remind candidates about their joining dates. The team resolves any issues preventing candidates from being document-ready or willing to join, and reports to the Deployment team about those who are not ready. They stay in contact with candidates until they receive a confirmed assignment letter, after which the Deployment team takes over
            </p>
        </div>
    </div>

    <div class="sb-modal" id="training">
        <div class="sb-modal-content">
            <span class="sbClose" onclick="closeServiceModal('training')">&times;</span>
            <h3>Training</h3>
            <p><strong>Perwita Nusaraya's Maritime Training Center</strong> is dedicated to developing highly skilled maritime professionals in Indonesia. With specialized courses such as Basic Safety Training (BST), Medical First Aid (MFA), and Crisis Management and Human Behavior Training (CMHBT), the center ensures that its trainees meet the rigorous standards of the global maritime industry. Combining expert instruction with state-of-the-art facilities, Perwita Nusaraya prepares its students to excel in their careers, contributing to the safety and efficiency of maritime operations worldwide.</p>
        </div>
    </div>

    <div class="sb-modal" id="deployment">
        <div class="sb-modal-content">
            <span class="sbClose" onclick="closeServiceModal('deployment')">&times;</span>
            <h3>Deployment</h3>
            <p>
                <strong>The Deployment team</strong> coordinates with the client’s scheduling team to ensure candidates join as per the scheduled date. They confirm travel and joining details with candidates, handle last-minute cancellations from clients by informing candidates, and manage necessary adjustments. They also inform clients of any last-minute cancellations from candidates and work to find suitable replacements. The team ensures compliance with industry regulations and company policies, maintains accurate records of all communications and changes in deployment schedules, and gathers feedback from clients and candidates to improve the deployment process and enhance service quality.
            </p>
        </div>
    </div>

    <!-- seabased services -->

    <!-- seabased department -->
    <section class="sb-department" style="background-image: url(img/seabased/bgseabased01.png);">
        <h1 class="slideupanim">Positions <span style="color: var(--secondary-color);">Deployed</span> per department on <br><span
                style="color: var(--secondary-color); font-size: 1.8rem;"> <span>Ocean, River, Expedition cruise
                    lines</span><span style="font-size: 1.8rem; color: var(--primary-color);"> and Fishing Vessels</span>
        </h1>

        <div class="sb-department-container slideupanim">

            <div class="department" style="background-image: url(img/seabased/department/dining.jpg);">
                <h3>800+ Deployed</h3>
                <div class="department-row">
                    <ul>
                        <h2>F&B Services<span class="material-symbols-outlined">
                                keyboard_double_arrow_down
                            </span></h2>
                        <li>Buffet Attendant</li>
                        <li>Assistant Waiter</li>
                        <li>Waiter</li>
                        <li>Head Waiter</li>
                        <li>Bar Boy</li>
                        <li>Bar Server</li>
                        <li>Bartender</li>
                    </ul>


                </div>
            </div>

            <div class="department" style="background-image: url(img/seabased/department/culinary2.jpg);">
                <h3>1000+ Deployed</h3>
                <div class="department-row">
                    <ul>
                        <h2>Culinary<span class="material-symbols-outlined">
                                keyboard_double_arrow_down
                            </span></h2>
                        <li>Utility Steward</li>
                        <li>Commis 1,2,3</li>
                        <li>Butcher</li>
                        <li>Baker</li>
                        <li>Pastry Chef</li>
                        <li>DCDP</li>
                        <li>CDP</li>
                        <li>Sous Chef (River Cruise)</li>
                        <li>Executive Chef (River Cruise)</li>
                    </ul>

                </div>
            </div>

            <div class="department" style="background-image: url(img/seabased/department/housekeeping.jpg);">
                <h3>850+ Deployed</h3>
                <div class="department-row">
                    <ul>
                        <h2>Housekeeping<span class="material-symbols-outlined">
                                keyboard_double_arrow_down
                            </span></h2>
                        <li>Housekeeping Utility</li>
                        <li>Assistant Cabin Steward</li>
                        <li>Cabin Steward</li>
                        <li>Laundry</li>
                    </ul>
                </div>
            </div>

            <div class="department" style="background-image: url(img/seabased/department/marine.jpg);">
                <h3>250+ Deployed</h3>
                <div class="department-row">
                    <ul>
                        <h2>Marine & Others<span class="material-symbols-outlined">
                                keyboard_double_arrow_down
                            </span></h2>
                        <li>Ordinary Seaman</li>
                        <li>AB Sailor</li>
                        <li>Wiper</li>
                        <li>Fitter</li>
                        <li>Motorman</li>
                        <li>Electrician</li>
                        <li>Trainee Sailor</li>
                        <br><strong>Others :</strong>
                        <li>Massage Therapist</li>
                        <li>Store Keeper</li>
                    </ul>
                </div>
            </div>

            <div class="department" style="background-image: url(img/seabased/department/3.jpg);">
                <h3>1000+ Deployed</h3>
                <div class="department-row">
                    <ul>
                        <h2>Fisherman<span class="material-symbols-outlined">
                                keyboard_double_arrow_down
                            </span></h2>
                        <li>Korea Fisherman</li>
                    </ul>
                </div>
            </div>

        </div>


    </section>
    <!-- seabased department -->

    <!-- seabased Career -->
    <section class="sb-career">
        <h1 class="slideupanim">OUR CONTRIBUTION TO <span>THE GLOBAL MARITIME SECTOR</span> </h1>
        <p class="slideupanim">Explore a World of Maritime Careers</p>

        <!-- River Cruise section -->
        <div class="sb-river" id="ocean">
            <div class="river-content slideupanim" style="background-color: rgb(9, 24, 66); color: white;">
                <h1>Ocean Cruises</h1>
                <p>"In addition to our extensive deployment services, Perwita Nusaraya has actively helped Indonesian
                    crew members secure positions with some of the world's leading cruise lines. We have facilitated the
                    deployment of talented candidates to Carnival Cruise Line, Oceania, Marella, Regent Seven Seas, and
                    Virgin Voyages, enabling them to embark on successful careers in the global maritime industry."</p>
                <h2>Deployed <span>2279+</span> Crew Members</h2>

                <div class="sb-career-cta slideupanim">
                    <!-- <a href="link to job portal ATS">Available Jobs <span
                            class="material-symbols-outlined">arrow_right</span></a> -->
                    <!-- <a href="lifeOnboardRiver.html">Life Onboard River Cruise<span
                            class="material-symbols-outlined">arrow_right</span></a> -->
                </div>
            </div>
            <div class="sb-river-img slideupanim" style="background-image: url(img/units/sea.jpg);"></div>
        </div>
        <!-- River Cruise section -->
        <div class="sb-river" id="river">
            <div class="sb-river-img slideupanim" style="background-image: url(img/seabased/scylla.jpg);"></div>
            <div class="river-content slideupanim" style="background-color: rgb(9, 24, 66); color: white;">
                <h1>European River Cruises</h1>
                <p>European river cruises offer unique job opportunities for those seeking a career in the travel and
                    hospitality industry. Working on a river cruise ship in Europe can be an exciting and rewarding
                    experience.
                    <br>Perwita Nusaraya currently partners with some of the top European River cruise line companies to
                    deploy high
                    quality experienced candidates
                </p>
                <h2>Deployed <span>745+</span> Crew Members</h2>
                <br>
                <h2>Our <span>Clients :</span></h2>
                <br>
                <div class="sb-clients slideupanim" style="display: flex;">
                    <img src="img/clients/1.png" alt="">
                    <img src="img/clients/cruisinc.png" alt="">
                    <img src="img/clients/riverman.png" alt="">
                    <img src="img/clients/amadeus.png" alt="">
                </div>
                <div class="sb-career-cta slideupanim">
                    <a href="https://seaports.perwitamarine.com/">Available Jobs <span
                            class="material-symbols-outlined">arrow_right</span></a>
                    <a href="lifeOnboardRiver.php">Life Onboard River Cruise<span
                            class="material-symbols-outlined">arrow_right</span></a>
                </div>
            </div>
        </div>

        <!-- river cruise section end -->

        <div class="sb-river" id="expedition">

            <div class="river-content slideupanim" style="background-color: rgb(255, 205, 41);">
                <h1>Expedition Cruise Lines</h1>
                <p>Working on an expedition cruise offers a thrilling career for those passionate about adventure and
                    travel. Jobs range from hospitality roles, like chefs and stewards, to specialized positions such as
                    naturalists and expedition leaders.?</p>
                <h2>Our <span style="color: white;">Clients :</span></h2>
                <br>
                <div class="sb-clients" style="display: flex;">
                    <img src="img/clients/ANGLO.da90e9.jpg" alt="">
                    <img src="img/clients/quark.png" alt="">
                    <img src="img/clients/aurora.png" alt="">
                    <img src="img/clients/americanqueen.png" alt="">
                </div>
                <a href="link to job portal ATS">Available Jobs <span
                        class="material-symbols-outlined">arrow_right</span></a>
            </div>
            <div class="sb-river-img slideupanim" style="background-image: url(img/seabased/americanqueenvoyage.jpg);"></div>

        </div>

        <div class="sb-river slideupanim" id="fisherman" style="background-color: rgb(230, 255, 253);">
            <div class="sb-river-img" style="background-image: url(img/hero-picture/3.jpg);"></div>
            <div class="river-content slideupanim">
                <h1>Korea Fisherman</h1>
                <p>Working onboard a Korean fishing vessel presents a challenging yet rewarding experience. Crew members
                    engage in demanding tasks such as catching, processing, and storing fish, often in harsh and
                    unpredictable weather conditions. The work requires physical stamina, resilience, and teamwork. </p>
                    <h2>Deployed <span>1166+</span> Crew Members</h2>
                    <br>
                <h2>Our <span>Client :</span></h2>
                <div class="sb-clients slideupanim" style="display: flex;">
                    <img src="img/clients/11.png" alt="">
                </div>
                <!-- <a href="link to job portal ATS">Available Jobs <span
                        class="material-symbols-outlined">arrow_right</span></a> -->
            </div>
        </div>

    </section>
    <!-- seabased Career -->


    <!-- sebased deployed number -->
    <section class="sb-deployed">
        <div class="sb-deployed-content slideupanim">
            <h1>"With a proven track record in the maritime industry, Perwita Nusaraya has successfully deployed over
                <span>4,000+ professionals</span> across ocean, river, and expedition cruise Line, as well as coastal
                fishing
                operations."
            </h1>
        </div>
        <img class="slideupanim" src="img/seabased/deployed crew.jpg" alt="">
    </section>
    <!-- sebased deployed number -->

    <!-- Licenses -->
    <section class="licenses">
        <h1 class="licences-tittle slideupanim">OUR <span>LICENSES</span></h1>

        <div class="licenses-container">
            <div class="licenses-card slideupanim" data-license="ISO 9001:2015"
                data-description="International Organization for Standardization" data-file="path/to/iso9001.pdf"
                data-image="img/licences/IsO.png">
                <img src="img/licences/IsO.png" alt="">
                <h1>ISO 9001:2015</h1>
                <p>International Organization for Standardization</p>
            </div>

            <div class="licenses-card slideupanim" data-license="SIUPAK" data-description="Ministry of Transportation"
                data-file="path/to/siupak.pdf" data-image="img/licences/Siupak.jpg">
                <img src="img/licences/Siupak.jpg" alt="">
                <h1>SIUPAK</h1>
                <p>Ministry of Transportation</p>
            </div>

            <div class="licenses-card slideupanim" data-license="MLC 2006" data-description="Maritime Labour Convention"
                data-file="path/to/mlc2006.pdf" data-image="img/licences/mlc2006.png">
                <img src="img/licences/mlc2006.png" alt="">
                <h1>MLC 2006</h1>
                <p>Maritime Labour Convention</p>
            </div>

            <div class="licenses-card slideupanim" data-license="MTC" data-description="Maritime Training Center"
                data-file="path/to/mtc.pdf" data-image="img/licences/maritimetrainingcenter.png">
                <img src="img/licences/maritimetrainingcenter.png" alt="">
                <h1>MTC</h1>
                <p>Maritime Training Center</p>
            </div>

            <div class="licenses-card slideupanim" data-license="Jae Hwa Legalization"
                data-description="Fisherman for South Korea" data-file="path/to/jaehwa.pdf"
                data-image="img/licences/Jaehwa.jpg">
                <img src="img/licences/jaehwa.jpg" alt="">
                <h1>Jae Hwa Legalization</h1>
                <p>Fisherman for South Korea</p>
            </div>

            <div class="licenses-card slideupanim" data-license="BP2MI" data-description="Ministry of Manpower"
                data-file="path/to/bp2mi.pdf" data-image="img/licences/bp2mi.png">
                <img src="img/licences/bp2mi.png" alt="">
                <h1>BP2MI</h1>
                <p>Ministry of Manpower</p>
            </div>

            <div class="licenses-card slideupanim" data-license="Sending organization" data-description="Licence for Japan"
                data-file="path/to/sending_organization.pdf" data-image="img/licences/sending organization.png">
                <img src="img/licences/sending organization.png" alt="">
                <h1>Sending organization</h1>
                <p>Licence for Japan</p>
            </div>

            <div class="licenses-card slideupanim" data-license="NIB" data-description="Business Identification Number"
                data-file="path/to/nib.pdf" data-image="img/licences/NiB.png">
                <img src="img/licences/NiB.png" alt="">
                <h1>NIB</h1>
                <p>Business Identification Number</p>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div id="licenseModal" class="licenseModal">
        <div class="licenseModal-content">
            <span class="closeLicenses">&times;</span>
            <img id="modal-image" src="" alt="License Image" style="width: 100%; height: auto;">
            <h1 id="modal-title"></h1>
            <p id="modal-description"></p>
        </div>
    </div>

    <!-- Licenses removed-->


    <!-- latest post -->
    <section class="post-update slide-up" style="background-image: url(img/background/socialmediabg.png);">
        <div class="sm-tittle slideupanim">

            <h1 class="slideupanim">Follow Our <span>Social Media</span></h1>

            <div class="sm-icons slideupanim">
                <a href="https://www.instagram.com/perwitanusaraya.manning/?hl=en" target="_blank"><img
                        src="img/icon/ig.png" alt=""></a>
                <a href="https://www.facebook.com/PTPerwitaNusaraya/?locale=id_ID" target="_blank"><img
                        src="img/icon/fb.png" alt=""></a>
                <a href="https://id.linkedin.com/company/pt-perwita-nusaraya?trk=ppro_cprof" target="_blank"><img
                        src="img/icon/linkedin.png" alt=""></a>
            </div>

        </div>

        <div class="post slideupanim">
            <img src="img/latest-post/1.jpg" alt="" onclick="openImageModal(this)">
            <img src="img/latest-post/2.jpg" alt="" onclick="openImageModal(this)">
            <img src="img/latest-post/3.jpg" alt="" onclick="openImageModal(this)">
            <img src="img/latest-post/4.jpg" alt="" onclick="openImageModal(this)">
            <img src="img/latest-post/5.jpg" alt="" onclick="openImageModal(this)">
        </div>

        <div id="postModal" class="postModal">
            <span class="closePost" onclick="closeImageModal()">&times;</span>
            <img class="post-modalImg" id="post-modalImg">
        </div>
    </section>
    <!-- latest post -->






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