<?php
//PHP OOP Part 2 Pengertian Class, Object, Property dan Method
//class kendaraan 
class kendaraan{
     //property 
     Var $beat
     Var $hitam

     //method kendaraan 
     function tampilkan_beat(){
         return "Beat motor saya <br/>";
      }
      
      function warna_hitam(){
         return "Warna motor saya hitam <br/>";
      }

}
//instansiasi class kendaraan 
$kendaraan = new kendaraan();

//memanggil method tampilkan_beat dari class kendaraan
echo $kendaraan->tampilkan_beat();

//memanggil method warna_hitam dari class kendaraan 
echo $kendaraan->warna_hitam();
