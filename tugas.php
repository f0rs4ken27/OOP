<?php
    class benda{
        var $namaBenda;
        var $warnaBenda;
    
    function nama($namaBenda){
        $this->namaBenda = $namaBenda;
    }
    function warna($warnaBenda){
        $this->warnaBenda = $warnaBenda;
    }
}

$meja = new benda();
echo $meja->namaBenda = "meja";
echo $meja->nama($meja->namaBenda);
echo "<br>";
echo $meja->warnaBenda = "coklat";
echo $meja->warna($meja->warnaBenda);
?>
