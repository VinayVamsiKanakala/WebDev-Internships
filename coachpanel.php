<?php
// Start the session
session_start();

// Check if the user is logged in
if(isset($_SESSION['cname'])){
    // Assuming you have these values set earlier in your code
    $uid = $_SESSION["cname"]; // Replace with the actual username
    $mail = $_SESSION["mail"]; // Replace with the actual email
}
else {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillQuake User</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        p{
            color:black;
        }
        img {
            width:60px;
            cursor: pointer;
            border-radius:70px;
        }

        .floating-container {
            position: fixed;
            top: 100px; /* Adjusted top position */
            right: 10px; /* Adjusted right position */
            background-color: #adff2f;
            box-shadow: -2px 0 10px rgba(0, 0, 0, 0.3);
            padding: 20px;
            border: 2px solid #000000;
            border-radius: 10px;
            z-index: 999;
            display: none;
            height: 600px;
            color: #000000;
            overflow-y: auto; /* Enable vertical scroll if needed */
        }

        .cross-mark {
            cursor: pointer;
            font-size: 18px;
            color: #000000;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .category{
            width:400px;
            height:250px;
        }
        nav{
            background-color: #adff2f;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding:50px;
        }

        label {
            margin: 10px 0;
        }

        input[type="file"] {
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>



    <nav class="lognav">
        <div class="container nav__container">
            <a href="#"><h4>SkillQuake</h4></a>
            <ul class="nav__menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <img src="images/ikon.jpg" id="profile-btn" type="button">
            </ul>
        </div>
    </nav>
    
    <div class="categories__right" >
        <a href="#" class="category-button">
            <article class="category" onclick="showUploadPopup()">
                <span class="category__icon"><i class="uil uil-cloud-upload"></i></span>
                <h5>Upload Videos</h5>
                <p>Click to upload videos and add description.</p>
            </article>
        </a>
        <a href="#" class="category-button">
            <article class="category" onclick="showStudentsPopup()">
                <span class="category__icon"><i class="uil uil-users"></i></span>
                <h5>Know Your Students</h5>
                <p>Get information about your students.</p>
            </article>
        </a>
    </div>

    <div id="profile-popup" class="floating-container">
        <span class="cross-mark" onclick="closeProfile()">X</span> <br>
        <h3><ul>Profile Details</ul></h3><br>
        Name: <p><?php echo "$uid"; ?></p><br>
        mail: <p><?php echo "$mail"; ?></p><br>
        <!-- Add more details as needed -->
        <button onclick="logout()">Logout</button>
    </div>

    <div id="upload-popup" class="floating-container">
        <span class="cross-mark" onclick="closeUploadPopup()">X</span> <br>
        <h3><ul>Upload Videos</ul></h3><br>
        <!-- Form with an ID for JavaScript interaction -->
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="videoUpload">Select Video:</label>
            <input type="file" id="videoUpload" name="my_video" accept="video/*">
            <br>
            <!-- Button to submit the form -->
            <input type="submit" name="submit" value="Upload">
        </form>
    </div>

    <div id="students-popup" class="floating-container">
        <span class="cross-mark" onclick="closeStudentsPopup()">X</span> <br>
        <h3><ul>Student Information</ul></h3><br>
        <!-- Add student information here -->
        <p>Student 1: John Doe</p>
        <p>Student 2: Jane Smith</p>
        <!-- Add more student information as needed -->
    </div>

    <script>
        document.getElementById('profile-btn').addEventListener('click', function () {
            document.getElementById('profile-popup').style.display = 'block';
        });

        function closeProfile() {
            document.getElementById('profile-popup').style.display = 'none';
        }
        function closeUploadPopup() {
            document.getElementById('upload-popup').style.display = 'none';
        }


        function showUploadPopup() {
            document.getElementById('upload-popup').style.display = 'block';
        }

        function closeUploadPopup() {
            document.getElementById('upload-popup').style.display = 'none';
        }

       

        function showStudentsPopup() {
            document.getElementById('students-popup').style.display = 'block';
        }

        function closeStudentsPopup() {
            document.getElementById('students-popup').style.display = 'none';
        }

        window.addEventListener('mouseup', function (event) {
            var profilePopup = document.getElementById('profile-popup');
            var profileBtn = document.getElementById('profile-btn');
            
            var studentsPopup = document.getElementById('students-popup');

            if (!profilePopup.contains(event.target) && !profileBtn.contains(event.target)) {
                profilePopup.style.display = 'none';
            }

            
            if (!studentsPopup.contains(event.target) && event.target.id !== 'students-btn') {
                studentsPopup.style.display = 'none';
            }
        });

        function logout() {
            history.back();
        }
    </script>
</body>
</html>
