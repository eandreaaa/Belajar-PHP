<!DOCTYPE HTML>  
<html>
	  <head>
	    <title>Cek Nilai</title>
	  </head>
	  <body>   
	<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Nilai Pengetahuan :<br><input type="text"name="p"><br>
    Nilai Keterampilan :<br><input type="text"name="k"><br>
    <br><br><br><br>
    <input type="submit" value="Cek"><br>
</form>
<?php
	$p = $_POST ['p'];
    $k = $_POST ['k'];

    echo "Nilai Pengetahuan : $p";
    echo"<br>"; 
    echo "Nilai Keterampilan : $k";
    echo "<br>";

    if (($p + $k) / 2 >=90){
        echo "Nilai <b>SUDAH</b> Kompeten. Lulus.";
        echo "<br>";
        echo "Kategori : A+";
    }
    elseif (($p + $k) / 2 >=80){
        echo "Nilai <b>SUDAH</b> Kompeten. Lulus.";
        echo "<br>";
        echo "Kategori : A";
    }
    elseif (($p + $k) / 2 >=70){
        echo "Nilai <b>SUDAH</b> Kompeten. Lulus.";
        echo "<br>";
        echo "Kategori : B";
    }
    elseif (($p + $k) / 2 >=60){
        echo "Nilai <b>SUDAH</b> Kompeten. Lulus.";
        echo "<br>";
        echo "Kategori : C";
    }
    else{
        echo "Nilai <b>BELUM</b> Kompeten. Tidak Lulus.";
        echo "<br>";
        echo "Kategori : D";
    }

?>
</body>
</html>