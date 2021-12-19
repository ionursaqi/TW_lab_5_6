
<?php
    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm){

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `username`, `email`, `phone`, `password`) VALUES (NULL, '$full_name', '$username', '$email', '$phone', '$password')");

        $_SESSION['message'] = 'Successfully Registered';
        header('Location: ..\login\login.php');


    } else{
        $_SESSION['message'] = 'PASSWORDS DON`T MATCH';
        header('Location: ..\register\register.php');
    }


