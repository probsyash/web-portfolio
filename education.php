<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Education | My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
                <h1 class="name">Education & Experience</h1>
            </div>
        </section>

        <!-- Education Section -->
        <section class="cardsContainer">

            <div class="card aboutMeCard">
                <div class="cardIconWrap">
                    <span class="cardIcon">🎓</span>
                </div>
                <span class="cardLabel">Education</span>
            </div>

            <div class="card mainCard">
                <div class="timeline">

                    <div class="timelineItem">
                        <h2 class="timelineTitle">BSc, Computer Science</h2>
                        <p class="timelineInstitution">Queen Mary University of London (QMUL)</p>
                        <p class="timelineDateRange">Sep 2025 — Jun 2028</p>
                        <p class="timelineDescription">
                            Year 1 Course Representative. Predicted 1st Class Honours.
                        </p>
                    </div>

                    <div class="timelineItem">
                        <h2 class="timelineTitle">International Baccalaureate</h2>
                        <p class="timelineInstitution">Dartford Grammar School</p>
                        <p class="timelineDateRange">Sep 2023 — Jun 2025</p>
                        <p class="timelineDescription">
                            38/45 Points.
                            <br>
                            HL: Computer Science, Mathematics AA, Economics.
                            <br>
                            SL: English Literature, Design Technology, Japanese Ab Initio.
                        </p>
                    </div>

                    <div class="timelineItem">
                        <h2 class="timelineTitle">GCSEs</h2>
                        <p class="timelineInstitution">Dartford Grammar School</p>
                        <p class="timelineDateRange">Sep 2018 — Jun 2023</p>
                        <p class="timelineDescription">
                            11 GCSEs 9-7s (including English and Maths).
                        </p>
                    </div>

                </div>
            </div>

        </section>

        <!-- Experience Section -->
        <section class="cardsContainer">

            <div class="card aboutMeCard">
                <div class="cardIconWrap">
                    <span class="cardIcon">💼</span>
                </div>
                <span class="cardLabel">Experience</span>
            </div>

            <div class="card mainCard">
                <div class="timeline">

                    <div class="timelineItem">
                        <h2 class="timelineTitle">Sky - Work Experience</h2>
                        <p class="timelineInstitution">Sky</p>
                        <p class="timelineDateRange">Jun 2024 — Jul 2024</p>
                        <p class="timelineDescription">
                            Gained further insight into programming through Scala. By sitting through
                            pair-programming sessions alongside experienced developers, I learnt the importance
                            of decision making and collaboration in team environments. This understanding further
                            solidified when I learnt of tools like GitHub and how they facilitated effective
                            teamwork, allowing developers to manage code versions and add contributions efficiently.
                        </p>
                    </div>

                    <div class="timelineItem">
                        <h2 class="timelineTitle">Teaching Assistant - Work Experience</h2>
                        <p class="timelineInstitution">Temple Hill Primary Academy</p>
                        <p class="timelineDateRange">Oct 2022 — Oct 2022</p>
                        <p class="timelineDescription">
                            Assisting Year 1-2 students helped me practise leadership and responsibility
                            by being in a position where students relied on me to set an example. Since every
                            child learnt differently and at different paces, I built a sense of adaptability
                            when facing new challenges. This experience improved my communication with both
                            students and teaching staff, including helping out during their Cultures Fair.
                        </p>
                    </div>

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