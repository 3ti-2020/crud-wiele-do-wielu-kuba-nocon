<?php
    $conn = new mysqli('remotemysql.com','Q5ce6IILxv','d8rRn6imdt','Q5ce6IILxv');   
    $sql= "DELETE FROM `lib_autor_tytul` WHERE id_autor_tytul='".$_POST['id']."'";
    mysqli_query($conn, $sql);
    header('Location: index.php');
?>