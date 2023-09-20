<?php
class NilaiSiswa{
    private $harian, $atsGanjil, $aasGanjil, $atsGenap, $aasGenap;

    public function  setHarian($harian) {
        $this->harian = $harian;
    }

    public function getHarian() {
        return $this->harian;
    }

    public function setAtsGanjil($atsGanjil) {
        $this->atsGanjil = $atsGanjil;
    }
    
    public function getAtsGanjil() {
        return $this->atsGanjil;
    }

    public function setAasGanjil($aasGanjil) {
        $this->aasGanjil = $aasGanjil;
    } 

    public function getAasGanjil() {
        return $this->aasGanjil;
    }

    public function setAtsGenap($atsGenap) {
        $this->atsGenap = $atsGenap;
    } 

    public function getAtsGenap() {
        return $this->atsGenap;
    }

    public function setAasGenap($aasGenap) {
        $this->aasGenap = $aasGenap;
    } 

    public function getAasGenap() {
        return $this->aasGenap;
    }

    public function rata2() {
        $nilaiRata2 = ($this->getHarian()+$this->getAtsGanjil()+$this->getAasGanjil()
        +$this->getAtsGenap()+$this->getAasGenap())/5;
        return $nilaiRata2;
    }

    public function status() {
        $nilaiRata2 = $this->rata2();
        if($nilaiRata2>=75) {
            return "naik kelas";
        }else{
            return "Tidak naik kelas";
        }
    }


}


$akmal = new NilaiSiswa();
$nabil = new NilaiSiswa();
$dhiksa = new NilaiSiswa();
$zaky = new NilaiSiswa();
$fahd = new NilaiSiswa();



$akmal->setHarian("90");
$akmal->setAtsGanjil("89");
$akmal->setAasGanjil("70");
$akmal->setAtsGenap("95");
$akmal->setAasGenap("100");

$nabil->setHarian("90");
$nabil->setAtsGanjil("89");
$nabil->setAasGanjil("70");
$nabil->setAtsGenap("95");
$nabil->setAasGenap("100");

$dhiksa->setHarian("90");
$dhiksa->setAtsGanjil("89");
$dhiksa->setAasGanjil("70");
$dhiksa->setAtsGenap("95");
$dhiksa->setAasGenap("100");

$zaky->setHarian("90");
$zaky->setAtsGanjil("89");
$zaky->setAasGanjil("70");
$zaky->setAtsGenap("95");
$zaky->setAasGenap("100");

$fahd->setHarian("50");
$fahd->setAtsGanjil("60");
$fahd->setAasGanjil("70");
$fahd->setAtsGenap("75");
$fahd->setAasGenap("80");



echo "nilai harian Akmal : ".$akmal->getHarian();
echo "<br>nilai ats ganjil Akmal : ".$akmal->getAtsGanjil();
echo "<br>nilai aas ganjil Akmal : ".$akmal->getAasGenap();
echo "<br>nilai ats genap Akmal : ".$akmal->getAtsGenap();
echo "<br>nilai aas genap Akmal : ".$akmal->getAasGenap();
echo "<br>Rata - Rata Nilai : ".$akmal->rata2();
echo "<br>Status Siswa: ".$akmal->status();



echo "<br><br>nilai harian nabil : ".$nabil->getHarian();
echo "<br>nilai ats ganjil nabil : ".$nabil->getAtsGanjil();
echo "<br>nilai aas ganjil nabil : ".$nabil->getAasGenap();
echo "<br>nilai ats genap nabil : ".$nabil->getAtsGenap();
echo "<br>nilai aas genap nabil : ".$nabil->getAasGenap();
echo "<br>Rata - Rata Nilai : ".$nabil->rata2();
echo "<br>Status Siswa: ".$nabil->status();


echo "<br><br>nilai harian dhiksa : ".$dhiksa->getHarian();
echo "<br>nilai ats ganjil dhiksa : ".$dhiksa->getAtsGanjil();
echo "<br>nilai aas ganjil dhiksa : ".$dhiksa->getAasGenap();
echo "<br>nilai ats genap dhiksa : ".$dhiksa->getAtsGenap();
echo "<br>nilai aas genap dhiksa : ".$dhiksa->getAasGenap();
echo "<br>Rata - Rata Nilai : ".$dhiksa->rata2();
echo "<br>Status Siswa: ".$dhiksa->status();


echo "<br><br>nilai harian zaky : ".$zaky->getHarian();
echo "<br>nilai ats ganjil zaky : ".$zaky->getAtsGanjil();
echo "<br>nilai aas ganjil zaky : ".$zaky->getAasGenap();
echo "<br>nilai ats genap zaky : ".$zaky->getAtsGenap();
echo "<br>nilai aas genap zaky : ".$zaky->getAasGenap();
echo "<br>Rata - Rata Nilai : ".$zaky->rata2();
echo "<br>Status Siswa: ".$zaky->status();

echo "<br><br>nilai harian fahd : ".$fahd->getHarian();
echo "<br>nilai ats ganjil fahd : ".$fahd->getAtsGanjil();
echo "<br>nilai aas ganjil fahd : ".$fahd->getAasGenap();
echo "<br>nilai ats genap fahd : ".$fahd->getAtsGenap();
echo "<br>nilai aas genap fahd : ".$fahd->getAasGenap();
echo "<br>Rata - Rata Nilai : ".$fahd->rata2();
echo "<br>Status Siswa: ".$fahd->status();

?>