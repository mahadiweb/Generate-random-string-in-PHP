<?php

function generateRandomString($length = 26) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ&-_', ceil($length/strlen($x)) )),1,$length);
}

echo  generateRandomString();
echo "<br>";

echo md5(rand(0,99999));
echo "<br>";

echo base64_encode(random_bytes(16));
echo "<br>";

echo substr(str_replace(['+', '/', '='], '', base64_encode(random_bytes(32))), 0, 32);
echo "<br>";

echo bin2hex(random_bytes(16));

?>
