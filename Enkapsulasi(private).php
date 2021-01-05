<?php

 //class kendaraan
class kendaraan{
    //menentukan property dengan private
    private $beat = "motor beat";

    //method public
    public function tampilkan_beat(){
        return "beat motor saya " .$this->beat;
    }

}
 //instansiasi class kendaraan
$kendaraan = new kendaraan();

//memanggil method public tampilkan_beat dari class kendaraan
echo $kendaraan->tampilkan_beat();
