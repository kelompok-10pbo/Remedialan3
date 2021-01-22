<?php
interface motor{
   public function sen_kanan();
   public function sen_kiri();
}
 
 class kendaraan implements motor{
    public function sen_kanan(){
      return "Sen_kanan...";
   }
   public function sen_kiri(){
     return "Sen_kiri...";
   }
}

$kendaraan_baru = new kendaraan();
echo $kendaraan_baru->sen_kanan();
// Sen Kanan...
?>
