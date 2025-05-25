<?php
// Start the session
session_start();

// Check if the user is logged in
if(isset($_SESSION['name'])){
    // Assuming you have these values set earlier in your code
    $uid = $_SESSION["name"]; // Replace with the actual username
    $mail = $_SESSION["mail"]; // Replace with the actual email
}
else {
    // Redirect to the login page if the user is not logged in
    header("Location: signup.php");
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

        /* Added padding and border to buttons */
        /*button.popup-btn {*/
        /*    margin-top: 15px;*/
            /*padding: 10px 20px;*/
        /*    border: 2px solid black;*/
        /*    border-radius: 1px;*/
        /*    background-color: transparent;*/
        /*    color: #00000;*/
        /*}*/
        .category{
            width:400px;
            height:250px;
        }
        nav{
            background-color: #adff2f;
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
        <a href="course1.html" class="category-button">
                <article class="category">
                    
                        <span class="category__icon"><i class="uil uil-music"></i></span>
                        <h5>Course Videos</h5>
                        <p>Groove to your favorite course and learn with passion .</p>
                    
                </article>
                </a>
                 <a href="https://meet.google.com/?pli=1" class="category-button">
                <article class="category">
                   
                        <span class="category__icon"><i class="uil uil-video"></i></span>
                        <h5>Live Sessions</h5>
                       <p>At present,No live sessions, soon u will be informed.</p>
                 
                </article>
                   </a>
                         <a href="query.html" class="category-button">
                <article class="category">
              
                        <span class="category__icon"><i class="uil uil-question"></i></span>
                        <h5>Queries</h5>
                        <p>Always available to answer you.</p>
                   
                </article>
                 </a>
</div>
    <div id="profile-popup" class="floating-container">
        <span class="cross-mark" onclick="closeProfile()">X</span> <br>
        <h3><ul>Profile Details</ul></h3><br>
        Name: <p><?php echo "$uid"; ?></p><br>
        Student Email: <p><?php echo "$mail"; ?></p><br>
        <!-- Add more details as needed -->
        <button onclick="logout()">Logout</button>
        <!--<button onclick="editDetails()">Edit Details</button>-->
    </div>
    <script>
        document.getElementById('profile-btn').addEventListener('click', function () {
            document.getElementById('profile-popup').style.display = 'block';
        });

        function closeProfile() {
            document.getElementById('profile-popup').style.display = 'none';
        }

        window.addEventListener('mouseup', function (event) {
            var profilePopup = document.getElementById('profile-popup');
            var profileBtn = document.getElementById('profile-btn');

            if (!profilePopup.contains(event.target) && !profileBtn.contains(event.target)) {
                profilePopup.style.display = 'none';
            }
        });

        function logout() {
            history.back()
        }

    </script>
    
</body>
</html>
