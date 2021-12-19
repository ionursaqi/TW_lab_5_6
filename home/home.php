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
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <nav>
       <div class="logo"><h1>E-Books</h1></div>
       <div class="openMenu">E</div>
       <ul class="mainMenu">
           <li><a href="#">Home</a></li>
           <li><a href="../index.html">Text</a></li>
           <li><a href="../Feeback/feedback.php">Feedback</a></li>
           <li><a href="../login/login.php">Log out</a></li>
           <div class="closeMenu">X</div>
       </ul>
    </nav>
    <div class="body1">
    <div class="container">
        <form name="register"id="register-form">

            <p class="title"> <?= $_SESSION['user']['full_name'] ?></p>

            <div class="user-details">
                <span class="details">Email:<a href="#"><?= $_SESSION['user']['email'] ?></a> </span>
            </div>
        </form>
    </div>
    </div>

    <script src="./app.js"></script>
</body>
</html>