<?php
    $dsn = 'mysql:host=localhost;dbname=D00243412';
    $username = 'D00243412';
    $password = 'UqfBa7vy';

    // $dsn = 'mysql:host=localhost;dbname=test2';
    // $username = 'root';
    // $password = '';


    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }

    // https://mysql07.comp.dkit.ie/D00243412/AIRLINE/starter-template/page-1.php
$conn = mysqli_connect("localhost","D00243412","UqfBa7vy","D00243412");

// $dsn2 = 'mysql:host=localhost;dbname=test2';
//     $username2 = 'root';
//     $password2 = '';


//     try {
//         $conn= new PDO($dsn, $username, $password);
//     } catch (PDOException $e) {
//         $error_message = $e->getMessage();
//         include('database_error.php');
//         exit();
//     }
?>