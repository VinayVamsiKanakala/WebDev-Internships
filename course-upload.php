<?php

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
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploads</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <style>
        * {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}

:root {
    --color-primary: greenyellow;
    --color-success: #00bf8e;
    --color-warning: #f7c94b;
    --color-danger: #f75842;
    --color-danger-variant: rgba(247, 88, 66, 0.4);
    --color-white: #ffffff;
    --color-light: rgba(255, 255, 255, 0.7);
    --color-black: #000; 
    --color-bg: #000000;
    --color-bg1: #2e3267;
    --color-bg2: #ff5e00;
    --container-width-Ig: 80%;
    --container-width-md: 90%;
    --container-width-sm: 94%;
    --transition: all 400ms ease;
}

body{
    font-family: 'Montserrat', sans-serif;
    line-height: 1.7;
    color: var(--color-white);
    background: var(--color-bg);

}

.container{
    width: var(--container-width-Ig);
    margin: 0 auto;
}
section{
    padding: 6rem 0;
}
section h2{
    text-align: center;
    margin-bottom: 4rem;
}
h1,h2,h3,h4,h5{
    line-height: 1.2;
}
h1{
    font-size: 2.4rem;
    color: var(--color-white);
}
h2{
    font-size: 2rem;
}
h3{
    font-size: 1.6rem;
}
h4{
    font-size: 1.3rem;
}
h5{
    font-size: 1.0rem;
    color: var(--color-white);
}
a{
    color: var(--color-black);
}
p{
    color: var(--color-white);
}
nav{
    background: rgb(255, 255, 255);
    width: 100vw;
    height: 5rem;
    position: fixed;
    top: 0;
    z-index: 11;
}
.window-scroll{
    background: greenyellow;
    box-shadow: 0 1rem 2rem rgb(22, 23, 23);
}
.nav__container{
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
nav button{
    display: none;
}
.nav__menu{
    display: flex;
    align-items: center;
    gap: 4rem;
}
.nav__menu a{
    font-size: 0.9rem;
    transition: var(--transition);
}
.nav__menu a:hover{
    color: var(--color-bg2);
}
header{
    position: relative;
    top: 10rem;
    overflow: hidden;
    height: 80vh;
    margin-bottom: 5rem;
}
.header__container{
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 5rem;
    height: 100%;
}
#cid{
    width:400px;
}
    </style>
</head>
<body>
<nav>
        <div class="container nav__container">
            <a href="#"><h4>SkillQuake</h4></a>
            <ul class="nav__menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>

        </div>
    </nav>

    <header>
        <div class="container header__container">
            
            <form 
            method="post"
            enctype="multipart/form-data">
                <label for="title">Add Title</label>
                <br>
                <input type="text" name="title" id="title" placeholder="enter course name">
                <br>
                <label for="description">ADD DESCRIPTION</label>
                <br>
               
                <textarea  placeholder="enter description" name="description" id="description" style="height: 100px"></textarea>
               
            <br>
            <label for="cid">Add unique course id</label><br>
            <input type="number" name="cid" id="cid">
                <br><br>
                <label for="category">Add category</label><br>
                <select id="category" name="category">
                    <option value="Sports">Sports</option>
                    <option value="Dancing">Dancing</option>
                    <option value="Arts and Creativity">Arts and Creativity</option>
                    <option value="Cooking">Cooking</option>
                    <option value="Gaming">Gaming</option>
                    <option value="Music">Music</option>

                </select>
                <br><br>
                <label for="my_image">ADD thumbnail</label>
                <br>
	 	<input type="file"
	 	       name="my_image">
<br><br>
	 	<input type="submit"
	 	       name="submit" 
	 	       value="Upload">
	 </form>
            
        </div>
    </header>
        <?php
        include "db_conn.php";
        // After your database connection, add the following:

        if(isset($_FILES['my_image']) && isset($_POST['submit'])){
            $title=$_POST['title'];
    $desc=$_POST['description'];
    $cat=$_POST['category'];
    $cid=$_POST['cid'];
    $image_name = $_FILES['my_image']['name'];
    $image_tmp_name = $_FILES['my_image']['tmp_name'];
    $image_error = $_FILES['my_image']['error'];
     if ($image_error === 0) {
            $image_ex = pathinfo($image_name, PATHINFO_EXTENSION);
            $image_ex_lc = strtolower($image_ex);
            $allowed_image_exs = array("jpg", "jpeg", "png", "gif");

            if (in_array($image_ex_lc, $allowed_image_exs)) {
                $new_image_name = uniqid("image-", true) . '.' . $image_ex_lc;
                $image_upload_path = 'uploads/' . $new_image_name;
                move_uploaded_file($image_tmp_name, $image_upload_path);

                // Insert image information into the database
                // Modify your query like this:
$sql = "INSERT INTO `courses`(`user`, `course_id`, `course_title`, `course_desc`, `image_url`, `category`) VALUES ('$uid','$cid', '$title', '$desc', '$new_image_name', '$cat')";
                mysqli_query($conn, $sql);

                echo "<script>window.top.location='course-edit.php'</script>";
            } else {
                $em = "You can't upload files of this type";
                echo "<script>window.top.location='course-upload.php'</script>";
            }
        }
        }
        ?>

</body>
</html>