<?php
$conn = new mysqli('remotemysql.com','Q5ce6IILxv','d8rRn6imdt','Q5ce6IILxv');
$date = date("Y-m-d",time());
$id_wyp = $_POST['id'];

$sql = "UPDATE `wypozyczenia` SET `data_zwrot`='$date' WHERE id_wyp='$id_wyp'";

mysqli_query($conn, $sql);

header('Location: books.php');
?>