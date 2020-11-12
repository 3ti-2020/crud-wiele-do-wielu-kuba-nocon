<?php
    session_start();
  $conn = new mysqli('remotemysql.com','Q5ce6IILxv','d8rRn6imdt','Q5ce6IILxv');
    $id_ks = $_POST['id'];
    $user = $_SESSION['user'];
    $date = date("Y-m-d",time());
  $sql = "INSERT INTO `wypozyczenia`(`id_wyp`, `user`, `id_ksiazka`, `data_wypoz`, `data_zwrot`) VALUES (NULL,'$user','$id_ks','$date',NULL)";
  mysqli_query($conn,$sql);
  header('Location: books.php');
?>