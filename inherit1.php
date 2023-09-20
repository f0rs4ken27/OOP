<?php

class smk {
	
	protected $nama, $kelas, $pr, $ruangan;
    function __construct($nama, $kelas, $pr, $ruangan){
        $this->nama=$nama;
        $this->kelas=$kelas;
        $this->pr=$pr;
		$this->ruangan=$ruangan;
    }
    function namajurusan(){
        return "<br>nama jurusan : ". $this->nama."<br>kelas : ".$this->kelas."<br>pembimbing rombel : ".$this->pr."<br>ruangan ".$this->ruangan;
    }
    
}
?>