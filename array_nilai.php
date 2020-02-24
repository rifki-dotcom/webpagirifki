<?php
$arrnilai=array (
    "Ani"=>80, 
    "Otim"=>90, 
    "Ana"=>75, 
    "Budi"=>85
);

echo "Menampilkan isi array dengan foreach : <br>";
foreach ($arrnilai as $nama => $nilai){
    echo "Nilai $nama=$nilai<br>";
}
reset($arrnilai);
echo"<br>Menampilkan isi array dengan while dan list: <br>";
while (list ($nama,$nilai)=each ($arrnilai)){
    echo "Nilai $nama = $nilai<br>";
} 
?>

<?php
$arrwarna=array ("Blue","Black","Red","yellow","Green");
$arrNilai=array ("Ani"=> 80, "Otim"=>90, "Ana"=>75, "BUdi"=>85);
echo "<pre>";
print_r ($arrwarna);
echo "<br>";
print_r ($arrnilai);
echo "</pre>";
?>