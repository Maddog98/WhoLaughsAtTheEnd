
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

        <form action="/action_page.php" method="post">
            <div class="container">
                <label for="uname"><b>Felhasználó név: </b></label>
                <input type="text" placeholder="Kérelek adj meg egy jatékos nevet" name="uname" required>
                <label for="psw"><b>Válaszott szín: </b></label>
                <form>
                    <select id="szinek" name="szinek">
                        <option value="piros">Piros</option>
                        <option value="kek">Kék</option>
                        <option value="sarga">Sárga</option>
                        <option value="zold">Zöld</option>
                    </select>
                </form>
                
                <div class="btn">
                    <a href="index.php">Belépés</a>
                </div>
            </div>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
