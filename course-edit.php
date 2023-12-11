<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploads</title>
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


    </style>
</head>
<body>
<nav>
        <div class="container nav__container">
            <a href="index.html"><h4>SkillQuake</h4></a>
            <ul class="nav__menu">
                <li><a href="index.html">Home</a></li>
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
                <label for="cid">Enter course you want to add videos</label><br>
                <input type="number" name="cid" >
                <label>Add video title</label><br>
                <input type="text" name="vtitle">
                <br>
                
            <label for="my_video">Add video</label>

	 	<input type="file"
	 	       name="my_video">

	 	<input type="submit"
	 	       name="submit" 
	 	       value="Upload">
	 </form>
            
        </div>
    </header>

<?php
ini_set('upload_max_filesize', '20000M');
ini_set('post_max_size', '250000M');

if (isset($_POST['submit'])) {
    include "db_conn.php";

    $video_name = $_FILES['my_video']['name'];
    $tmp_name = $_FILES['my_video']['tmp_name'];
    $error = $_FILES['my_video']['error'];
    $vtitle = $_POST['vtitle'];
    $cid = $_POST['cid'];

    if ($error === 0) {
        $video_ex = pathinfo($video_name, PATHINFO_EXTENSION);
        $video_ex_lc = strtolower($video_ex);
        $allowed_exs = array("mp4", 'webm', 'avi', 'flv');

        if (in_array($video_ex_lc, $allowed_exs)) {
            $new_video_name = uniqid("video-", true) . '.' . $video_ex_lc;
            $video_upload_path = 'uploads/' . $new_video_name;

            if (move_uploaded_file($tmp_name, $video_upload_path)) {
                // Insert the video path into the database
                $sql = "INSERT INTO `videos` (`video_title`, `video_url`, `course_id`) VALUES ('$vtitle', '$new_video_name', '$cid')";
                if (mysqli_query($conn, $sql)) {
                    // Redirect on success
                    echo "succesfull";
                    exit();
                } else {
                    echo "Error inserting data into the database: " ;
                }
            } else {
                echo "Error moving uploaded file to the server.";
            }
        } else {
            echo "You can't upload files of this type.";
        }
    } else {
        echo "Error uploading the file. Please check file type and try again.";
    }
} else {
    echo "Form submission not detected.";
}
?>
</body>
</html>