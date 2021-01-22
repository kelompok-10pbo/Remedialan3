<?php
interface motor{
   public function sen_kanan();
   public function sen_kiri();
}
 
 class kendaraan implements motor{
    public function sen_kanan(){
      return "sen Kanan...";
  }
}
 
 $kendaraan_baru = new kendaraan();
 // Fatal error: Class kendaraan contains 1 abstract method
 // and must therefore be declared abstrak
 // or implement the remaining methods (motor::sen_kiri)
?>
