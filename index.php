<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="head"></div>
    <div class="main">

        <?php
        $conn = new mysqli('localhost','root','','librarya');

        $result = $conn->query("SELECT * FROM `ksiazki`");

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