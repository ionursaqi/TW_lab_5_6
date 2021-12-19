<?php
    session_start();
    require_once '..\register\connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

    $error_fields = [];

    if ($login === ''){
        $error_fields = 'login';
    }
    if ($password === ''){
        $error_fields = 'password';
    }

    if( !empty($error_fields)){
        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Check the input boxes and fill them!",
            "fields" => $error_fields
            ];
        echo json_encode($response);

        die();
    }


    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$login' and `password` = '$password'");

//    echo mysqli_num_rows($check_user);
    if(mysqli_num_rows($check_user) > 0){
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
                "id" => $user['id'],
                "full_name" => $user['full_name'],
                "email" => $user['email'],
        ];

        $response = [
            "status" => true
        ];

        echo json_encode($response);
    }else{
        $response = [
            "status" => false,
            "message" => 'Incorrect password!'
        ];
        echo json_encode($response);

    }
?>

