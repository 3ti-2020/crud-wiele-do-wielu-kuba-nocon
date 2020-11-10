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
                if(isset($_SESSION['zalogowano'])){
                    ?>
                        <div class="card-cont">
            <div class="cardA">
                <div class="head-card">
                    <!-- <h3 id="tytul" class="title">Flappy Bird!</h3> -->
                </div>
                <div class="main-card">
                    <img src="bird.png" class="bird-img">
                </div>
                <div class="foot-card">
                    <h3 id="tytul" class="title">Read more!</h3>
                    <button class="btn">Click!</button>
                </div>
            </div>
            
        </div>
        <div class="cardB">
            <div class="headerB-card"><button class="zamknij">X</button></div>
            <div class="mainB-card">
                <p class="text">Flappy Bird is a mobile game developed by Vietnamese video game artist and programmer Dong Nguyen (Vietnamese: Nguyễn Hà Đông), under his game development company dotGears. The game is a side-scroller where the player controls a bird, attempting to fly between columns of green pipes without hitting them. Nguyen created the game over the period of several days, using a bird protagonist that he had designed for a cancelled game in 2012.</p>
            </div>
            <div class="footB-card"></div>
        </div>
                    <?php
                }else{
                    echo("Zaloguj się!");
                }
            ?>

        
       

    </div>
    <div class="footer">
        
        </div>
</div>
</body>
<script src="main-card.js"></script>
</html>
