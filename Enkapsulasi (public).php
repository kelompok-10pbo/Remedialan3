<?php

//class kendaraan 
class kendaraan{
     //Property
     public $beat;
     public $hitam;

     //method kendaraan 
     function tampilkan_beat(){
         return "Beat motor saya <br/>";
     }

}
//instansiasi class kendaraan
$kendaraan = new kendaraan();

//memanggil method tampilkan_beat dari class kendaraan 
echo $kendaraan->tampilkan_beat();

