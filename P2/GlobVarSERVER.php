<?php
echo 'Root stranice na kojoj su smještene sve skripte je:<br/>';
echo $_SERVER["DOCUMENT_ROOT"];

echo '<br>Zapis iz zaglavlja stranice (host)je:<br/>';
echo $_SERVER["HTTP_HOST"];

echo '<br>Tip internetskog preglednika kojim korisnik pristupa stranici je: <br/>';
echo $_SERVER["HTTP_USER_AGENT"];

echo '<br>IP adresa korisnika koji trenutačno pristupa stranici je: <br/>'; 
echo $_SERVER["REMOTE_ADDR"];

echo '<br>Naziv stranice kojoj se trenutačno pristupa je: <br/>'; 
echo $_SERVER["REQUEST_URI"];

echo '<pre>';
print_r($_SERVER);
echo '</pre>';

?>