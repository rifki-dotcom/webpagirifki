<?php
$nim= "0411500400";
$nama= "Muhammad Rifqi";
$umur=23;
$nilai=82.25;
$status=true;


echo "nim : ".$nim.  "<br>";
echo "nama :<br>";
print "umur : ". $umur; print "<br>";
printf ("nilai :%.3f<br>",$nilai);
if ($status=true)
echo "status: aktif";
else if($status=false)
echo "status : Tidak aktif"; 
?>
<br>
<br>
<!-- variable define -->
<?php
define ("nama", "muhammad rifqi");
define ("nilai",90);

// nama ="muhammad";//error
echo "Nama :".nama;
echo "<br>nilai :".nilai;
?>
<br>
<br>

<!-- operator aritmatika -->
<?php
$gaji=1000000;
$pajak=0.25;
$thp=$gaji-($gaji*$pajak);
echo "Gaji sebelum pahjak= Rp.$gaji <br>";
echo "Pajak=25% <br>"; 
echo"Gaji yang dibawa pulang= Rp.$thp";
?>
<!-- operator logika dan perbandingan -->
<br>
<br>
<?php
$a=5;
$b=4;

echo "$a == $b :".($a==$b);
echo "<br>$a != $b :".($a != $b);
echo "<br>$a > $b :".($a>$b);
echo "<br>$a<$b:".($a<$b);
echo "<br>($a==$b) && ($a>$b) : ".(($a != $b) && ($a>$b));
echo "<br>($a!=$b) || ($a>$b) : ".(($a != $b) || ($a>$b));
?>

<br>
<br>
<?php

$hari="minggu";

if ($hari=="senin") {echo "upacara bendera";}
else if ($hari=="selasa"){ echo "hari jadian";}
else if ($hari=="rabu"){ echo "belajar web";}
else if ($hari=="kamis"){ echo "belajar php";}
else if ($hari=="jumat"){ echo "belajar coding";}
else if ($hari=="sabtu"){ echo "liburan";}
else if ($hari=="minggu"){ echo "liburan";}
    else {echo "hari libur nasional";
}

?>
<br>
<br>

<?php
$NIM="1404106010058";
$nama="Muhammad Rifqi";
$nilai="";

echo "nim : ".$NIM.  "<br>";
echo "nama :".$nama." <br>";

 if($nilai==null){
    echo"nilai belum dimasukkan";
}

else if ($nilai<=50){
    echo "nilainya E";}
else if ($nilai <=65){
    echo "nilainya D";}
else if ($nilai <=72){
    echo "nilainya C";}
else if ($nilai <=83){
    echo "nilainya B";}
else if ($nilai <=100){
    echo "nilainya A";}
    else{echo"nama dengan $nama dan $nim dinyatakan tidak lulus";}

?>
<br>
<br>
<?php
$harian=30*0.1;
$quiz=15*0.15;
$uas=40*0.4;
$uts=35*0.35;
$nilai_total=($harian+$quiz+$uas+$uts);

echo "nilai_total : ".$nilai_total. "<br>";

if ($nilai_total<=50){
    echo "nilainya E anda tidak lulus";}
else if ($nilai_total <=65){
    echo "nilainya D anda tidak lulus";}
else if ($nilai_total <=72){
    echo "nilainya C Selamat anda lulus";}
else if ($nilai_total <=83){
    echo "nilainya B Selamat anda lulus";}
else if ($nilai_total <=100){
    echo "nilainya A Selamat anda lulus";}
?>