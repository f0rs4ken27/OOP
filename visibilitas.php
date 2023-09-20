<?php
      class visibility{
        public $public = 'public';
        protected $protected = 'protected';
        private $private = 'private';
        function CetakProperti(){
          echo "akses dari dalam class <br>";
          echo "public : ".$this->public."<br>";
          echo "protected : ".$this->protected."<br>";
          echo "private : ".$this->private."<br>";
        }

        public function tampilprotected($nilaiProtected) {
          return $this->protected=$nilaiProtected;
        }
        public function tampilprivate($nilaiPrivate) {
          return $this->private=$nilaiPrivate;
        }

      }
      $obj = new visibility();
      $obj->CetakProperti();
      echo "<br> pengaksesan dari luar class <br>";
      echo "public : ".$obj->public."<br>";//OK
      echo "protected : ".$obj->tampilprotected("bebas")."<br>";//error
      echo "private : ".$obj->tampilprivate("bebas");//error

      ?>