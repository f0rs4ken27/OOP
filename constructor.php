<?php
    class Manusia{
    var $namaLengkap; 
    var $warnaRambut;
    var $umur;

    function tampilData($tambahUmur) {
        $this->umur = 10;
        $this->umur = $this->umur + $tambahUmur;
        return $this->umur;
    }
    
    function __construct(){
        echo "saya konstruktor<br>";
    }

    function __destruct() {
        echo "saya destruktor<br>";
    }
    }

    $objek1 = new manusia();
    $objek2 = new manusia();
    ?>
