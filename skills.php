<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills | My Portfolio</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Header and Navigation -->
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="education.php">Education</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="viewBlog.php">Blog</a></li>
                <li><a href="skills.php">Skills</a></li>
            </ul>
        </nav>

        <!-- Login Button -->
        <?php if (!isset($_SESSION['username'])): ?>
            <button class="loginCircle" id="loginBtn">
                <img src="images/login.png" alt="Login">
            </button>
        <?php endif; ?>
    </header>

    <!-- Login Modal -->
    <aside id="id01" class="modal">
        <form class="modal-content animate" action="loginProcess.php" method="post">
            <div class="container">
                <h2>Login</h2>
                <br>
                <label for="uname"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="uname" id="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

                <button type="submit" class="loginBtn">Login</button>

                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
        </form>
    </aside>

    <!-- Background Video -->
    <div class="backgroundVideo">
        <video loop autoplay muted playsinline src="videos/galaxy.mp4" type="video/mp4"></video>
    </div>

    <article>

        <!-- Page Title Section -->
        <section class="profileHeader">
            <div class="profileInfo">
                <h1 class="name">Skills & Achievements</h1>
            </div>
        </section>

        <section class="cardsContainer">

            <!-- Header Card -->
            <div class="card aboutMeCard">
                <div class="cardIconWrap">
                    <span class="cardIcon">📝</span>
                </div>
                <span class="cardLabel">Skills</span>
            </div>

            <!-- Soft Skills Card -->
            <div class="card mainCard">
                <h2 class="techTitle">Soft Skills</h2>
                <div class="timeline">

                    <div class="timelineItem">
                        <h2 class="timelineTitle">Communication</h2>
                        <p class="timelineDescription">
                            Developed through presenting projects, acting as Year 1 Course Representative at QMUL,
                            and collaborating with teaching staff during work experience.
                        </p>
                    </div>

                    <div class="timelineItem">
                        <h2 class="timelineTitle">Teamwork & Collaboration</h2>
                        <p class="timelineDescription">
                            Practised through pair-programming sessions at Sky, group projects at university,
                            and using version control tools like GitHub to coordinate with others.
                        </p>
                    </div>

                    <div class="timelineItem">
                        <h2 class="timelineTitle">Adaptability</h2>
                        <p class="timelineDescription">
                            Built during work experience at Temple Hill Primary Academy where I adjusted
                            my approach to support children learning at different paces and styles.
                        </p>
                    </div>

                    <div class="timelineItem">
                        <h2 class="timelineTitle">Problem Solving</h2>
                        <p class="timelineDescription">
                            Sharpened through HL Mathematics and Computer Science in the IB, as well as
                            personal programming projects requiring debugging and logical reasoning.
                        </p>
                    </div>

                </div>
            </div>

            <!-- Achievements Card -->
            <div class="card aboutMeCard">
                <div class="cardIconWrap">
                    <span class="cardIcon">🏆</span>
                </div>
                <span class="cardLabel">Achievements</span>
            </div>

            <div class="card mainCard">
                <h2 class="techTitle">Achievements</h2>
                <div class="timeline">

                    <div class="timelineItem">
                        <h2 class="timelineTitle">Senior Maths Challenge: Silver Award</h2>            
                        <p class="timelineInstitution">UKMT</p>          
                        <p class="timelineDateRange">Issued Oct 2024</p>
                    </div>

                    <div class="timelineItem">
                        <h2 class="timelineTitle">Intermediate Maths Challenge: Gold Award</h2>            
                        <p class="timelineInstitution">UKMT</p>          
                        <p class="timelineDateRange">Issued Oct 2023</p>
                    </div>

                    <div class="timelineItem">
                        <h2 class="timelineTitle">Duke of Edinburgh Bronze Award</h2>
                        <p class="timelineInstitution">The Duke of Edinburgh's Award</p>
                        <p class="timelineDateRange">Issued Jan 2022</p>
                    </div>

                    <div class="timelineItem">
                        <h2 class="timelineTitle">Kanji Kentei Level 10 (146/150)</h2>
                        <p class="timelineInstitution">The Japan Kanji Aptitude Testing Foundation</p>
                        <p class="timelineDateRange">Issued Nov 2021</p>
                    </div>
                </div>
            </div>

            <!-- Tech Stack Card -->
            <div class="card mainCard">
                <h2 class="techTitle">Tech Stack</h2>
                <div class="techStack">
                    <img src="https://img.shields.io/badge/java-%23ED8B00.svg?style=for-the-badge&logo=openjdk&logoColor=white" alt="Java">
                    <img src="https://img.shields.io/badge/lua-%232C2D72.svg?style=for-the-badge&logo=lua&logoColor=white" alt="Lua">
                    <img src="https://img.shields.io/badge/python-3670A0?style=for-the-badge&logo=python&logoColor=ffdd54" alt="Python">
                    <img src="https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3">
                    <img src="https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5">
                    <img src="https://img.shields.io/badge/javascript-%23F7DF1E.svg?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript">
                </div>

                <h2 class="techTitle">Tools & Software</h2>
                <div class="techStack">
                    <img src="https://img.shields.io/badge/blender-%23F5792A.svg?style=for-the-badge&logo=blender&logoColor=white" alt="Blender">
                    <img src="https://img.shields.io/badge/figma-%23F24E1E.svg?style=for-the-badge&logo=figma&logoColor=white" alt="Figma">
                    <img src="https://img.shields.io/badge/-Arduino-00979D?style=for-the-badge&logo=Arduino&logoColor=white" alt="Arduino">
                    <img src="https://img.shields.io/badge/git-%23F05033.svg?style=for-the-badge&logo=git&logoColor=white" alt="Git">
                    <img src="https://img.shields.io/badge/github-%23121011.svg?style=for-the-badge&logo=github&logoColor=white" alt="GitHub">
                    <img src="https://img.shields.io/badge/Visual%20Studio%20Code-0078d7.svg?style=for-the-badge&logo=visual-studio-code&logoColor=white" alt="VS Code">
                </div>
            </div>

        </section>
    </article>

    <!-- Footer -->
    <footer>
        <p>© 2026 Yashaskar Karmacharya | All Rights Reserved</p>
        
        <p class="videoCredit">
            Background video by 
            <a href="https://www.youtube.com/watch?v=moRqo158NGc" target="_blank">MiladiCode</a> 
            via Youtube
        </p>

        <div class="footerLinks">
            <a href="https://www.linkedin.com/in/yashaskar-karmacharya" target="_blank" class="footerLink">
                <img src="https://img.shields.io/badge/linkedin-%230077B5.svg?style=for-the-badge&logo=linkedin&logoColor=white" alt="LinkedIn">
            </a>
            <a href="https://github.com/probsyash" target="_blank" class="footerLink">
                <img src="https://img.shields.io/badge/github-%23121011.svg?style=for-the-badge&logo=github&logoColor=white" alt="GitHub">
            </a>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/login.js"></script>

</body>
</html>