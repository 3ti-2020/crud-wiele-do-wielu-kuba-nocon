<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuba Nocoń</title>
    <link rel="stylesheet" href="styleABC.css">
</head>
<body>
    <div class="container">
    <div class="head">
    <form action="insert.php" method="POST">
    <input type="text" name="autor" id="autor" placeholder="autor">
    <input type="text" name="tytul" id="tytul" placeholder="tytul">
    <input type="submit" value="Dodaj">
    </form>
    </div>
    <div class="main">

        <?php
        $conn = new mysqli('remotemysql.com','Q5ce6IILxv','d8rRn6imdt','Q5ce6IILxv');

        $result = $conn->query("SELECT id_autor_tytul, autor, tytul FROM lib_autor_tytul, lib_tytul, lib_autor WHERE lib_autor_tytul.id_autor=lib_autor.id_autor AND lib_autor_tytul.id_tytul=lib_tytul.id_tytul");

        echo "<table>";
        echo ("<tr>
            <th>ID</th>
            <th>Autor</th>
            <th>Tytuł</th>
        </tr>");
        while($row = $result->fetch_assoc()){
            echo("<tr>");
            echo("<td>".$row['id_autor_tytul']."</td>");
            echo("<td>".$row['autor']."</td>");
            echo("<td>".$row['tytul']."</td>");
            echo("</tr>");
        }
        echo "</table>";

        ?>

    </div>
    <div class="footer"></div>
</div>
</body>
</html>
