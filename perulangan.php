<?php
//while
$i = 1;
while($i <= 5){
    echo "Angka $i<br>";
    $i++;
}
?>

<?php
//do...while
$i = 1;
do{
    echo "Do...while: Angka $i<br>";
    $i++;
}while($i <= 3);
?>

<?php
//for
for($i=1; $i<=5; $i++){
    echo "For: Angka $i<br>";
}
?>

<?php
//foreach
$arr = array("Satu", "Dua", "Tiga");
foreach($arr as $nilai){
    echo "Nilai: $nilai<br>";
}
?>
