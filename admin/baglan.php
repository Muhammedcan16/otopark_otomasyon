<?php  
 try{
    $db= New PDO ('mysql:host=localhost;dbname=otopark_otomasyon', 'root', '');
    //echo 'veri tabanı  çalışıyor ' ; 
 } catch(Exception $e){
    $e -> getMessage();

 }

ob_start();
session_start();

?>
<!--Muhammedcan ÖZCAN && Onur YAYLA-->