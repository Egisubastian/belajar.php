<form action="input-siswa.php" method="POST">
    <label for="nis">Nomor Induk Siswa :</label>
    <input type="number" name="nis" placrholder="Ex. 1234567899"><br>

    <label for="namalengkap">Nama Lengkap :</label>
    <input type="text" name="nama" placeholder="Ex. Agung"><br>

    <label for="jk">Jenis Kelamin</label>
    <input type="radio" name="jk" value="L"> Laki-Laki
    <input type="radio" name="jk" value="P">Perempuan<br>

    <label for="kelas">Kelas :</label>
    <input type="text" name="kelas" placeholder="Ex. 11 rpl 2"><br>

    <label for="tanggal_lahir">Tanggal lahir</label>
    <input type="text" name="tanggal_lahir"><br>

    <label for="alamat">Alamat :</label>
    <textarea name="alamat" placeholder="Ex. Jl.Areif rahman"></textarea><br>

    <label for="eskul">Esktrakulikuler :</label>
    <select name="eskul">
        <option>Pramuka</option>
        <option>Paskibra</option>
        <option>BTQ</option>
        <option>Futsal</option>
        <option>Basketball</option>
        <option>Marching Band</option>
    </select><br>

    <label for="nilai">Niali :</label>
    <input type="number" name="nilai" placeholder="Ex. 80.56">

    <input type="submit" name="simpan" value="Simpan Data">
    <input type="reset" name="reset" value="Reset Input">
    <hr>
</form>


<?php
    if(isset($_POST ["simpan"]) ){
        echo "<hr>";

        //deklarasi
        $nis = $_POST["nis"];
        $namalengkap = $_POST["nama"];
        $jeniskelamin = $_POST["jk"];
        $kelas = $_POST["kelas"];
        $tanggallahir = date('l, d F Y', strtotime($_POST["tanggal_lahir"]));
        $alamat = $_POST["alamat"];
        $eskul = $_POST["eskul"];
        $nilai = $_POST["nilai"];

        if($nilai >= 70){
            $status = "lulus";
        }else{
            $status = "Belum Lulus";
        }

        //tampil data variable
        echo "
            Hasil Inputan Sebagai Berikut: <br>
            Nomor Induk : $nis <br>
            Nama Lengkap : $namalengkap <br>
            Jenis kelamin : $jeniskelamin <br>
            Kelas : $kelas <br>
            Tanggal Lahir : $tanggallahir <br>
            Alamat : $alamat <br>
            Eskul : $eskul <br>
            Nilai : $nilai <br>
            Status Kelulusan : $status
        ";
        
    }
?>