<?php

//class kendaraan 
class kendaraan{
    //menentukan property dengan Protected 
    protected $beat = " beat motor saya ";

    //method protected
    Protected function beat(){
           return "Beat saya" .$this->beat;
    }

}

//instansiasi class kendaraan 
$kendaraan = new kendaraan();

//memanggil method public tampilkan_beat dari class kendaraan
echo $kendaraan->tampilkan_beat();
