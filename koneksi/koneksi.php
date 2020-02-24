<?php
$server="localhost";
$username="root";
$pasword="";
$db="barang";

$koneksi=mysqli_connect($server,$username,$pasword,$db)
or die(mysqli_error($koneksi));

if($koneksi){
    echo"Database Berhasil Terkoneksi";
}else if(!$koneksi){
die('Koneksi Gagal'.mysql_connect_error());
    } 

?>