<?php
interface motor{
   public function sen_kanan();
   public function sen_kiri();
}
 class kendaraan implements motor{
   public function sen_kanan(){
     return "sen kanan...";
   }
}
$kendaraan baru = new kendaraan();
echo $kendaraan_baru->sen_kanan();
// sen kanan...
?>
