<?php
$conn = new mysqli('remotemysql.com','Q5ce6IILxv','d8rRn6imdt','Q5ce6IILxv');

$autor = $_POST['autor'];
$tytul = $_POST['tytul'];

$sql_autor = "INSERT INTO `lib_autor`(`id_autor`, `autor`) VALUES (NULL,'$autor')";

$query1 = mysqli_query($conn, $sql_autor);

if($query1){

    $sql_tytul = "INSERT INTO `lib_tytul`(`id_tytul`, `tytul`) VALUES (NULL,'$tytul')";

    $query2 = mysqli_query($conn, $sql_tytul);

}

if($query2){
    $id_autor = "SELECT id_autor FROM `lib_autor` WHERE autor='$autor'";
$result1 = $conn->query($id_autor);
while($row1 = $result1->fetch_assoc()){
    $autorid = $row1['id_autor'];
};

$id_tytul = "SELECT id_tytul FROM `lib_tytul` WHERE tytul='$tytul'";
$result2 = $conn->query($id_tytul);
while($row2 = $result2->fetch_assoc()){
    $tytulid = $row2['id_tytul'];
};

$sql_a_t = "INSERT INTO `lib_autor_tytul`(`id_autor_tytul`, `id_autor`, `id_tytul`) VALUES (NULL,'$autorid','$tytulid')";

$query3 = mysqli_query($conn, $sql_a_t);
}
header('Location: index.php');
?>
