<?php
    $connect = mysqli_connect('localhost', 'root','', 'tw');
    if(!$connect){
        die('Error connecting to DataBase.');
    }
