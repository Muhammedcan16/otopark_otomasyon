<?php require 'header.php'; ?>
<br>


<div style="width:750px; margin-top:10px;"class="container">
<?php
$duzenle = $db -> query('SELECT * FROM arac_kayit WHERE arac_id='.(int)$_GET['id']);
$sonuc = $duzenle -> fetch(PDO::FETCH_ASSOC);
?>
    <div class="card p-5 ">

    <form action="" method="post">

    <?php 

     if($_POST){
        $plaka = $_POST['arac_plaka'];
        $kat = $_POST['arac_kat'];
        $blok = $_POST['arac_blok'];
        
        if(isset($_POST['gerigel'])) {
            echo '<div class="alert alert-danger text-center" role="alert">
                    <strong>İşlem yapmadan geri dönüyorsunuz. </strong>
                     </div>';
                    header('Refresh:2; parkedenaraba.php');
          }

     elseif($plaka <>"" && $kat<>"" && $blok<>""){
        if($db -> query("UPDATE arac_kayit SET arac_plaka = '$plaka' , arac_kat = '$kat' , arac_blok = '$blok'  WHERE arac_id= ".$_GET['id']));{
            echo '<div class="alert alert-primary text-center" role="alert">
            <strong>İşlem Başarılı Anasayfaya Yönlendiriliyorsunuz </strong>
             </div>';
            header('Refresh:2; parkedenaraba.php');
            
        }
      
    }
}
    
    ?>

<table class="table">
    <tr>
        <h1 class="text-center">Araç Düzenle</h1>
        <td><b style="color:red;">Araç Plaka</b><b>==><?php echo $sonuc['arac_plaka'] ?> </b><input type="text" name="arac_plaka" class="form-control"></td>
</tr>

<tr>
        
<td>
    <b><b style="color:red;">Şuanki Bulunduğu Kat</b>==><?php echo $sonuc['arac_blok'] ?> </b>


        <div class="mb3"> 
            <select name="arac_kat" class="form-control text-center mb-3"><br>
                <option value="<?php echo $sonuc['arac_kat']  ?>">KAT SEÇİNİZ</option>
                <option value="KAT 1">KAT 1</option>
                <option value="KAT 2">KAT 2</option>
                <option value="KAT 3">KAT 3</option>
            </select>
        </div>
       </td>
    </tr>

    <tr>
        
<td>
    <b><b style="color:red;">Şuanki Bulunduğu Blok</b>==><?php echo $sonuc['arac_kat']  ?> </b>


        <div class="mb3">
            <select name="arac_blok" class="form-control text-center mb-3"><br>
                <option value="<?php echo $sonuc['arac_blok']  ?>">BLOK SEÇİNİZ</option>
                <option value="A BLOK">A BLOK</option>
                <option value="B BLOK">B BLOK</option>
                <option value="C BLOK">C BLOK</option>
                <option value="D BLOK">D BLOK</option>
                <option value="E BLOK">E BLOK</option>
                <option value="F BLOK">F BLOK</option>
            </select>
        </div>
       </td>
    </tr>


</table>
 <button type="submit" name="gerigel" class="btn bg-danger"style="color:white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sign-turn-left-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098L9.05.435ZM7 8.466V7h1.5A1.5 1.5 0 0 1 10 8.5V11h1V8.5A2.5 2.5 0 0 0 8.5 6H7V4.534a.25.25 0 0 0-.41-.192L4.23 6.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 7 8.466Z"/>
</svg>Geri Gel</button>
<button type="submit"class="btn-primary"name="kaydet" style="color:white; font-size:25px; float:right;">Kaydet</button>






</form>
</div>
</div>
<!--Muhammedcan ÖZCAN && Onur YAYLA-->
<?php include "footer.php"; ?>