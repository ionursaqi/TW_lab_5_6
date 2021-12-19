<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Books</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <nav>
        <div class="logo"><h1>E-Books</h1></div>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
            <li><a href="../home/home.php">Home</a></li>
            <li><a href="../index.html">Text</a></li>
            <li><a href="../Feeback/feedback.php">Feedback</a></li>
            <li><a href="../login/login.php">Log In</a></li>
            <div class="closeMenu">X</div>
        </ul>
    </nav>
    <script src="app.js"></script>
    <div class="body1">
        <div class="container">
            <div class="title">Registration</div>


            <form name="register" action="signup.php" method="post" id="register-form">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" name="full_name" placeholder="Enter your name" >
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="username"placeholder="Enter your username">
                    </div>
                    <div class="input-box">
                        <span class="details">E-Mail</span>
                        <input type="email" name="email" placeholder="Enter your e-mail">
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" name="phone" placeholder="Enter your phone number" >
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" id="password" name="password" placeholder="Enter your password" >
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" name="password_confirm" placeholder="Confirm your password" >
                    </div>
                </div>

                <div class="button">
                    <input type="submit" value="Register" id="submit-button">
                </div>
                <div class="registration">
                    <span class="details">Already have an account?</span>
                    <span class="details"> <a href="../login/login.php">Log in</a></span>

                </div>
                <p class="msg none">  </p>
            </form>
        </div>
    </div>   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="validation.js"></script>
</body>
</html>