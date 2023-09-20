<?php
include_once("inherit1.php");

class pplg extends smk{
    private$laptop,$tv;

    function setJumlahLaptop($laptop){
        echo "<br> jumlah laptop :".$this->laptop = $laptop;
    }
    function setJumlahTv($tv){
        echo "<br> jumlah tv : ".$this->tv = $tv;
    }
   
} 


class tjkt extends smk{
    private$pc,$router;

    function setJumlahPc($pc){
        echo "<br> jumlah pc : ".$this->pc = $pc;
    }
    function setJumlahRouter($router){
        echo "<br> jumlah router : ".$this->router = $router;
    }
}

$pplg11 = new pplg ("PPLG","XI","Ahmad Istaqim","106");
echo $pplg11->namajurusan();
$pplg11->setJumlahLaptop(10);
$pplg11->setJumlahTv(1);
echo "<hr>";
$tjkt10 = new tjkt ("TJKT","X","Inda Maulana","107");
echo $tjkt10->namajurusan();
$tjkt10->setJumlahPc(10);
$tjkt10->setJumlahRouter(5);

?>