<h1>Tambah Data</h1>
<form action="input-kwu-tambah.php" method="POST">
      <label for="kode_barang">Kode Barang :</label><br>
      <input type="number" name="kode_barang" placeholder="Ex. 1309240623" /><br>

      <label for="tanggal">Tanggal :</label><br>
      <input type="date" name="tanggal" /><br>

      <label for="pembeli">Pembeli :</label><br>
      <input type="text" name="pembeli" placeholder="Ex. Dian" /><br>

      <label for="namabarang">Nama Barang :</label><br>
      <input type="text" name="namabarang" placeholder="Ex. Makanan" /><br>
      <br>

      <label for="qty">QTY :</label><br>
      <input type="number" name="qty" placeholder="Ex. 12471486597" /><br>
      <br>

      <label for="hargabeli">Harga Beli :</label><br>
      <input type="number" name="hargabeli" placeholder="Ex. 8000" /><br>
      <br>

      <label for="hargajual">Harga Jual :</label><br>
      <input type="number" name="hargajual" placeholder="Ex. 85000" /><br>
      <br>

      <input type="submit" name="simpan" value="Simpan Data" />
      <a href="input-kwu.php">Kembali</a>
</form>

<?php
      if( isset($_POST["simpan"]) ){
            $kode_barang = $_POST["kode_barang"];
            $tanggal = $_POST["tanggal"];
            $pembeli = $_POST["pembeli"];
            $namabarang = $_POST["namabarang"];
            $qty = $_POST["qty"];
            $hargabeli = $_POST["hargabeli"];
            $hargajual = $_POST["hargajual"];

            // CREATE - Menambahkan Data ke Database
            $query = "
                  INSERT INTO transaksi VALUES
                  ('$kode_barang', '$tanggal', '$pembeli', '$namabarang', '$qty', '$hargabeli', '$hargajual');
            ";

            include ('./input-kwu-config.php');
            $insert = mysqli_query($mysqli, $query);

            if ($insert){
                  echo "
                        <script>
                              alert('Data berhasil ditambahkan');
                              window.location='input-kwu.php';
                        </script>
                  ";
            }

      }
?>