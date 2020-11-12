<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuba Nocoń</title>
    <link rel="stylesheet" href="styleABC.css">
    <link rel="shortcut icon" href="icon.png">
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
          <li><a href="books.php">BOOKS</a></li>
          <li><a href="log.php">LOG IN</a></li>
        </ul>
      </nav>
    
    
    </div>
    <div class="main">

    <?php
    if(isset($_SESSION['zalogowano']) ){
    session_start();
        $conn = new mysqli('remotemysql.com','Q5ce6IILxv','d8rRn6imdt','Q5ce6IILxv');

        $result = $conn->query("SELECT id_autor_tytul, autor, tytul FROM lib_autor_tytul, lib_tytul, lib_autor WHERE lib_autor_tytul.id_autor=lib_autor.id_autor AND lib_autor_tytul.id_tytul=lib_tytul.id_tytul");

        echo("<table class='table-book'>");
        while($row = $result->fetch_assoc()){
            echo("<tr class='tr-books'>");
            echo("<td>".$row['autor']." "."</td>");
            echo("<td>".$row['tytul']." "."</td>");
            echo("<td>
                    <form action='wypozycz.php' method='POST'>
                        <input type='hidden' name='id' value='".$row['id_autor_tytul']."'>
                        <input class='btn-book' type='submit' value='Wypożycz'>
                    </form>
                </td>");
            echo("</tr>");
        }
        echo "</table>";
        
        ?>
        <button class="btn-wypozyczone">Wypożyczone</button>
        <div class="wypozyczanie">
            <button class="zamknij">X</button>
            <form class='wyczysc' action='wyczysc.php' method='POST'>
                        <input class='btn-book' type='submit' value='Wyczyść'>
                    </form>
            <div class="text-books">

            <?php
        $conn = new mysqli('remotemysql.com','Q5ce6IILxv','d8rRn6imdt','Q5ce6IILxv');
        $user = $_SESSION['user'];
        $result = $conn->query("SELECT id_wyp, tytul, autor, user, data_wypoz, data_zwrot FROM wypozyczenia, lib_autor_tytul, lib_tytul, lib_autor WHERE user = '$user' AND lib_autor_tytul.id_autor=lib_autor.id_autor AND lib_autor_tytul.id_tytul=lib_tytul.id_tytul AND lib_autor_tytul.id_autor_tytul=wypozyczenia.id_ksiazka");

        echo "<table>";
        echo ("<tr>
            <th class='th-books'>Autor</th>
            <th class='th-books'>Tytuł</th>
            <th class='th-books'>User</th>
            <th class='th-books'>Data Wypożyczenia</th>
            <th class='th-books'>Data Zwrotu</th>");
            if(isset($_SESSION['zalogowano'])){   
                echo("<th  class='th-books'>Oddaj</th>");
            }
            
           echo("</tr>");
        while($row = $result->fetch_assoc()){
            echo("<tr>");
            echo("<td class='td-books'>".$row['autor']."</td>");
            echo("<td class='td-books'>".$row['tytul']."</td>");
            echo("<td class='td-books'>".$row['user']."</td>");
            echo("<td class='td-books'>".$row['data_wypoz']."</td>");
            echo("<td class='td-books'>".$row['data_zwrot']."</td>");
            if(isset($_SESSION['zalogowano'])){
                
                echo("<td class='td-books'>
                    <form action='oddaj.php' method='POST'>
                        <input type='hidden' name='id' value='".$row['id_wyp']."'>
                        <input type='submit' value='Oddaj'>
                    </form>
                </td>");

            }
            echo("</tr>");
        }
        echo "</table>";
    
        ?>

            </div>
        </div>
        <?php
}else{
    echo("Aby zarządzać swoimi książkami proszę się zalogować!");
}
        ?>
    </div>
    <div class="footer">
        

        </div>
</div>
</body>
<script src="main-books.js"></script>
</html>
