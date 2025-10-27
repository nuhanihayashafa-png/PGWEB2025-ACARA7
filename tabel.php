<?php
$kecamatan = array(
    "Gamping", "Godean", "Moyudan", "Minggir", "Seyegan",
    "Tempel", "Sleman", "Mlati", "Depok", "Berbah",
    "Prambanan", "Kalasan", "Ngemplak", "Ngaglik", "Caturtunggal", "Pakem", "Turi"
);
echo "<table border='1'><tr><th>No</th><th>Nama Kecamatan</th></tr>";
$no = 1;
foreach($kecamatan as $nama){
    echo "<tr><td>$no</td><td>$nama</td></tr>";
    $no++;
}
echo "</table>";
?>
