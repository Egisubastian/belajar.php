<form>
    <h1>RUMUS LUAS DAN KELILING PERSEGI</h1>
    <p>Sisi :</p>
    <input type="number" name="sisi" placeholder="Ex.5"/>
    <input type="submit" name="proses" value="HIitung luas & keliling"/>
</form>
<?php
        if( isset($_POST["proses"])){
            echo "<hr>";
            $sisi = $_POST("sisi");
            $luas = $sisi * $sisi;
            $keliling = 4 * $sisi;
            echo "<hr>";
            echo "sisi : $sisi <br>";
            echo "Luas Persegi : $luas <br>";
            echo "keliling persegi : $keliling";
        }
?>