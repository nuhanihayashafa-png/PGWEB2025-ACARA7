<?php
//array numerik
$nama = array("Joko", "Parto", "Jono");
echo $nama[1] . " dan " . $nama[2] . " adalah tetangga Pak " . $nama[0];
?>

<?php
//array associative
$umur = array("Joko"=>33, "Parto"=>35, "Jono"=>29);
echo "Umur Pak Joko adalah " . $umur['Joko'] . " tahun<br>";
echo "Umur Pak Parto adalah " . $umur['Parto'] . " tahun<br>";
echo "Umur Pak Jono adalah " . $umur['Jono'] . " tahun<br>";
?>

<?php
//array multidimensi
$keluarga = array(
    "Joko"=>array("Jojon", "Joni", "Joana"),
    "Parto"=>array("Parmi"),
    "Warto"=>array("Warman", "Warno", "Warmin")
);
echo $keluarga["Joko"][2] . " adalah anggota keluarga Joko";
?>
