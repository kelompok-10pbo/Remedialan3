<?php

//class kendaraan
class kendaraan{
     //property
     var $beat;
     var $hitam;

     //method construct di jalankan pertama kali
     function_construct(){
         echo"motor saya maju construct <br/>";
     }

     //method destruct di jalankan terakhir 
     function_destruct(){
         echo"motor saya berhenti destruct <br/>";
     }

     //method kendaraan
     function tampilkan_beat (){
         return "Beat motor saya <br/>";
     }

}
//instansiasi class kendaraan
$kendaraan = new kendaraan();

//memanggil method tampilkan_beat dari class kendaraan 
echo $kendaraan->tampilkan_beat();
