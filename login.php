<?php  
session_start();  
?> 
<html lang="en">
<head>
    <title>Get Started</title>
 
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
    top: -20px;
    
}
.shape:last-child{
    background: linear-gradient(
        to right,
        greenyellow,
        greenyellow
    );
    right: -70px;
    bottom: -300px;
}
form{
    height: 800px;
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
    margin-top: 150px;
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
select{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
    background-color: rgba(255,255,255,0.07);
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
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="courses.php">Courses</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>

        </div>
    </nav>


    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post">
        <h3>Signup Here</h3>
        
        <label for="role">you are a ?</label> 
          <select id="role" name="role">
            <option value="Coach">Coach</option>
            <option value="Student">Student</option>
          </select>
          
        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" id="username" name="username" required>

        <label for="email">Email</label>
        <input type="email" placeholder="Email" id="email" name="email" required>

        <label for="phone">Phone</label>
        <input type="varchar" placeholder="Phone" id="phone" name="phone" required>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password" required>

        <label for="password">Confirm Password</label>
        <input type="password" placeholder="Confirm Password" id="password1">


          <button type="submit" name="submit" onclick="myfunc()">Sign Up</button>
            <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>
    </form>
    <script>
      function myfunc(){
          var e=getElementById("role").value;
          if (e=="student")
          {
              window.location.href="signup.php"
          }
           else if (e=="coach")
           {
              window.location.href="verification.php"
          }
      }
        
    </script>
    <?php
    $con = mysqli_connect("localhost","id21514723_sq11","SkillQuake#11","id21514723_sq");

    if(isset($_POST['submit'])){
        $uid = $_POST['username'];
        $password = $_POST['password'];
        $mail = $_POST['email'];
        $mobile = $_POST['phone'];
        $role = $_POST['role'];
        
        if($role == 'Student'){
        $q = "INSERT INTO `log_details`(`uname`, `email`, `pass`, `mobile`, `role`) VALUES ('$uid','$mail','$password','$mobile','$role')";
        $result = mysqli_query($con, $q);
        if ($result) {
            echo "<script>window.location.href='signup.php';</script>";
            exit;
        } else {
            echo "Insertion failed: " . mysqli_error($con);
        }
        mysqli_close($con);
        }
        else if($role == 'Coach'){
        $q = "INSERT INTO `coach_details`(`uname`, `email`, `pass`, `mobile`, `role`) VALUES ('$uid','$mail','$password','$mobile','$role')";
        $result = mysqli_query($con, $q);
        if ($result) {
            echo "<script>window.location.href='signup.php';</script>";
            exit;
        } else {
            echo "Insertion failed: " . mysqli_error($con);
        }
        mysqli_close($con);
    }
    }

    ?>

    
</body>
</html>
