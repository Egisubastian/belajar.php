<form action= "post.php" method= "POST">
    <input type="text" name="NIS" placeholder= "121xxxxx">
    <br>
    <input type="text" name="namalengkap" placeholder= "Ex. Satrio" />
    <br>
    <input type="text" name="kelas" placeholder= "Ex. XI RPL2" />
    <br>
    <input type="submit" name="simpan" value="Simpan Data">
    
</form>




<?php
    if( isset($_POST["simpan"])){
        echo "<hr>";
        $nis = $_POST["NIS"];
        $nama = $_POST["namalengkap"];
        $kelas = $_POST["kelas"];
        echo "NIS : $nis <br>";
        echo "Nama Lengkap :  $nama <br>";
        echo "Kelas :  $kelas <br>";
    }
?>