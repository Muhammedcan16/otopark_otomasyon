<?php  
 try{
  $db= New PDO ('mysql:host=localhost;dbname=otopark_otomasyon', 'root', '');
    //echo 'veri tabanı  çalışıyor ' ; 
 } catch(Exception $e){
    $e -> getMessage();

 }


?>
<!--Muhammedcan ÖZCAN && Onur YAYLA-->


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
  <a class="navbar-brand" href="admin/index.php">Giriş yapmak için tıklayınız</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

     
      
      
    </ul>
   
  </div>
</nav>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Sıra</th>
      <th scope="col">Plaka</th>
      <th scope="col">Bulunduğu Kat</th>
      <th scope="col">Bulunduğu Blok</th>
      <th scope="col">Araç Giriş Tarihi Ve Saati</th>
      <th scope="col">Araç Çıkış Tarihi Ve Saati</th>
      <th scope="col">ÜCRET</th>
      
    </tr>
  </thead>
<?php

$kaydet = $db -> query('SELECT * FROM arac_kayit');
$sira = 0;

foreach ($kaydet as $kayit) {
  $sira = ++ $sira;
  $id = $kayit['arac_id'];
  $plaka = $kayit['arac_plaka'];
  $kat = $kayit['arac_kat'];
  $blok = $kayit['arac_blok'];
  $arac_giris = $kayit['arac_giris_tarihi'];
  $arac_cikis = $kayit['arac_cikis_tarihi'];


?>




  <tbody>
    <tr>
      <td><?php echo $sira?></td>
      <td><?php echo $plaka?></td>
      <td><?php echo $kat?></td>
      <td><?php echo $blok?></td>
      <td><?php echo $arac_giris?></td>
      <td><?php echo $arac_cikis?></td>
      <td><?php $baslangic= strtotime($arac_giris);
                $bitis= strtotime($arac_cikis);
                $fark= $bitis - $baslangic ;
                if(!$bitis==NULL){ 
                echo floor(($fark/ 60) / 100) . "TL";
                
                }?></td>
     
    </tr>
    
  </tbody>

<?php
}
?>



</table>
<!--Muhammedcan ÖZCAN && Onur YAYLA-->
<!--Muhammedcan ÖZCAN && Onur YAYLA-->
   
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>