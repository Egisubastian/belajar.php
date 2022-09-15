<?php
include "koneksimysql.php";
if(isset($_GET['nis'])) {
    $nis=$_GET['nis'];
}else{
    $nis="";
}
$nis="";
$nama="";
$kelas="";
 $sql=$conn->query("select * from siswa where nis='".$nis."'");
 while($rs=$sql->fetch_object()) {
    $nama=$rs->nama;
    $kelas=$rs->kelas;
 }
?>      

<a href="Data.php">Lihat Data</a> 
<form method="POST" action="simpan.php">
    NIS <input type="text" name="nis" value="<?php echo $nis;?>"><br>
    Nama <input type="text" name="nama" value="<?php echo $nama;?>"><br>
    Kelas <input type="text" name="kelas" value="<?php echo $kelas;?>"><br>
    <input type="submit" value="simpan">
</form>
