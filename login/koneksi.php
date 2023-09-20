<?php
  class koneksi {
    private $server = "localhost",
    $user = "root",
    $pass = "",
    $db = "db_wisaga";

    function server() {
        return mysqli_connect(
            $this->server,
            $this->user,
            $this->pass,
            $this->db);
    }
  }
?>