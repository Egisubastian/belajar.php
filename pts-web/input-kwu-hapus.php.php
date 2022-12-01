
<?php
      if ( isset($_GET["kode_barang"]) ){
            $kode_barang = $_GET["kode_barang"];

            $query = "
                  DELETE FROM transaksi
                  WHERE kode_barang = '$kode_barang';
            ";
            
            include ('./input-kwu-config.php');
            $delete = mysqli_query($mysqli, $query);

            if($delete){
                  echo "
                        <script>
                        alert('Data berhasil dihapus');
                        window.location='input-kwu.php';
                        </script>
                  ";
            }else{
                  echo "
                        <script>
                        alert('Data gagal');
                        window.location='input-kwu.php';
                        </script>
                  ";
            }
      }
?>