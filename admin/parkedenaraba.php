<?php  require "header.php";?>
<br>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Sıra</th>
      <th scope="col">Plaka</th>
      <th scope="col">Bulunduğu Blok</th>
      <th scope="col">Bulunduğu Kat</th>
      <th scope="col">Araç Giriş Tarihi Ve Saati</th>
      <th scope="col">Araç Çıkış Tarihi Ve Saati</th>
      <th scope="col">Düzenle</th>
      <th scope="col">Araç Çıkış</th>
      <th scope="col">Sil</th>
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
      <td><a href="duzenle.php?id=<?php echo $id?>"><button type="submit" class="btn bg-primary">Düzenle</button></td>
      <td><a href="araccikis.php?id=<?php echo $id?>"><button type="submit" class="btn bg-success">Araç Çıkış</button></td>
      <td><a href="sil.php?id=<?php echo $id?>"><button type="submit" class="btn bg-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
  <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
  <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z"/>
</svg>SİL</button></td>
    </tr>
    
  </tbody>

<?php
}
?>



</table>
<!--Muhammedcan ÖZCAN && Onur YAYLA-->
<?php include "footer.php"; ?>