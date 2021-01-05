<?php

//class kendaraan
class kendaraan{
    //property
    var $beat;
    var $hitam;

    function __construct(){
        echo "motor saya maju construct <br/>";
    }

    //method kendaraan
    function tampilkan_beat(){
        return "Beat motor saya <br/>";
    }

}
//instansiasi class kendaraan
$kendaraan = new kendaraan();

//memanggil method tampilkan_beat dari class kendaraan
echo $kendaraan->tampilkan_beat();
