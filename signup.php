<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SkillQuake</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style media="screen">

      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}


.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        greenyellow,
        greenyellow
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        greenyellow,
        greenyellow
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 620px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #f75842;
    color: #ffffff;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

    </style>
</head>
<body>
    
    <nav class="lognav">
        <div class="container nav__container">
            <a href="index.html"><h4>SkillQuake</h4></a>
            <ul class="nav__menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="courses.html">Courses</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>

        </div>
    </nav>


    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or username" id="username" name="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">
        
         <label for="role"><b>Course - </b></label> 
          <select id="role" name="role">
            <option name="role" value="Sports">Sports</option>
            <option name="role" value="Dancing">Dancing</option>
             <option name="role" value="A&C">Arts and Crafts</option>
               <option name="role" value="Cinematography">Cinematography</option>
          </select>
        
        <button type="submit" name="login" id="login" >Login</button>
        <br>
       <!-- <button type="submit" name="signup">Sign Up</button>-->
       <a href="login.php">Dont have a Account?</a>
        <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>
    </form>

 <?php
// Start the session
session_start();

$con = mysqli_connect("localhost", "id21514723_sq11", "SkillQuake#11", "id21514723_sq");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (isset($_POST['login'])) {
    $uid = $_POST['username'];
    $password = $_POST['password'];

    $user_query = "SELECT * FROM `log_details` WHERE uname='$uid' AND pass='$password'";
    $coach_query = "SELECT * FROM `coach_details` WHERE uname='$uid' AND pass='$password'";

    $user_result = mysqli_query($con, $user_query);
    $coach_result = mysqli_query($con, $coach_query);

    if ($user_result && mysqli_num_rows($user_result) > 0) {
        $row = mysqli_fetch_assoc($user_result);
        $_SESSION["name"] = $row['uname'];
        $_SESSION["role"] = $row['role'];
        $_SESSION["mail"] = $row['email'];
        echo "<script>window.top.location='user.php'</script>";
        exit;
    } elseif ($coach_result && mysqli_num_rows($coach_result) > 0) {
        $row = mysqli_fetch_assoc($coach_result);
        $_SESSION["cname"] = $row['uname'];
        $_SESSION["cro"] = $row['role'];
        $_SESSION["mail"] = $row['email'];
        echo "<script>window.top.location='coachpanel.php'</script>";
        exit;
    } else {
        // Both queries failed
        echo "insertion failed";
        exit;
    }
}

mysqli_close($con);
?>


    
</body>
</html>
