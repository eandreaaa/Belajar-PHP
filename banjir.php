<!DOCTYPE HTML>  
<html>
	  <head>
	    <title>Status Ketinggian Air</title>
	  </head>
	  <body>   
	<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Status Ketinggian Air:<br><input type="text"name="air"> meter
    <br><br><br><br>
    <input type="submit" name="submit" value="Cek">
</form>
<br>
<?php
	$tampil = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$air = $_POST["air"];
    if ($air >=10){
        echo "Banjir";
    }
    if ($air >=8 and $air <=9) { 
		echo "Rawan Banjir"; 
    }
    if ($air >=5 and $air <=7){
        echo "Bahaya";
    }
    if ($air >=2 and $air <=4){
        echo "Siaga";
    }
    if ($air <=1){
        echo "Aman";
    }
}
?>
</body>
</html>