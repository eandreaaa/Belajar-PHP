<?php

$nama = $_POST['nama'];
$JK = $_POST['JK'];
$sekolah = $_POST['sekolah'];
$nomer = $_POST['nomer'];

echo "Selamat <b> $nama </b>, Pendaftaran Berhasil!"; 
echo "<br/>";

echo "Biodata Anda"; 
echo "<hr/>";

echo "Nama : $nama";
echo "<br/>";
echo "Jenis Kelamin : $JK";
echo "<br/>";
echo "Asal SMP : $sekolah";
echo "<br/>";
echo "No. Telp : $nomer";
echo "<br/>";

?>