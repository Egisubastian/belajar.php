<form action="input-siswa.php" method="POST">
    <label for="nis">Nomor Induk Siswa :</label>
    <input type="number" name="nis" placrholder="Ex. 1234567899"><br>

    <label for="namalengkap">Nama Lengkap :</label>
    <input type="text" name="nama" placeholder="Ex. Agung"><br>

    <label for="tanggal_lahir">Tanggal lahir</label>
    <input type="text" name="tanggal_lahir"><br>

    <label for="nilai">Niali :</label>
    <input type="number" name="nilai" placeholder="Ex. 80.56">

    <input type="submit" name="simpan" value="Simpan Data">
    <input type="reset" name="delet" value="Delet Input">
    <hr>
</form>

<?php
    include('./input-config.php');

    $no = 1;
    $tabledata = "";
    $data = mysqli_query($mysqli, "SELECT * FROM datadiri " );
    while($row = mysqli_fetch_array($data)){
        $tabledata .="
            <tr>
                <td>".$no."</td>
                <td>".$row["nis"]."</td>
                <td>".$row["namalengkap"]."</td>
                <td>".$row["tanggal_lahir"]."</td>
                <td>".$row["nilai"]."</td>
            </tr>
        ";
        $no++;
    }

    echo "
        <table cellpadding=5 border=1 cellspacing=0>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Tanggal Lahir</th>
                <th>Nilai</th>
            </tr>
            $tabledata
        </table>
    ";
?>