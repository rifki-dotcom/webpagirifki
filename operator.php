<?php
// menghitung penjualan bersih 
$sepatu=100000;

$diskon=0.1;

$harga_net=$sepatu-($sepatu*$diskon);
echo "Harga yang harus dibayar=Rp.$harga_net";

?>


<?php
$hal=11;
if($hal%2==0) echo "halaman genap";
else if($hal%3==2) echo"halaman utama";
else
echo"halaman ganjil";
?>

<?php
$a=10;
$b=5;
$c=7;
$d=8;

$kali=($a*$d);
$tambah=($a+$c);
$kurang=($b-$d);
$bagi=($a/$b);
$hasil="$kali";

if($hasil==80){
    echo"nilai anda adalah $kali";
}else if($hasil==17){
    echo"hasil anda adalah $tambah";
}else if($hasil==-3){
    echo"hasil anda adalah $kurang";
}else if($hasil==2)echo"hasil anda adalah $bagi";
else echo"nilai tidak ada";
?>


<?php
    $a=10;
    $b=20;

    function mytest(){
global $a;
 global $b;

echo ($a)+($b);
    }
 myTest();
?> 

<?php 
global$a,$b;
$a="abc";
$b="rifki";

$GLOBALS["a"]="abc";
$GLOBALS["b"]="rifki";

echo $b;
?>