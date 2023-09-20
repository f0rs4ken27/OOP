<?php
$username = $_POST['nama'];
$password = $_POST['sandi'];

class user {
    public $pengguna, $sandi;

    function setUser($pengguna, $sandi) {
        $this->pengguna = $pengguna;
        $this->sandi = $sandi;
    }

    function validasiData() {
        include_once "koneksi.php";
        $serverQ = new koneksi();

        $query = "SELECT * FROM login WHERE username='{$this->pengguna}' AND password='{$this->sandi}'";
        $sql = mysqli_query($serverQ->server(), $query);

        if ($sql === false) {
            echo "Error: " . mysqli_error($serverQ->server());
            return;
        }

        if (mysqli_num_rows($sql) > 0) {
            echo "<table>";
            
            while ($row = mysqli_fetch_array($sql)) {
                $id = $row['id'];
                $username = $row['username'];
                $password = $row['password'];
        
              
                echo "<tr><td>ID: $id</td></tr>";
                echo "<tr><td>Username: $username</td></tr>";
                echo "<tr><td>Password: $password</td></tr>";
            }
            
            echo "</table>";
        } else {
            echo "Gagal login. Cek kembali username dan password Anda.";
        }
        
    }
}

$login = new user();
$login->setUser($username, $password);
$login->validasiData();
?>
