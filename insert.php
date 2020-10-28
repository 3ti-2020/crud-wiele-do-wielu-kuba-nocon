<?php
$conn = new mysqli('localhost','root','','librarya');

$autor = $_POST['autor'];
$tytul = $_POST['tytul'];

$sql_autor = "INSERT INTO `lib_autor`(`id_autor`, `autor`) VALUES (NULL,'$autor')";

$query1 = mysqli_query($conn, $sql_autor);

if($query1){

    $sql_tytul = "INSERT INTO `lib_tytul`(`id_tytul`, `tytul`) VALUES (NULL,'$tytul')";

    $query2 = mysqli_query($conn, $sql_tytul);

}

if($query2){
    $id_autor = "SELECT id_autor FROM `lib_autor` WHERE autor="$autor"";
    $id_tytul = "SELECT id_tytul FROM `lib_tytul` WHERE tytul="$tytul"";
}
header('Location: index.php')
?>