<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Nilai</title>

        <!-- css grid -->
        <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css.map">
    <!-- css reboot -->
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css.map">
    <!-- css bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css.map">

</head>

<body>
<center><h3>Perhitungan Nilai</h3></center>
<form action="" method="POST">
<label> Nama:</label> 
<input type="text"name="nama" placeholder="Masukkan nama "><br><br>
<label>Nim:</label>
<input type="number"name="nim" placeholder="Masukkan NIM "><br><br>
<label>Jurusan:</label>
<input type="text"name="jurusan" placeholder="Masukkan jurusan "><br><br>
<label>Harian </label>
<input type="number"name="harian"placeholder="Masukkan nilai "><br><br>
<label>Quiz </label>
<input type="number"name="quiz"placeholder="Masukkan nilai "><br><br>
<label>UTS </label>
<input type="number"name="uts"placeholder="Masukkan nilai"><br><br>
<label>UAS </label>
<input type="number"name="uas"placeholder="Masukkan nilai"><br><br>

    <input type="submit" name="tambah" value="Upload">
</form>

<footer></footer>


    <!-- js for bundle -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.js.map"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js.map"></script>
    <!-- js for bootrap -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.js.map"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.min.js.map"></script>
</body>
</html>

<?php 
    if(isset($_POST['tambah'])){
    $nama=$_POST['nama'];
    $nim=$_POST['nim'];
    $jurusan=$_POST['jurusan'];
    $harian=$_POST['harian'];
    $quiz=$_POST['quiz'];
    $uts=$_POST['uts'];
    $uas=$_POST['uas'];
    $nilai_total=($harian*0.1)+($quiz*0.15)+($uts*0.35)+($uas*0.4);


    echo"Nama saya adalah :$nama <br>";
    echo"NIM saya adalah :$nim <br>";
    echo"Jurusan :$jurusan <br>";
    echo"nilai harian :$harian <br>";
    echo"nilai quiz :$quiz <br>";
    echo"nilai uts :$uts <br>";
    echo"nilai uas :$uas <br>";
    

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
}
?>