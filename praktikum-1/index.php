<?php
// membuat variable
// $namaVariable = nilaiVariable;
 $name = "Fiki Alamsyah";
 $age = 21;
 $weight = 45.5;

// menampilkan variable
// echo "isi yang ingin ditampilkan";
echo "Name : " . $name;
echo "<br>Age : $age";
echo "<br>Weight : $weight";

// menampilkan variable sistem
echo "<br>Dokumen root : " . $_SERVER['DOCUMENT_ROOT'];
echo "<br>Nama File : " . $_SERVER['PHP_SELF'];

// membuat variable constant
// Define('namaVariable', 'nilai variable');
Define('PHI', 3.14);
$r = 10;
$luas = PHI * $r * $r;
$kll = 2 * PHI * $r;
echo "<br>Luas Lingkaran : $luas";  
echo "<br>Keliling Lingkaran : $kll";


Define('DBNAME', 'db_covid');
echo "<br>Name database : " . DBNAME;




