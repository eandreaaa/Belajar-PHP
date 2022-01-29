<!DOCTYPE HTML>  
<html>
	  <head>
	    <title>Ganjil-Genap</title>
	  </head>
	  <body>   
	<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Nilai:<input type="text"name="angka">
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>
<br>
<?php
	$tampil = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$angka = $_POST["angka"];
        if ($angka < 0){
            echo "Tidak Valid.";
        }
		if ($angka % 2 == 0){ 
			    echo "Nilai $angka merupakan Genap"; 
		}else {
			    echo "Nilai $angka merupakan Ganjil"; 
		}
	}
?>
</body>
</html>