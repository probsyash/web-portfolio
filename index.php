<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>
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

    <!-- Profile Section -->
    <article>

        <section class="profileHeader">
            <div class="avatarCircle">
                <img src="images/profile.png" alt="Avatar" class="avatarImage">
            </div>
            <div class="profileInfo">
                <h1 class="name">Yashaskar Karmacharya</h1>
                <p class="welcome">Welcome to my portfolio!</p>
            </div>
        </section>

        <section class="cardsContainer">
            <div class="card aboutMeCard">
                <div class="cardIconWrap">
                    <span class="cardIcon">👤</span>
                </div>
                <span class="cardLabel">About Me</span>
            </div>

            <div class="card mainCard">
                <h2>CS @ QMUL</h2>
                <p class="subtitle">Aspiring Software Engineer | Year 1 Course Representative</p>
                <p>• Interested in software engineering, artificial intelligence, and game design</p>
                <p>• Enjoys building projects that combine problem-solving, creativity, and technical implementation</p>
                <p>• Passionate about learning new technologies and applying them to real-world challenges</p>
                <p>• Eager to contribute to impactful projects and collaborate with like-minded individuals</p>
            </div>

            <figure>
                <a href="https://git.io/streak-stats"><img src="https://streak-stats.demolab.com?user=probsyash&background=000000&border=9826EB&stroke=EBEBEB&ring=9826EB&fire=9826EB&currStreakNum=EBEBEB&sideNums=EBEBEB&currStreakLabel=EBEBEB" alt="GitHub Streak" class="githubStats"/></a>
                <br>
                <figcaption>Github Stats</figcaption>
            </figure>

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