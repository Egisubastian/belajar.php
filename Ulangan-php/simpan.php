<?php
include "koneksimysql.php";

$sql=$conn->query("select * from siswa where  nis='".$_POST['nis']."'");
$jml=$sql->num_rows;
if($jml>0) {
    $conn->query("update siswa set nama='".$_POST['nama']."',kelas='".$_POST['kelas']."' where nis='".$_POST['nis']."' ");

}else{
    $conn->query("insert into siswa(nis,nama,kelas) values('".$_POST['nis']."',
         '".$_POST['nama']."','".$_POST['kelas']."') ");

}
header("location:data.php");
?>