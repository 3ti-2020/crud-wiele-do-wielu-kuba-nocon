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
        session_start();  
        $conn = new mysqli('remotemysql.com','Q5ce6IILxv','d8rRn6imdt','Q5ce6IILxv');

        $result = $conn->query("SELECT id_autor_tytul, autor, tytul FROM lib_autor_tytul, lib_tytul, lib_autor WHERE lib_autor_tytul.id_autor=lib_autor.id_autor AND lib_autor_tytul.id_tytul=lib_tytul.id_tytul");

        echo "<table class='tabelka-main'>";
        echo ("<tr class='tr-main'>
            <th class='th-main'>Autor</th>
            <th class='th-main'>Tytuł</th>");
            if(isset($_SESSION['zalogowano']) && $_SESSION['user']=='kuba'){   
                echo("<th class='th-main'>Usuń</th>");
            }
            
           echo("</tr>");
        while($row = $result->fetch_assoc()){
            echo("<tr class='tr-main'>");
            echo("<td class='td-main'>".$row['autor']."</td>");
            echo("<td class='td-main'>".$row['tytul']."</td>");
            if(isset($_SESSION['zalogowano']) && $_SESSION['user']=='kuba' ){
                
                echo("<td class='td-main'>
                    <form action='delete.php' method='POST'>
                        <input type='hidden' name='id' value='".$row['id_autor_tytul']."'>
                        <input type='submit' value='X'>
                    </form>
                </td>");

            }
            echo("</tr>");
        }
        echo "</table>";

        ?>

    </div>
    <div class="footer">
        
    <?php        
                if(isset($_SESSION['zalogowano']) && $_SESSION['user']=='kuba' ){
                    ?>
                        <form action="insert.php" method="POST">
    <input type="text" name="autor" id="autor" placeholder="autor">
    <input type="text" name="tytul" id="tytul" placeholder="tytul">
    <input type="submit" value="Dodaj">
    </form>
                    <?php
                }else{
                    echo("Nie masz uprawnień, lub nie jesteś zalogowany!");
                }
            ?>


        </div>
</div>
</body>
</html>
