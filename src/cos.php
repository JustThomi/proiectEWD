<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Cosul Meu</title>
</head>
<body>
    <div id="landing">
        <nav>
            <img id="logo" src="../assets/window_white.png" alt="logo">
            <div class="nav_elements">
                <a class="nav_button" href="produse.php">Produse</a>
                <a class="nav_button" href="contact.html">Contact</a>
                <a class="nav_button" href="cos.php">Cosul Meu</a>
            </div>
        </nav>
        <article id="lista_produse">
            <?php include "getcos.php"?>
        </article>
        <footer class="landing_footer">
            <p>Wild Thomas-David</p>
            <p>&copy 2022 Proiect Elemente Web Design</p>
        </footer>
    </div>
    <script src="app.js"></script>
</body>
</html>