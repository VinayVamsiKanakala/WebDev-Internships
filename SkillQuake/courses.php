<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillQuake</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="#"><h4>SkillQuake</h4></a>
            <ul class="nav__menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="javascript: document.body.scrollIntoView(true);">Courses</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>

        </div>
    </nav>
    
    <section class="courses">
        <div class="container courses__container">
            <?php
include "db_conn.php";
$sql = "SELECT * FROM courses ORDER BY course_id DESC";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    while ($course = mysqli_fetch_assoc($res)) {
?>
        <article class="course">
            <div class="course__image">
                <img src="uploads/<?= $course['image_url'] ?>" height="225" width="100">
            </div>
            <div class="course__info">
                <h4><?= $course['course_title'] ?></h4>
                <p><?= $course['course_desc'] ?></p>
            <a href="course.php?course_id=<?= $course['course_id'] ?>" class="btn btn-primary">Learn More</a>
            </div>
        </article>
<?php
    }
} else {
    echo "<h1>No courses available</h1>";
}
?>

        </div>
    </section>
    




















<footer class="footer">
    <div class="container footer__container">
            <div class="footer__1">
                <a href="index.html" class="footer__logo"><h4>SkillQuake</h4></a>
                <p>Discover Your Passion, Embrace the Journey Beyond the Books</p>
            </div>
        
        <div class="footer__2">
            <h4>For Links</h4>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="courses.html">Courses</a></li>
            <li><a href="contact.html">Contact</a></li>
        </div>

        <div class="footer__3">
            <h4>Privacy</h4>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms and Conditions</a></li>
            <li><a href="#">Refund Policy</a></li>
        </div>

        <div class="footer__4">
            <h4>Contact Us</h4>
            <div>
                <p>+91 9237423467</p>
                <p>dshagdh@gmail.com</p>
            </div>
        

        <ul class="footer__socials">

            <li>
                <a href="#"><i class="uil uil-facebook"></i></a>
            </li>
            <li>
                <a href="#"><i class="uil uil-instagram"></i></a>
            </li>
            <li>
                <a href="#"><i class="uil uil-twitter"></i></a>
            </li>
            <li>
                <a href="#"><i class="uil uil-linkedin"></i></a>
            </li>
        </ul>
    </div>
    
    </div>
    <div class="footer__copyright">
        <small>Copyright &copy; SkillQuake</small>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="./main.js"></script>

    
</body>
</html>