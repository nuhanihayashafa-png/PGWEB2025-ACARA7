<?php
//ifelse
$hari = date("D");
if($hari == "Sat"){
    echo "Selamat berakhir pekan!";
} else {
    echo "Semoga hari Anda menyenangkan!";
}
?>

<?php
//switch
$x = 2;
switch($x){
    case 1: echo "Angka 1"; break;
    case 2: echo "Angka 2"; break;
    case 3: echo "Angka 3"; break;
    default: echo "Bukan angka antara 1-3";
}
?>

<?php
//elseif
$hari = date("D");
if($hari == "Sat"){
    echo "<br>Selamat berakhir pekan!";
} elseif($hari == "Sun"){
    echo "<br>Semoga hari Minggu anda menyenangkan!";
} else {
    echo "<br>Semoga hari anda menyenangkan!";
}
?>
