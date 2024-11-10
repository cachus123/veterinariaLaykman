<?php


echo $password = "12345";

echo md5($password)."<br>";
echo sha1($password)."<br>";
echo password_hash($password, PASSWORD_DEFAULT);

$hash = '$2y$10$w/upHbSIgCry11J4w5lEhuoe7BH3JNPDl6235Tl6IusLXCrP2bPfq';

if (password_verify($password, $hash)) {
    echo 'Contraseña correcta';
} else {
    echo 'Contraseña incorrecta';
}