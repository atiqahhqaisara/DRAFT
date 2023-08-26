<?php

echo '<h3>New client registration<h3>';
echo '<form action="processClient.php" method="POST">';
echo 'Email:<input type ="email" name="email">';
echo '<br>Password:<input type ="password" name="password">';
echo '<br>Phone Number:<input type ="text" name="phone">';
echo '<br>Dob:<input type ="date" name="dob">';
echo '<br>Register:<input type ="submit" name="regBtn">';


echo '</form>';

?>
