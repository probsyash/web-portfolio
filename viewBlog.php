<?php
session_start();
include("connection.php");

// Fetch all posts unsorted
$sql = "SELECT * FROM blog_posts";
$result = mysqli_query($conn, $sql);

// Store posts in array
$posts = [];
while ($row = mysqli_fetch_assoc($result)) {
    $posts[] = $row;
}

// Sorting algorithm - bubble sort descending by date and time
$n = count($posts);
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        $dateA = $posts[$j]['date_posted'];
        $dateB = $posts[$j + 1]['date_posted'];
        $timeA = $posts[$j]['time_posted'];
        $timeB = $posts[$j + 1]['time_posted'];

        if ($dateA < $dateB) {
            $temp = $posts[$j];
            $posts[$j] = $posts[$j + 1];
            $posts[$j + 1] = $temp;
        }
        elseif ($dateA == $dateB && $timeA < $timeB) {
            $temp = $posts[$j];
            $posts[$j] = $posts[$j + 1];
            $posts[$j + 1] = $temp;
        }
    }
}

$months = [];
foreach ($posts as $post) {
    $monthKey = date('Y-m', strtotime($post['date_posted']));
    $monthLabel = date('F Y', strtotime($post['date_posted']));
    if (!isset($months[$monthKey])) {
        $months[$monthKey] = $monthLabel;
    }
}

$selectedMonth = isset($_GET['month']) ? $_GET['month'] : 'all';

if ($selectedMonth !== 'all') {
    $filteredPosts = [];
    foreach ($posts as $post) {
        $postMonth = date('Y-m', strtotime($post['date_posted']));
        if ($postMonth === $selectedMonth) {
            $filteredPosts[] = $post;
        }
    }
} 
else {
    $filteredPosts = $posts;
}

// If no posts exist, redirect to login
if (count($posts) == 0) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Blog | My Portfolio</title>
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
                <h1 class="name">Blog</h1>
            </div>
        </section>

        <section class="cardsContainer">

            <div class="card aboutMeCard">
                <div class="cardIconWrap">
                    <span class="cardIcon">📝</span>
                </div>
                <span class="cardLabel">Blog</span>
            </div>

            <?php if (isset($_SESSION['username'])): ?>
                <div class="welcomeRow">
                    <aside class="card welcomeMessage">
                        <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
                    </aside>
                    <div class="welcomeButtons">
                        <a href="addEntry.php" class="submitBtn">Add Post</a>
                        <a href="logout.php" class="submitBtn">Logout</a>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Month Filter -->
            <div class="card mainCard monthFilter">
                <form method="get" action="viewBlog.php" class="filterForm">
                    <label for="month">Filter by month:</label>
                    <select name="month" id="month" onchange="this.form.submit()">
                        <option value="all" <?php echo $selectedMonth === 'all' ? 'selected' : ''; ?>>All Posts</option>
                        <?php foreach ($months as $key => $label): ?>
                            <option value="<?php echo $key; ?>" <?php echo $selectedMonth === $key ? 'selected' : ''; ?>>
                                <?php echo $label; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </form>
            </div>

            <?php if (count($filteredPosts) > 0): ?>
                <?php foreach ($filteredPosts as $post): ?>
                    <div class="card mainCard blogEntry">
                        <p class="blogDate"><?php echo date('jS F Y, G:i', strtotime($post['date_posted'] . ' ' . $post['time_posted'])); ?> UTC</p>
                        <h2 class="blogTitle"><?php echo $post['title']; ?></h2>
                        <hr>
                        <p class="blogContent"><?php echo $post['content']; ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="card mainCard">
                    <p>No blog posts found for this month.</p>
                </div>
            <?php endif; ?>

        </section>

    </article>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Yashaskar Karmacharya | All Rights Reserved</p>

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