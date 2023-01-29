<?php

include 'baglan.php';
ob_start();
session_destroy();

echo '<h1 style=\'text-aling:center; margin-top:45px; color:red; font-weight:bold:\'>Çıkış işleminiz başarılı
Anasayfaya yönlendiriliyorsunuz<\h1>';
header('Refresh:2; index.php');
?>








<!--Muhammedcan ÖZCAN && Onur YAYLA-->