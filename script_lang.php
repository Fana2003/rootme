<?php

$url = "http://challenge01.root-me.org/web-serveur/ch13/?lang";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$code = curl_exec($ch);

if ($code === false) {
    echo "Erreur de récupération : " . curl_error($ch);
} else {
    echo $code;
}

curl_close($ch);

?>
