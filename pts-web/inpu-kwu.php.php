<?php
    include('./input-kwu-config.php');
    echo "<a href='input-kwu-tambah.php'>Tambah Data</a>";
    echo "<hr>";
    $no = 1;
    $tabledata = "";
    $data = mysqli_query($mysqli, "SELECT * FROM transaksi " );
    while($row = mysqli_fetch_array($data)){

        $total_hargabeli =(
            $row ["qty"] *
            $row ["hargabeli"]
        );
        $total_hargajual =(
            $row ["qty"] *
            $row ["hargajual"]
        );
        $laba=(
            $total_hargajual-
            $total_hargabeli
        );
        $persentase=(
            $laba /
            $total_hargabeli * 100
        ); 
        

        $tabledata .="
            <tr>
                <td>".$row["kode_barang"]."</td>
                <td>".$row["tanggal"]."</td>
                <td>".$row["pembeli"]."</td>
                <td>".$row["namabarang"]."</td>
                <td>".$row["qty"]."</td>
                <td>".$row["hargabeli"]."</td>
                <td>".$row["hargajual"]."</td>

                <td>".$total_hargabeli."</td>
                <td>".$total_hargajual."</td>
                <td>".$laba."</td>
                <td>".$persentase." %</td>
                
                <td>
                    <a href= 'input-kwu-edit.php?kode_barang=".$row["kode_barang"]."'>Edit</a>
                    &nbsp; - &nbsp;
                    <a href='input-kwu-hapus.php?kode_barang=".$row["kode_barang"]."' 
                    onclick='return confirm(\"Apakah Anda Yakin ?\");'>Hapus</a>
                    
                </td>
            </tr>
        ";
        $no++;
    }

    echo "
        <table cellpadding=5 border=1 cellspacing=0>
            <tr>
                <th>Kode Barang</th>
                <th>Tanggal</th>
                <th>Pembeli</th>
                <th>Nama Barang Kehadiran</th>
                <th>QTY</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Total Harga Beli</th>
                <th>Total Harga Jual</th>
                <th>Laba</th>
                <th>Persentase</th>
                <th>Aksi</th>
            </tr>
            $tabledata
        </table>
    ";
?>