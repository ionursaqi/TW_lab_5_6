
<?php
    session_start();
    require_once 'connect.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    $error_fields = [];


    if ($username === ''){
        $error_fields = 'login';
    }
    if ($email === ''){
        $error_fields = 'email';
    }
    if ($feedback === ''){
        $error_fields = 'feedback';
    }

    if( !empty($error_fields)){
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Check the input boxes and fill them!",
        "fields" => $error_fields
    ];
        echo json_encode($response);
//        die();
    }
    if ($feedback != ''){


        mysqli_query($connect, "INSERT INTO `feedback` (`username`,`email`,`feedback`) VALUES ('$username','$email','$feedback')");

        $_SESSION['message'] = 'Successfully Sent';
        header('Location: ./feedback.php');


    } else{
        $_SESSION['message'] = 'PLese fill the boxes';
        header('Location: ./feedback.php');
    }


