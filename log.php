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
            session_start();
            if(!isset($_SESSION['zalogowano'])){
                ?>
                    <form action="uwierzytelnianie.php" method="post" class="zaloguj">
                        <input type="text" name="user" placeholder="nazwa uzytkownika">
                        <input type="password" name="haslo" placeholder="haslo">
                        <input class="zaloguj" type="submit" value="zaloguj">
                    </form>
                    <form action="rejestracja.php" method="post" class="zarejestrujForm">
                        <input type="text" name="user" placeholder="nowa nazwa uzytkownika">
                        <input type="password" name="haslo" placeholder="nowe haslo">
                        <input class="zarejestruj" type="submit" value="utwórz nowe konto">
                    </form>
                    <button class="newAccount">nie masz konta?</button>
                    <button class="oldAccount">wróć do logowania</button>
                <?php
            }else{
                echo("Witaj ".$_SESSION['user']."!")
                ?>  
                    <form action="uwierzytelnianie.php" method="get">
                        <input type="hidden" name="akcja" value="wyloguj">
                        <input type="submit" value="wyloguj">
                    </form>
                <?php
            }
            if(isset($_SESSION['fail'])){
            ?>
                <p>niepoprawne dane</p>
            <?php
            }
            ?>

    </div>
    <div class="footer">
        

        </div>
</div>
</body>
<script src="main-log.js"></script>
</html>
