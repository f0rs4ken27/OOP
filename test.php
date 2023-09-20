<?php
  class manusia{
  var $namaLengkap ;
  var $warnaRambut ;
  var $umur ;

  function nama($namaLengkap) {
    $this->namaLengkap = $namaLengkap;
  }
  function rambut($warnaRambut) {
    $this->warnaRambut = $warnaRambut;
  }
  function umur($umur) {
    $this->umur = $umur;
  }

}

$nabil = new manusia();
$zaky = new manusia();
echo  $nabil ->namaLengkap = "nama = Hammad Nabil khairy";
echo $nabil ->nama($nabil ->namaLengkap);
echo "<br>";
echo $nabil ->warnaRambut = "warna rambut = hitam";
echo $nabil ->rambut($nabil ->warnaRambut);
echo "<br>";
echo $zaky ->namaLengkap = "nama = Ahmad Zaky";
echo $zaky ->nama($zaky ->namaLengkap);
echo "<br>";
echo $zaky ->warnaRambut = "warna rambut = hitam";
echo $zaky ->rambut($zaky ->warnaRambut);
?>