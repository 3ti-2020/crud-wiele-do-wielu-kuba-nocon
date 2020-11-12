<?php
    session_start();
  $conn = new mysqli('remotemysql.com','Q5ce6IILxv','d8rRn6imdt','Q5ce6IILxv');

    $user = $_SESSION['user'];

  $sql = "DELETE FROM `wypozyczenia` WHERE `user`='$user'";

  mysqli_query($conn,$sql);
  
  header('Location: books.php');
?>