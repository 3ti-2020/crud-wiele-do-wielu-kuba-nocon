<?php
$conn = new mysqli('localhost','root','','librarya');

$autor = "Gadowski";
$tytul = "Czarne oczy";


$id_autor = "SELECT id_autor FROM `lib_autor` WHERE autor='$autor'";
$id_tytul = "SELECT id_tytul FROM `lib_tytul` WHERE tytul='$tytul'";

$result1 = $conn->query($id_autor);
$result2 = $conn->query($id_tytul);


var_dump($result1);
var_dump($result2);
?>