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

    <h1 class="name">Kuba Nocoń gr.1 nr.8</h1>

    <a class="github-logo" href="https://github.com/3ti-2020/crud-wiele-do-wielu-kuba-nocon">
    <img class="github-logo" src="github.png" alt="github.com - odnośnik">
    </a>

    <nav>
        <ul>
          <li><a href="index.php">TABLE</a></li>
          <li><a href="card.php">CARD</a></li>
          <li><a href="#">SLIDER</a></li>
          <li><a href="log.php">LOG IN</a></li>
        </ul>
      </nav>
    
    
    </div>
    <div class="main">

        <?php
        $conn = new mysqli('remotemysql.com','Q5ce6IILxv','d8rRn6imdt','Q5ce6IILxv');

        $result = $conn->query("SELECT id_autor_tytul, autor, tytul FROM lib_autor_tytul, lib_tytul, lib_autor WHERE lib_autor_tytul.id_autor=lib_autor.id_autor AND lib_autor_tytul.id_tytul=lib_tytul.id_tytul");

        echo "<table>";
        echo ("<tr>
            <th>Autor</th>
            <th>Tytuł</th>
        </tr>");
        while($row = $result->fetch_assoc()){
            echo("<tr>");
            echo("<td>".$row['autor']."</td>");
            echo("<td>".$row['tytul']."</td>");
            echo("</tr>");
        }
        echo "</table>";

        ?>

    </div>
    <div class="footer">
        
    <?php
          session_start();         
                if(isset($_SESSION['zalogowano'])){
                    ?>
                        <form action="insert.php" method="POST">
    <input type="text" name="autor" id="autor" placeholder="autor">
    <input type="text" name="tytul" id="tytul" placeholder="tytul">
    <input type="submit" value="Dodaj">
    </form>
                    <?php
                }else{
                    echo("Nie można edytować bazy danych, zaloguj się!");
                }
            ?>


        </div>
</div>
</body>
</html>
