<?php
    echo "
    <marquee>
        <h1>egi subastian XI RPL2</h1>
    </marquee>
    ";

    //variable

    $nama = "Egi subastian";
    $kelas = "XI RPL 2";
    $nilai = 99.99;

    echo "nama : " . $nama;
    echo "<br>";
    echo "kelas :" . $kelas;
    echo "<br>";
    echo "nilai : $nilai";
    echo "<br><br>";

    //operator jumlah

    $angka1 = 5;
    $angka2 = 10;

    $hasil = $angka1 + $angka2;
    echo "hasil dari penjumlahan $hasil";
    echo "<br><br>";

    //rumus ruas segi tiga
    $alas = 8;
    $tinggi = 20;

    $rumus = 0.5 * $alas *$tinggi;
    echo "hasil rumus : $rumus";
    echo "<br><br>";

    //rumus luas lingkaran
    $phi = 3.12;
    $r = 7;

    $lingkaran = $phi * $r * $r;
    echo "Hasil Luas Lingkaran : $lingkaran" ;
    echo "<br><br>";

    //rumus luas balok

    $p = 10; 
    $l = 5;
    $t = 6;

    $balok =$p * $l * $t;
    echo " Hasil Volume Balok : $balok";
?>
