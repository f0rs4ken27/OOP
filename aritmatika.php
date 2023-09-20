<?php
class Aritmatika{
    public $hasil;
    public $a;
    public $b;

    public function tambah($a, $b) {
        $this->a = $a;
        $this->b = $b;
        $this->hasil = $a + $b;
    }

    public function kurang($a, $b) {
        $this->a = $a;
        $this->b = $b;
        $this->hasil = $a - $b;
    }

    public function kali($a, $b) {
        $this->a = $a;
        $this->b = $b;
        $this->hasil = $a * $b;
    }

    public function pembagian($a, $b) {
        $this->a = $a;
        $this->b = $b;
        $this->hasil = $a / $b;
    }

    public function modulus($a, $b) {
        $this->a = $a;
        $this->b = $b;
        $this->hasil = $a % $b;
    }
}


$kalkulator = new Aritmatika();
echo "<br> operator aritmatika <br>";
echo $kalkulator->tambah(10, 20)."<br>";
echo "$kalkulator->a + $kalkulator->b = $kalkulator->hasil <br>"


?>
