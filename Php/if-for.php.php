<?php
    // percabangan (IF ELSE)
    $nilai =85;
    echo "Nilai kamu = $nilai <br>";
    echo "Maka status kamu = ";

    if($nilai > 75) {
        echo "lulus serius";
    } else if ($nilai == 75 ) {
         echo "lulus KKM";}
    else{
        echo "tidak lulus";
    }

    echo "<hr>";
    $nilai_web = 78;
    $nilai_pbo = 81;
    echo "Nilai web kamu = $nilai_web <br>";
    echo "Nilai PBO kamu = $nilai_pbo <br>";
    if ($nilai_web >= 80 AND $nilai_pbo >=80) {
        echo "Lulus nilai Produktif 2 mapel";
    }else if ($nilai_web >=80 OR $nilai_pbo >=80){
        echo "Lulus nilai produktif salah satu mapel";
    }else{
        echo "TIdak lulus Nilai produktif";
    }

    echo "<hr> ";
    
    //perulangan (WHILE, DO WHILE, FOR)
    $i = 1;
    while($i < 5){
        echo "hello world - $i <br>";
        $i++; //assigment +1
    }
    echo "<hr>";
    $no = 1;
    do{
        echo "hello world <br>";
        $no++;
    }
    while($no < 5);

    echo "<hr>";

    $nomor = 1;
    for ($nomor; $nomor  < 5; $nomor++){
        echo "shawadikhap ! <br>";
    }

    echo "<hr>";

    //pratikum IF di dalam FOR
    echo "Case 1 = Menentukan Angka Ganjil & Genap <br>";
    $angka = 1;
    for($angka; $angka <=10; $angka++ ){
        if($angka % 2 == 0){
            echo "  bilangan genap <br>";
        }else{
            echo "  bilangan ganjil <br>";
        }
    }

    echo "<hr>";
    echo "case 2 <br>";
    $x = 1;
    $y = 1;
    
    for($x; $x <= 9; $x++){
        for($y = $x; $y <= 9; $y++){
            echo $y;
        }
        echo "<br>";
        
    }
    
    echo "<hr>";


    $star=10;
    for( $a=$star;$a>0;$a--){
        for($i=1; $i<=$a; $i++){
           echo "&nbsp";
        }
        for($a1=$star;$a1>=$a;$a1--){
        echo"*";
        }
        echo"<br>";
    }

    echo "<hr>";
    $star=10;
     for($a=$star;$a>0;$a--){
          for($b=$star;$b>=$a;$b--){
               echo "*";
           }
        echo "<br>";
    }

    echo "<hr>";
    $star=10;
         for($a=$star;$a>0;$a--){
                for($i=1; $i<=$a; $i++){
                    echo " &nbsp";
                }
                for($a1=$star;$a1>=$a;$a1--){
                    echo"*";
                }
            echo"<br>";
       }

       echo "<hr>";
       $star=10;
      for($a=1; $a<=$star; $a++){
            for($b=1; $b<=$a; $b++){
                 echo "&nbsp";
       }
            for($c=$star; $c>=$a; $c-=1){
                  echo "*";
          }
          echo "<br>";
    }

    echo "<hr>";
    $star=10;
     for($a=1; $a<=$star; $a++){
          for($i=1; $i<=$a; $i++){
                echo " &nbsp";
           }
           for($c=$star; $c>=$a; $c-=1){
                  echo "*";
           }
          echo "<br>";
     }

     echo "<hr>";
     $star=10;
    for($a=1; $a<=$star; $a++){
            for($c=$star; $c>=$a; $c-=1){
                echo "*";
            }
            echo "<br>";
        }

    echo "<hr>";
    $star=10;
    for($a=1; $a<=$star; $a++){
          for($b=$star; $b>=$a; $b-=1){
                 echo "&nbsp";
          }
          for($c=1; $c<=$a; $c++){
                 echo "*";
          }
                
        }
        echo "<br>";
        $star=10;
    for($a=1; $a<=$star; $a++){
          for($b=$star; $b>=$a; $b-=1){
                 echo "&nbsp";
          }
          for($c=1; $c<=$a; $c++){
                 echo "*";
          }
                echo "<br>";
                }
                for($a=1; $a<=$star; $a++)
                for($b=1; $b<=$a; $b++){
                     echo "&nbsp";
                }
                for($c=$star; $c>=$a; $c-=1){
                     echo "*";
                }
         echo "<br>";


?>