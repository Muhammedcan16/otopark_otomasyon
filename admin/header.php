<?php
require 'baglan.php';


$kullanicicek= $db -> prepare('SELECT * FROM kullanici_giris WHERE mail=:mail');
$kullanicicek -> execute([
  'mail'=> $_SESSION['mail']
]);
$say = $kullanicicek -> rowCount();
$kaydet = $kullanicicek -> fetch(PDO::FETCH_ASSOC);
if ($say == 0){
  header('location:index.php?izinsizgiris');
}
?>



<!doctype html>
<html lang="en">
  <head>
    <title>Otopark Otomasyon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="anasayfa.php">Otopark Otomasyon</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="anasayfa.php">Anasayfa</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="parkedenaraba.php">Park Eden Araçlar</a>
      </li>
     
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0" method='post'>
      
      <button class="btn btn-danger" type="submit" name="cikis" style="color:white;">  <a href="cikis.php">Çıkış Yap</a>   </button>
    </form>
  </div>
</nav>

<!--Muhammedcan ÖZCAN && Onur YAYLA-->