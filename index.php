<!DOCTYPE html>
<html lang="en" class="dark-mode">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Jorge Filho</title>
    <!--Boxicons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="public/portfolio-style.css">

    <!-- CSS for the slicky carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script type="text/javascript">
    (function() {
        emailjs.init("XjVWe7mFT2ODPIZGa");
    })();
    </script>
</head>

<body>
    <header class="header">
        <a href="#" class="logo">Jorge Filho.<span class="animate" style="--i:1;"></span></a>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#education">Education</a>
            <a href="#skills">Skills</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
            <span id="config-icon config-icon-desktop" onclick="openCloseHeaderMenu()">
                <i class='bx bxs-cog'></i>
            </span>

            <span class="active-nav"></span>
            <span class="animate" style="--i:2;"></span>
        </nav>

        <span class="config-icon config-icon-mobile" onclick="openCloseHeaderMenu()">
            <i class='bx bxs-cog'></i>
        </span>

        <div class="bx bx-menu" id="menu-icon"><span class="animate" style="--i:3;"></span></div>
    </header>



    <div class="menu-expanded" id="menu-expanded">
        <div class="transparent-section"></div>
        <div class="menu-itself">
            <div>
                <div class="closing-button">
                    <span onclick="openCloseHeaderMenu();">Close</span>
                    <svg onclick="openCloseHeaderMenu();" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                        </path>
                    </svg>
                </div>
            </div>

            <div id="config-submenu" class="config-submenu">
                <h2>ACCESSIBILITY</h3>

                    <div>
                        <span>Theme:</span>
                        <button id="light-dark-toggle" class="dark-mode" onclick="changeColorMode()">
                            <div></div>
                            <i class='bx bx-sun'></i>
                            <i class='bx bxs-moon'></i>
                        </button>
                    </div>


                    <div class="disabled">
                        <span>Language:</span>
                        <button id="pt-en-toggle" class="en-mode">
                            <div></div>
                            <span>PT</span>
                            <span>EN</span>
                        </button>
                    </div>

            </div>

            <span class="animate" style="--i:1;"></span>
        </div>
    </div>


    <!-- home section design -->
    <section class="home show-animate" id="home">
        <div class="home-content">
            <h1>Hi, I'm <span>Jorge Filho</span><span class="animate" style="--i:1;"></span></h1>
            <div class="text-animate">
                <h3>Full Stack Web Developer</h3>
                <span class="animate" style="--i:1;"></span>
            </div>
            <p>
                Welcome to my Portfolio!! In this site you will get an abroad picture of who Jorge Filho is, his
                educational accomplishments, career experiences, soft and hard skills, and links to his fascinating IT
                Projects.
                <span class="animate" style="--i:1;"></span>
            </p>

            <div class="btn-box">
                <a class="btn" href="public/CV_EN_Jorge_Filho.pdf" download="CV Jorge Filho" id="curriculo">Download
                    CV</a>
                <button href="#" class="btn" onclick="scrollToContact()">Let's Talk</button>
                <span class="animate" style="--i:2;"></span>
            </div>

            <div class="home-sci">
                <a href="https://github.com/BioJorge"><i class='bx bxl-github'></i></a>
                <a href="https://www.linkedin.com/in/jorge-carlos-sousa-filho-5310861a3/"><i
                        class='bx bxl-linkedin'></i></a>
                <a href="https://www.instagram.com/biojorge96/"><i class='bx bxl-instagram'></i></a>
                <span class="animate" style="--i:2;"></span>
            </div>
        </div>

        <div class="home-imgHover"></div>
        <span class="animate home-img" style="--i:3;"></span>
    </section>

    <!-- about section design-->
    <section class="about" id="about">
        <h2 class="heading">About <span>Me</span></h2>

        <div class="about-content">
            <div class="about-img-div">
                <div class="about-img">
                    <img src="public/images/IMG_8567_1.jpg" alt="">
                    <span class="circle-spin"></span>
                    <span class="animate scroll" style="--i:1;"></span>
                </div>

                <div class="about-me">
                    <h3>Jorge Carlos Dias de Sousa Filho</h3>
                    <h4>M.Sc. in Health Sciences</h4>
                    <h5>University of Minho</h5>
                </div>
                <div class="about-sci">
                    <a href="https://github.com/BioJorge"><i class='bx bxl-github'></i></a>
                    <a href="https://www.linkedin.com/in/jorge-carlos-sousa-filho-5310861a3/"><i
                            class='bx bxl-linkedin'></i></a>
                    <a href="https://www.instagram.com/biojorge96/"><i class='bx bxl-instagram'></i></a>
                    <a href="https://join.skype.com/invite/zaYgY5USZbsG"><i class='bx bxl-skype'></i></a>
                    <button onclick="scrollToContact()"><i class='bx bx-envelope'></i></button>
                    <span class="animate scroll" style="--i:1;"></span>
                </div>
            </div>


            <div class="about-bibliography">
                <h3>Full Stack Web Developer!</h3>
                <p>

                    Jorge Filho, an M.Sc. in Health Sciences and ex-veterinarian, successfully transitioned into Full
                    Stack Web Development, starting with Codemaster.pt's course. He's enhancing his skills through a
                    postgraduate degree in Software Engineering.
                    <br><br>
                    With a year in web development, Jorge is adept in Node.js, MSSQL, React, and server app
                    installation. He's proficient in managing projects and client relations. His portfolio highlights
                    his ability to address technical challenges and create accessible websites.
                    <br><br>
                    Jorge's technical expertise is matched with his problem-solving, communication, and leadership
                    skills. He's a well-rounded tech professional, focusing on innovative, practical solutions in web
                    development, emphasizing quality and user experience.
                </p>
                <div class="btn-box btns">
                    <a href="#" class="btn" id="about-btn">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- education section -->
    <section class="education" id="education">
        <h2 class="heading">My <span>Journey</span></h2>

        <div class="education-row">
            <div class="education-column">
                <h3 class="title">Education</span></h3>

                <div class="education-box">
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2023 - Ongoing</div>
                            <h3>Software Engineering Postgraduate Degree</h3>
                            <p>
                                Online postgraduation course provided by Descomplica.com.br.

                            </p>
                            <span class="animate scroll" style="--i:1;"></span>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2022 - 2023</div>
                            <h3>Full Stack Web Developer course</h3>
                            <p>
                                Online course provided by Codemaster.pt, a teaching organization recognized by the
                                Portugal Goverment, INCoDe.2030. The course focused on developing skills in both
                                front-end and back-end technologies, namely:
                                <br>
                                <span style="color: var(--main-color);">HTML <i class='bx bxl-html5'></i> | CSS <i
                                        class='bx bxl-css3'></i> | JAVASCRIPT <i class='bx bxl-javascript'></i> | PHP <i
                                        class='bx bxl-php'></i> | MySQL <i class='bx bxl-postgresql'></i> | BOOTSTRAP <i
                                        class='bx bxl-bootstrap'></i> </span>
                            </p>
                            <span class="animate scroll" style="--i:1;"></span>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2020 - 2023</div>
                            <h3>Master's degree in Health Sciences</h3>
                            <p>
                                Presencial course provided by University of Minho, Braga, Portugal. Several classes were
                                attended, such as Epidemiology, Bioinformatics, and Laboratory Animal Science.
                                <br>
                                The development of my thesis resulted in a high-impact scientific article publication:
                                <a href="https://journals.asm.org/doi/10.1128/spectrum.04564-22"
                                    style="color: var(--main-color); text-decoration: underline;">the Development of a
                                    Versatile Toolbox for Genetic Manipulation of <i>Sporothrix brasiliensis</i></a>
                            </p>
                            <span class="animate scroll" style="--i:2;"></span>
                        </div>
                    </div>


                </div>
            </div>

            <div class="education-column">
                <h3 class="title">Experience</h3>

                <div class="education-box">
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2023 - Ongoing</div>
                            <h3>Full-Stack Developer at InoDev </h3>
                            <p>
                                Full-time work as a full-stack developer at Inodev, an innovation consultancy company.
                                I develop web applications with some of the main technologies on the market: REACT,
                                NODE.js, and SQL.
                                <br>
                                <a href="https://www.inodev.pt/"
                                    style="color: var(--main-color);">https://www.inodev.pt/</a>
                            </p>

                            <span class="animate scroll" style="--i:1;"></span>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> July 2023 - Ago 2023</div>
                            <h3>Full-Stack Web Developer at University of Aveiro</h3>
                            <p>
                                Acting as a freelancer in Full-Stack Web Development in projects of the Center for
                                Languages, Literatures, and Cultures (CLLC) of the University of Aveiro (UA), Portugal.
                                <br>
                                <a href="https://www.ua.pt/pt/cllc/"
                                    style="color: var(--main-color);">https://www.ua.pt/pt/cllc/</a>
                            </p>
                            <span class="animate scroll" style="--i:1;"></span>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2021 - 2022</div>
                            <h3>Scientific Investigator at the University of Minho</h3>
                            <p>
                                By working as a scientific investigator while doing the his Master's at ICVS, University
                                of Minho, Jorge enhanced several soft skills, such as oral and written communication,
                                teamwork and collaboration, critical thinking, problem-solving, and the ability to work
                                under pressure.
                            </p>
                            <span class="animate scroll" style="--i:1;"></span>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2016 - 2019</div>
                            <h3>Academic leagues and tutoring during the bachelor</h3>
                            <p>
                                Jorge took part in several Academic leagues and tutored several students on several
                                courses during his bachelor's in veterinary. These activities further improved his
                                interpersonal skills.
                            </p>
                            <span class="animate scroll" style="--i:2;"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="skills" id="skills">
        <h2 class="heading">My <span>Skills</span></h2>

        <h3>Hard Skills</h3>
        <div class="skills-carousel">

            <div class="item">
                <img src="public/images/react_logo.png" alt="image" class="">
                <h1>React</h1>
                <h3>Despite limited React experience, I adeptly create interactive UIs for enhanced web app usability
                    and performance.</h3>
                <span class="animate scroll" style="--i:1;"></span>
            </div>


            <!-- Node.js div -->
            <div class="item">
                <img src="public/images/nodejs_logo.svg.png" alt="image" class="">
                <h1>NODE.js</h1>
                <h3>Skilled in using NODE.js for building scalable network applications and backend services.</h3>
                <span class="animate scroll" style="--i:1;"></span>
            </div>

            <!-- MSSQL div -->
            <div class="item">
                <img src="public/images/mssql_logo.png" alt="image" class="">
                <h1>MSSQL</h1>
                <h3>Proficient in MSSQL for managing, retrieving, and storing data in relational databases.</h3>
                <span class="animate scroll" style="--i:1;"></span>
            </div>


            <div class="item">
                <img src="public/images/js_logo.png" alt="image" class="">
                <h1>Javascript</h1>
                <h3>Capable of incorporating interactivity and dynamic features into web pages through JavaScript.</h3>
                <span class="animate scroll" style="--i:1;"></span>
            </div>

            <div class="item">
                <img src="public/images/logo-php-1024.png" alt="image" class="">
                <h1>PHP</h1>
                <h3>Extensive experience in PHP facilitates the development of robust server-side web applications and
                    dynamic content management.</h3>
                <span class="animate scroll" style="--i:1;"></span>
            </div>

            <div class="item">
                <img src="public/images/mysql_logo.png" alt="image" class="">
                <h1>MySQL</h1>
                <h3>Possessing a deep understanding of MySQL, effective design and administration of relational
                    databases are ensured.</h3>
                <span class="animate scroll" style="--i:1;"></span>
            </div>

            <div class="item">
                <img src="public/images/bootstrap_logo.png" alt="image" class="">
                <h1>Bootstrap</h1>
                <h3>Skilled in leveraging Bootstrap to create responsive and mobile-first web applications.</h3>
                <span class="animate scroll" style="--i:1;"></span>
            </div>

            <div class="item">
                <img src="public/images/jquery_logo.png" alt="image" class="">
                <h1>JQuery</h1>
                <h3>Despite limited jQuery experience, I can utilize it to streamline and enhance JavaScript code for
                    improved front-end functionality.</h3>
                <span class="animate scroll" style="--i:1;"></span>
            </div>

        </div>

        <div class="custom-buttons" id="custom-buttons">
            <button class="prev-button"><i class='bx bx-chevron-left'></i></button>

            <button class="dots active"></button>
            <button class="dots"></button>
            <button class="dots"></button>
            <button class="dots"></button>
            <button class="dots"></button>
            <button class="dots"></button>
            <button class="dots"></button>
            <button class="dots"></button>

            <button class="next-button"><i class='bx bx-chevron-right'></i></button>
        </div>

        <div id="soft-skill">
            <h3>Soft Skills</h3>
            <div class="soft-skills-grid">
                <div class="grid-column">
                    <div class="grid-row" style="--i:1;">
                        <img src="public/images/time_managment.png" alt="">
                        <p>Time management <i class='bx bx-check'></i></p>
                    </div>
                    <div class="grid-row" style="--i:2;">
                        <img src="public/images/problem-solving.png" alt="">
                        <p>Problem-solving <i class='bx bx-check'></i></p>
                    </div>
                    <div class="grid-row" style="--i:3;">
                        <img src="public/images/creativity.png" alt="">
                        <p>Creativity <i class='bx bx-check'></i></p>
                    </div>
                </div>

                <div class="grid-column">
                    <div class="grid-row" style="--i:1;">
                        <img src="public/images/soft-2.png" alt="">
                        <p>Work ethic <i class='bx bx-check'></i></p>
                    </div>
                    <div class="grid-row" style="--i:2;">
                        <img src="public/images/effective-communication.png" alt="">
                        <p>Assertiveness <i class='bx bx-check'></i></p>
                    </div>
                    <div class="grid-row" style="--i:3;">
                        <img src="public/images/teamwork.png" alt="">
                        <p>Teamwork <i class='bx bx-check'></i></p>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <!-- portfolio section design -->
    <section class="portfolio" id="portfolio">
        <h2 class="heading">My <span>Portfolio</span></h2>

        <p>
            See each available product by clicking its box!
            <br>
            If finished, the button will take you to the site. Otherwise, it will take you to the corresponding GitHub
            repository.
        </p>

        <div class="portfolio-grid">

            <div class="learning portfolio-sites grid-col-span-2">
                <div class="portfolio-site-about" style="justify-content: center !important;">
                    <h1>Learning Typescript</h1>
                    <i class='bx bxl-typescript'
                        style="font-size: 7rem; color: var(--main-color); align-self: center !important;"></i>
                </div>
                <span class="animate scroll" style="--i:2;"></span>
            </div>

            <div id="banco" class="portfolio-sites grid-col-span-3">
                <img src="./public/images/confidential-rubber-stamp-free-png.webp" alt="">
                <div class="portfolio-site-about">
                    <h3>Secret app for a bank</h3>
                    <p class="portfolio-sci">
                        <span>Technologies used: </span>
                        <span>
                            <i class='bx bxl-react'></i>
                            <i class='bx bxl-nodejs'></i>
                            <i class='bx bxl-postgresql'></i>
                            <i class='bx bxl-bootstrap'></i>
                            <i class='bx bxl-git'></i>
                            <i class='bx bx-terminal'></i>
                        </span>
                    </p>
                    <p class="project-status"><span>Status:</span> Launched</p>
                </div>
                <span class="animate scroll" style="--i:1;"></span>
            </div>

            <div id="sebastiao" class="portfolio-sites grid-col-span-3">
                <div class="portfolio-site-about">
                    <h3>Codemaster final project</h3>
                    <p class="portfolio-sci">
                        <span>Technologies used: </span>
                        <span>
                            <i class='bx bxl-javascript'></i>
                            <i class='bx bxl-php'></i>
                            <i class='bx bxl-postgresql'></i>
                            <i class='bx bxl-bootstrap'></i>
                        </span>
                    </p>
                    <p class="project-status"><span>Status:</span> Finished</p>
                    <div class="btn-box btns">
                        <a href="https://jorgesousafilho.pt/sebastiao_alves/home.php" target="_blank" class="btn"
                            id="about-btn">See More</a>
                    </div>
                </div>
                <span class="animate scroll" style="--i:1;"></span>
            </div>

            <div class="under_construction portfolio-sites grid-col-span-2">
                <div class="portfolio-site-about">
                    <h1>E-commerce under Construction</h1>
                </div>
                <span class="animate scroll" style="--i:2;"></span>
            </div>


            <div class="brainstorm portfolio-sites grid-col-span-2">
                <div class="portfolio-site-about">
                    <h1>Still brainstorming</h1>
                </div>
                <span class="animate scroll" style="--i:2;"></span>
            </div>

            <div id="art_museum" class="portfolio-sites grid-col-span-3">
                <div class="portfolio-site-about">
                    <h3>Art Museum</h3>
                    <p class="portfolio-sci">
                        <span>Technologies used: </span>
                        <span>
                            <i class='bx bxl-javascript'></i>
                            <!-- <i class='bx bxl-react'></i> -->
                            <i class='bx bxl-jquery'></i>
                            <i class='bx bxl-bootstrap'></i>
                        </span>
                    </p>
                    <p class="project-status"><span>Status:</span> Front-end finished</p>
                    <div class="btn-box btns">
                        <a href="https://jorgesousafilho.pt/art_museum/home.html" target="_blank" class="btn"
                            id="about-btn">See More</a>
                    </div>
                </div>
                <span class="animate scroll" style="--i:4;"></span>
            </div>

            <div id="aveiro" class="portfolio-sites grid-col-span-3">
                <div class="portfolio-site-about">
                    <h3>University of Aveiro Freelacing</h3>
                    <p class="portfolio-sci">
                        <span>Technologies used: </span>
                        <span>
                            <i class='bx bxl-javascript'></i>
                            <i class='bx bxl-php'></i>
                            <i class='bx bxl-postgresql'></i>
                            <i class='bx bxl-bootstrap'></i>
                        </span>
                    </p>
                    <p class="project-status"><span>Status:</span> Back-end finished</p>
                    <div class="btn-box btns">
                        <a href="https://joane.estudosculturais.com/" target="_blank" class="btn" id="about-btn">See
                            More</a>
                    </div>
                </div>
                <span class="animate scroll" style="--i:3;"></span>
            </div>


            <div class="who-knows portfolio-sites brainstorm grid-col-span-2">
                <div class="portfolio-site-about">
                    <h1>Who knows???</h1>
                </div>
                <span class="animate scroll" style="--i:2;"></span>
            </div>

        </div>
    </section>

    <!-- contact section design -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <form id="form">
            <div class="input-box">
                <div class="input-field">
                    <input type="text" placeholder="Full Name" id="fullName" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="E-mail adress" id="email" required>
                    <span class="focus"></span>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="number" placeholder="Mobile Number" id="mobile" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="E-mail Subject" id="subject" required>
                    <span class="focus"></span>
                </div>
            </div>

            <div class="textarea-field">
                <textarea name="" cols="30" rows="10" placeholder="Your Message" id="message" required></textarea>
                <span class="focus"></span>
                <span class="animate scroll" style="--i:1;"></span>
            </div>

            <div class="btn-box btns" style="margin: auto;">
                <button type="submit" class="btn" style="margin: auto;">Submit</button>
                <span class="animate scroll" style="--i:1;"></span>
            </div>

        </form>
    </section>

    <!-- footer design -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 adapted from Codehal | I'm creating this site merely to develop my coding skills
            </p>
        </div>

        <div class="footer-iconTop">
            <a onclick="scrollToTop()"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>

    <!-- JS for the slicky carousel -->
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

    <!-- My own JS-->
    <script src="public/portfolio-main.js"></script>
</body>

</html>