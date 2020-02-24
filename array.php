<?php
include'header.php';
?>
<form action=""method="POST">
<input type="text" name="isi">
<input type="submit" name="tambah"value="Tampil">
</form>

<?php
if(isset($_POST['tambah'])){
    $buah=$_POST['isi'];

    $arraybuah=[
        "merah",
        "kuning",
        "hijau",
    ];
    if($buah=$arraybuah[2]){
        echo"$arraybuah[1] <br>";
    }
}
?>

<br><br>

    <?php
    $arrbuah=array ("Mangga","Apel","Pisang","Jeruk");
    echo "$arrbuah[0]<br>";
    echo "$arrbuah[3]<br>";

    $arrwarna = array();
    $arrwarna[] = "Merah";
    $arrwarna[] = "Biru";
    $arrwarna[] = "Hijau";
    $arrwarna[] = "Putih";
    echo "$arrwarna[0]<br>";
    echo "$arrwarna[2]<br>";

    $buahaja=[
            "mangga",
            "kelapa",
            "jambu",
            "terong",
    ];

    echo"$buahaja[2]<br>";

$buah3=array();
$buah3[]="melon";
$buah3[]="pisang";
$buah3[]="rambutan";
$buah3[]="nangka";
 
echo"$buah3[2]<br>";
?>

<?php 
include'footer.php';
?>