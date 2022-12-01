<?php
      if ( isset($_GET["kode_barang"]) ){
            $kode_barang = $_GET["kode_barang"];
            $check_kode_barang = "SELECT * FROM transaksi WHERE kode_barang = '$kode_barang'; ";
            include('./input-kwu-config.php');
            $query = mysqli_query($mysqli, $check_kode_barang);
            $row = mysqli_fetch_array($query);
      }
?>
<h1>Edit Data</h1>
<form action="input-kwu-edit.php" method="POST">
      <label for="kode_barang">Kode Barang :</label><br>
      <input value="<?php echo $row["kode_barang"]; ?>" type="number" name="kode_barang" placeholder="Ex. 12345" readonly/><br>

      <label for="tanggal">Tanggal :</label><br>
      <input value="<?php echo $row["tanggal"]; ?>" type="date" name="tanggal" /><br>

      <label for="pembeli">pembeli :</label><br>
      <input value="<?php echo $row["pembeli"]; ?>" type="text" name="pembeli" placeholder="Ex. Dian" /><br>

      <label for="namabarang">Nama Barang :</label><br>
      <input value="<?php echo $row["namabarang"]; ?>" type="text" name="namabarang" placeholder="Ex. Makanan" /><br>

      <label for="qty">QTY :</label><br>
      <input value="<?php echo $row["qty"]; ?>" type="number" name="qty" placeholder="Ex. 1" /><br>

      <label for="harga_beli">Harga Beli :</label><br>
      <input value="<?php echo $row["hargabeli"]; ?>" type="number" name="hargabeli" placeholder="Ex. 8000" /><br>

      <label for="hargajual">Harga Jual :</label><br>
      <input value="<?php echo $row["hargajual"]; ?>" type="number" name="hargajual" placeholder="Ex. 8000" /><br>

      <br>
      <input type="submit" name="edit" value="Edit Data" />
      <a href="input-kwu.php">Kembali</a>
</form>

<?php
      if ( isset($_POST["edit"]) ) {
            $kode_barang = $_POST["kode_barang"];
            $tanggal = $_POST["tanggal"];
            $pembeli = $_POST["pembeli"];
            $namabarang = $_POST["namabarang"];
            $qty = $_POST["qty"];
            $hargajual = $_POST["hargajual"];
            $hargabeli = $_POST["hargabeli"];

            // EDIT - Memperbaharui Data
            $query = "
                  UPDATE transaksi SET tanggal = '$tanggal', 
                  pembeli = '$pembeli',
                  namabarang = '$namabarang',
                  qty = '$qty',
                  hargajual = '$hargajual',
                  hargajual = '$hargajual'
                  WHERE kode_barang = '$kode_barang';
            ";
            
            include ('./input-kwu-config.php');
            $update = mysqli_query($mysqli, $query);

            if($update){
                  echo "
                        <script>
                        alert('Data berhasil diperbaharui');
                        window.location='input-kwu.php';
                        </script>
                  ";
            }else{
                  echo "
                        <script>
                        alert('Data gagal');
                        window.location='input-kwu-edit.php?kode_barang = $kode_barang';
                        </script>
                  ";
            }
      }
?>