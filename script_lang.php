<?php

$url = "http://challenge01.root-me.org/web-serveur/ch13/?lang/index.php";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$code = curl_exec($ch);
curl_close($ch);

if ($code === false) {
    echo "Erreur de récupération.";
} else {
    echo $code;
}

?>
