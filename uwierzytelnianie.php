<?php
session_start();

    if(isset($_POST['user']) && isset($_POST['haslo'])){

        // $conn = new mysqli("localhost", "root", "zaq1@WSX", "library");
        $conn = new mysqli('remotemysql.com','Q5ce6IILxv','d8rRn6imdt','Q5ce6IILxv');

        $_SESSION['user'] = $_POST['user'];
        $_SESSION['password'] = $_POST['haslo'];
        $result = $conn -> query("SELECT * FROM users");
        while($row=$result->fetch_assoc()){
            echo($row['login']." ".$row['password']);
            if($row['login']==$_POST['user'] && $row['password']==$_POST['haslo']){
                $_SESSION['zalogowano'] = 1;
                echo 'ZALOGOWANO';
                if(isset($_SESSION['fail'])){
                    unset($_SESSION['fail']);
                }
            }
        }
        if(!isset($_SESSION['zalogowano'])){
            $_SESSION['fail'] = 1;
        } 
    }
    if(isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj' ){
        unset($_SESSION['zalogowano']);
        echo 'WYLOGOWANO';
    }

    header('Location: index.php');
?>