<?php require "header.php"; 
if ($_GET){

    if ($db -> query("DELETE FROM arac_kayit WHERE arac_id=".(int)$_GET['id'])); {
   header('location:parkedenaraba.php?durum=ok');
    }

    }



?>

<!--Muhammedcan ÖZCAN && Onur YAYLA-->
<?php include "footer.php"; ?>