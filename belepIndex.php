<?php

?>
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
        <!--                <label for="collors"><b>Válaszott szín: </b></label>-->
        <!--                <select id="szinek" name="szinek" id="szinek">
                                <option value="piros">Piros</option>
                                <option value="kek">Kék</option>
                                <option value="sarga">Sárga</option>
                                <option value="zold">Zöld</option>
                            </select>-->
        <!--                //ez nem jó el kell küldeni egy SUBMIT segítségével az adatokat az adatbázisnak-->
        <!--                űrlap legyen az egész  -->
        <!--                <div class="btn">-->
        <!--                    <a href="index.php">Belépés</a>-->
        <!--                </div>-->
<!--        <form action="index.php" method="post">-->
        <form action="" method="post">
            <div class="container p-3 my-3 bg-dark text-white">
                <h1>Játékos regisztrálás</h1>
                <label for="uname"><b>Felhasználó név: </b></label>
                <input type="text" name="uname" placeholder="Kérek adj meg egy játékos nevet" id="uname">
                <br>
                <label for="collors"><b>Válaszott szín: </b></label>
                <select id="szinek" name="szinek" id="szinek">
                    <option value="piros">Piros</option>
                    <option value="kek">Kék</option>
                    <option value="sarga">Sárga</option>
                    <option value="zold">Zöld</option>
                </select>
                <br>
                <input type="submit" value="Adatok Feltöltése adatbázisba" name="belep">
                
            </div>
        </form>

        <?php
        $kapcsolodas= mysqli_connect("localhost", "root", "");
        $db= mysqli_select_db($kapcsolodas, 'kinevetavegen');
        
        if (isset($_POST['belep'])) {
            $felhasznalonev=$_POST['uname'];
            $valasztotszin=$_POST['szinek'];
            
            $query="INSERT INTO `jatekos`(`Játékos_név`,`Valasztot_szin`)VALUES('$felhasznalonev','$valasztotszin')";
            
            $query_run= mysqli_query($kapcsolodas, $query);
            
            if ($query_run) {
                echo '<script type="text/javascript">alert("Sikerült a mentés")</scrpit>';
            }else{
                echo '<script type="text/javascript">alert("Nem sikerült a mentés")</scrpit>';
            }
        }
        ?>
    </body>
</html>
