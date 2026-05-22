<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
include("connection.php");

// Fetch existing posts for preview
$sql = "SELECT * FROM blog_posts";
$result = mysqli_query($conn, $sql);
$posts = [];
while ($row = mysqli_fetch_assoc($result)) {
    $posts[] = $row;
}

// Sort posts - bubble sort descending
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Entry | My Portfolio</title>
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
    </header>

    <!-- Background Video -->
    <div class="backgroundVideo">
        <video loop autoplay muted playsinline src="videos/galaxy.mp4" type="video/mp4"></video>
    </div>

    <article>

        <!-- Page Title Section -->
        <section class="profileHeader">
            <div class="profileInfo">
                <h1 class="name">Add Blog Entry</h1>
                <p class="welcome">Share your thoughts</p>
            </div>
        </section>

        <!-- Add Entry Section -->
        <section class="cardsContainer">

            <div class="card aboutMeCard">
                <div class="cardIconWrap">
                    <span class="cardIcon">✏️</span>
                </div>
                <span class="cardLabel">New Post</span>
            </div>

            <div class="card mainCard">
                <form class="blogForm" action="addPost.php" method="post" id="blogForm">

                    <div class="formGroup">
                        <label for="blogTitle">Title</label>
                        <input
                            type="text"
                            id="blogTitle"
                            name="blogTitle"
                            placeholder="Enter post title"
                            value="<?php echo isset($_SESSION['preview']) ? htmlspecialchars($_SESSION['preview']['title']) : ''; ?>"
                        >
                    </div>

                    <div class="formGroup">
                        <label for="blogPost">Post</label>
                        <textarea
                            id="blogPost"
                            name="blogPost"
                            rows="10"
                            placeholder="Write your blog post here..."
                        ><?php echo isset($_SESSION['preview']) ? htmlspecialchars($_SESSION['preview']['content']) : ''; ?></textarea>
                    </div>

                    <div class="formButtons">
                        <button type="submit" class="submitBtn">Post</button>
                        <button type="button" class="submitBtn" id="clearBtn">Clear</button>
                        <button type="submit" name="preview" value="1" class="submitBtn">Preview</button>
                    </div>
                </form>
            </div>

            <!-- Preview Section - only shows when preview is clicked -->
            <?php if (isset($_SESSION['preview'])): ?>

                <div class="card aboutMeCard">
                    <div class="cardIconWrap">
                        <span class="cardIcon">👁️</span>
                    </div>
                    <span class="cardLabel">Preview</span>
                </div>

                <div class="card mainCard blogEntry">
                    <p class="blogDate"><?php echo date('jS F Y, G:i'); ?> UTC</p>
                    <h2 class="blogTitle"><?php echo htmlspecialchars($_SESSION['preview']['title']); ?></h2>
                    <hr>
                    <p class="blogContent"><?php echo htmlspecialchars($_SESSION['preview']['content']); ?></p>
                    <hr>
                    <div class="previewButtons">
                        <form action="addPost.php" method="post" style="display: inline;">
                            <input type="hidden" name="blogTitle" value="<?php echo htmlspecialchars($_SESSION['preview']['title']); ?>">
                            <input type="hidden" name="blogPost" value="<?php echo htmlspecialchars($_SESSION['preview']['content']); ?>">
                            <button type="submit" class="submitBtn">Upload</button>
                        </form>
                        <a href="addEntry.php" class="submitBtn">Edit</a>
                    </div>
                </div>

                <!-- Previous entries underneath preview -->
                <?php foreach ($posts as $post): ?>
                    <div class="card mainCard blogEntry">
                        <p class="blogDate"><?php echo date('jS F Y, G:i', strtotime($post['date_posted'] . ' ' . $post['time_posted'])); ?> UTC</p>
                        <h2 class="blogTitle"><?php echo $post['title']; ?></h2>
                        <hr>
                        <p class="blogContent"><?php echo $post['content']; ?></p>
                    </div>
                <?php endforeach; ?>
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
    <script src="js/addEntry.js"></script>

</body>
</html>