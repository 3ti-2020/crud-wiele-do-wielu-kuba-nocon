<?php
    $user = $_POST['user'];
    $haslo = $_POST['haslo'];

    if($user != '' && $haslo != ''){
        // $conn = new mysqli("localhost", "root", "zaq1@WSX", "library");
        $conn = new mysqli('remotemysql.com','Q5ce6IILxv','d8rRn6imdt','Q5ce6IILxv');

        $sql = "INSERT INTO users VALUES ('$user', '$haslo')";

        mysqli_query($conn, $sql);

        session_start();
        if(isset($_SESSION['fail'])){
            unset($_SESSION['fail']);
        }
        if(isset($_SESSION['regFail'])){
            unset($_SESSION['regFail']);
        }
    }else{
        $_SESSION['regFail'] = 1;
    }

    include("uwierzytelnianie.php");
    header('Location: log.php');
?>