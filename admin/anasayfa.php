<?php require "header.php"; ?> 
<!--İleride yapacağımız bir değişiklik olursa bunların hepsini header.php den yapabileceğiz 
burada yapacağımız değişiklikler header.php ile bağladığımız tüm sayfalarda etkili olacaktır-->
   
<div id="container"class="container p-5">
<div class="card p-5">
    <div class="form">
<?php

if(isset($_POST['kaydet'])){
$arac_plaka = $_POST['arac_plaka'];
$arac_kat = $_POST['arac_kat'];
$arac_blok = $_POST['arac_blok'];
if(!$arac_plaka || !$arac_kat || !$arac_blok){
    
   echo '<div class="alert alert-danger text-center" role="alert">
    <strong>Boşluk bırakmayınız.</strong>
    </div>';
    header('Refresh:2; anasayfa.php');
}else{
    $kaydet = $db -> prepare('INSERT INTO arac_kayit SET
arac_plaka = ?,
arac_blok = ?,
arac_kat = ?'
);
$kaydet -> execute ([
    $arac_plaka, $arac_kat, $arac_blok
]);
if($kaydet){
    echo '<div class="alert alert-primary text-center" role="alert">
    <strong>Araç başarılı bir şekilde kayıt edilmiştir. </strong>
     </div>';
    header('Refresh:2; parkedenaraba.php');
}
}
}
?>



        <h1 class="text-center mb-3 ">Araç Plaka Kayıt</h1>
        <form action="anasayfa.php" method="post">
            <input type="text" name="arac_plaka" class="form-control text-center" placeholder="Plaka Giriniz" style="color:black;"><br>
            
            <select name="arac_kat" class="form-control text-center">
                <option value="">KAT SEÇİNİZ</option>
                <option value="KAT 1">KAT 1</option>
                <option value="KAT 2">KAT 2</option>
                <option value="KAT 3">KAT 3</option>
            </select><br>

            <select name="arac_blok" class="form-control text-center">
                <option value="">BLOK SEÇİNİZ</option>
                <option value="A BLOK">A BLOK</option>
                <option value="B BLOK">B BLOK</option>
                <option value="C BLOK">C BLOK</option>
                <option value="D BLOK">D BLOK</option>
                <option value="E BLOK">E BLOK</option>
                <option value="F BLOK">F BLOK</option>
            </select><br>

            <div class="text-center">
         <button type="reset" class="btn bg-primary">SIFIRLA</button>
         <button type="submit" name="kaydet" class="btn bg-primary">KAYDET</button>


</div>
<?php include "footer.php"; ?> 
<!--Muhammedcan ÖZCAN && Onur YAYLA-->