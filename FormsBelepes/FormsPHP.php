<?php
 function FormEpit(){
     echo '<form action="index.php" method="post">';
     echo '<div class="container">';
     echo '<label for="uname"><b>Felhasználó név: </b></label>';
     echo '<input type="text" placeholder="Kérelek adj meg egy jatékos nevet" name="uname" id="uname">';
     echo '<input type="submit" value="Belépés" name="belep">';
     echo '</div>';
     echo '</form>';
 }