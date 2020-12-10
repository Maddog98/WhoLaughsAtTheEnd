
<html>
    <head>
        <meta charset="UTF-8">
        <title>Játék Belépés</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="icon" href="img/icon.png">
        <link href="style/belepstyle.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <form action="index.php" method="post">
            <div class="container">
                <label for="uname"><b>Felhasználó név: </b></label>
                <input type="text" placeholder="Kérelek adj meg egy jatékos nevet" name="uname" required>
                <label for="collors"><b>Válaszott szín: </b></label>
                    <select id="szinek" name="szinek">
                        <option value="piros">Piros</option>
                        <option value="kek">Kék</option>
                        <option value="sarga">Sárga</option>
                        <option value="zold">Zöld</option>
                    </select>
<!--                //ez nem jó el kell küldeni egy SUBMIT segítségével az adatokat az adatbázisnak-->
<!--                űrlap legyen az egész  -->
<!--                <div class="btn">-->
<!--                    <a href="index.php">Belépés</a>-->
<!--                </div>-->
                    <input type="submit" value="Belépés" name="belep">
            </div>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
