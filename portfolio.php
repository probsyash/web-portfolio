<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | My Portfolio</title>

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
                <h1 class="name">Portfolio</h1>
            </div>
        </section>

        <!-- Projects Section -->
        <section class="cardsContainer">

            <div class="card aboutMeCard">
                <div class="cardIconWrap">
                    <span class="cardIcon">💻</span>
                </div>
                <span class="cardLabel">Portfolio</span>
            </div>

            <div class="projectGrid">

                <a href="index.php" class="projectCard">
                    <div class="projectImageWrap">
                        <img src="images/Portfolio.png" alt="Project One Screenshot" class="projectImage">
                    </div>
                    <div class="projectInfo">
                        <p class="projectURL">Locally Hosted</p>
                        <h2 class="projectTitle">Portfolio Website</h2>
                        <p class="projectDescription">
                            A personal portfolio website built using HTML, CSS, and JavaScript
                            to showcase my projects and skills.
                        </p>
                    </div>
                </a>

                <a href="https://pass-rota-6f1fa735f123.herokuapp.com/static/" target="_blank" class="projectCard">
                    <div class="projectImageWrap">
                        <img src="images/PASS-Rota.png" alt="Project Two Screenshot" class="projectImage">
                    </div>
                    <div class="projectInfo">
                        <p class="projectURL">pass-rota-6f1fa735f123.herokuapp.com</p>
                        <h2 class="projectTitle">PASS Rota</h2>
                        <p class="projectDescription">
                            Contributed to a website to handle the rota to be used by the PASS team at QMUL.
                        </p>
                    </div>
                </a>

                <a href="https://www.roblox.com/games/17579348521/Worded" target="_blank" class="projectCard">
                    <div class="projectImageWrap">
                        <img src="images/Worded.png" alt="Project Three Screenshot" class="projectImage">
                    </div>
                    <div class="projectInfo">
                        <p class="projectURL">roblox.com/games/17579348521/Worded</p>
                        <h2 class="projectTitle">Worded</h2>
                        <p class="projectDescription">
                            Wordle Replication in Roblox's Game Engine utilising Lua with a focus on UX design.
                        </p>
                    </div>
                </a>

            <!--
                <a href="https://yourproject1.com" target="_blank" class="projectCard">
                    <div class="projectImageWrap">
                        <img src="images/project1.png" alt="Project One Screenshot" class="projectImage">
                    </div>
                    <div class="projectInfo">
                        <p class="projectURL">yourproject1.com</p>
                        <h2 class="projectTitle">Project One</h2>
                        <p class="projectDescription">
                            something about the project sample sample sample blabl
                        </p>
                    </div>
                </a>
            -->
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