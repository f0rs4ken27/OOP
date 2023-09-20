
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        
    </style>
</head>
<body>
    <center><h1>Halama Log in</h1> </center>
 <form action="prosesLogin.php" method="post">
    <table>
        <tr>
            <td>Nama Pengguna</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>kata sandi</td>
            <td><input type="text" name="sandi"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="masuk" name="btlogin"></td>
        </tr>
    </table>
    <?php
        if (isset($_POST['btlogin'])) {
            echo "<p>Tombol Login telah ditekan!</p>";
            include_once ("koneksi.php");
    }
?>
</form>
</body>
</html>

