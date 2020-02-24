<!-- penggunan switch case break -->
<?php
$day=date ("D");
switch ($day){
    case 'sun' : $hari = "Minggu"; break;
    case 'Mon' : $hari = "Senin"; break;
    case 'Tue' : $hari = "Selasa"; break;
    case 'Wed' : $hari = "Rabu"; break;
    case 'Thu' : $hari = "Kamis"; break;
    case 'Fry' : $hari = "Jumat"; break;
    case 'Sat' : $hari = "Sabtu"; break;
    default : $hari = "kiamat"; break;
}
echo"Hari ini hari<b> $hari</b>";
?>
<!-- progarmam struktur kondisi khusus -->
<br>
<br>
<?php
// Masukkan tahun
$tahun=date("Y"); 
$kabisat=($tahun%4==0)?"kabisat": "bukan kabisat";
echo "Tahun <b>$tahun</b> $kabisat";
?>
<br>
<br>
