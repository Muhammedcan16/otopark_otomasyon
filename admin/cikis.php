<?php


require 'baglan.php';

ob_start();
session_destroy();

echo '<div class="alert alert-primary text-center" role="alert">
<strong>İşlem Başarılı Anasayfaya Yönlendiriliyorsunuz </strong>
 </div>';
header('Refresh:2; index.php');
?>