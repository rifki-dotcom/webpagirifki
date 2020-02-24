<?php
include'header.php';
?>

<form action=""method="POST">
<input type="text" name="isi">
<input type="submit" name="tambah"value="Tampil">
</form>

<?php
if(isset($_POST['tambah'])){
    $warna=$_POST['isi'];


$arraywarna=[
    "merah",
    "kuning",
    "hijau",
    "biru",
];

if ($warna==$arraywarna[0]){
    echo "<b><p style=color:red;> $warna</p></b>";
}
 else if ($warna==$arraywarna[1]){
    echo "<b><p style=color:yellow;> $warna</p></b>";
}
 else if ($warna==$arraywarna[2]){
    echo "<b><p><p style=color:green;> $warna</p></b>";
}
 else if ($warna==$arraywarna[3]){
     echo "<b><p style=color:blue;> $warna</p></b>";
 }
else{
    echo $warna;
}
}

?>

<?php 
include'footer.php';
?>