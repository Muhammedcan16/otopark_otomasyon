
<?php 
require 'baglan.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Otopark Otomasyon</title>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="admin/admin.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
<?php 
if (isset($_POST['giris'])){
  $adsoyad=$_POST['adsoyad'];
  $mail=$_POST['mail'];
  $sifre=$_POST['sifre'];

  $sorgu = $db -> prepare('SELECT * FROM kullanici_giris WHERE adsoyad=:adsoyad and mail=:mail and sifre=:sifre');
  $sorgu -> execute([
    'adsoyad' => $adsoyad,
    'mail' => $mail,
    'sifre' => $sifre

  ]);
  $say = $sorgu -> rowCount();
  if($say == 1 ){
    $_SESSION['mail']=$mail;
    echo '<div class="alert alert-primary text-center" role="alert">
    <strong>İşlem Başarılı Anasayfaya Yönlendiriliyorsunuz </strong>
     </div>';
    header('Refresh:2; anasayfa.php');

  }
  else {
    echo '<div class="alert alert-danger text-center" role="alert">
    <strong>İşlem Başarısız Tekrar deneyiniz. </strong>
     </div>';
    header('Refresh:2; index.php');
  }
}



?>




<div class="container p-4">
    <div class="card p-5">
        <div class="form">
            <div class="text-center mb-3"><h1>Otopark Otomasyon</h1>
            <form action="index.php" method="post">
                <div class="mb-3">
                  <input type="text" name="adsoyad" class="form-control" placeholder="Ad ve Soyad giriniz"><br>
                    <input type="email" name="mail" class="form-control" placeholder="Eposta Adresinizi Giriniz"><br>
                    <input type="text" name="sifre" class="form-control" placeholder="Şifre Giriniz"><br>
                    <div class="text-center">
                    <button type="submit" class="btn bg-primary" name="giris">Giriş</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



   
 <!--Muhammedcan ÖZCAN && Onur YAYLA-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
