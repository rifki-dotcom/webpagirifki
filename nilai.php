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
<div class="container">
<center><h3>Perhitungan Nilai</h3></center>
<form action="" method="POST">

<div class="form-group">
    <label for=nama> Nama:</label> 
    <input type="text"name="nama" class="form-control" id="nama" placeholder="Masukkan Nama "><br><br>
</div>

<div class="form-group">
    <label for=NIM> NIM:</label>
    <input type="number"name="nim" class="form-control" id="NIM" placeholder="Masukkan NIM "><br><br>
</div>
<div class="form-group">
    <label for=jurusan>Jurusan:</label>
    <input type="text"name="jurusan" class="form-control" id="jurusan" placeholder="Masukkan Jurusan "><br><br>
</div>
<div class="form-group">
    <label for=harian>Harian </label>
    <input type="number"name="harian"class="form-control" id="harian" placeholder="Masukkan Nilai "><br><br>
</div>
<div class="form-group">
    <label for=quiz>Quiz </label>
    <input type="number"name="quiz"class="form-control" id="quiz" placeholder="Masukkan Nilai "><br><br>
</div>
<div class="form-group">
<label for=uts>UTS </label>
<input type="number"name="uts"class="form-control" id="uts" placeholder="Masukkan Nilai"><br><br>
</div>
<div class="form-group">
<label for=uas> UAS</label>
<input type="number"name="uas"class="form-control" id="uas" placeholder="Masukkan Nilai"><br><br>
</div>

<div>
    <input type="submit" name="tambah" class="btn btn-primary" value="Upload">
</div>
    
</form>
</div>
<br>
<footer></footer>
<center>
<?php 
    if(isset($_POST['tambah']))
    $nama=$_POST['nama'];
    $nim=$_POST['nim'];
    $jurusan=$_POST['jurusan'];
    $harian=$_POST['harian'];
    $quiz=$_POST['quiz'];
    $uts=$_POST['uts'];
    $uas=$_POST ['uas'];
    $nilai_total=($harian*0.1)+($quiz*0.15)+($uts*0.35)+($uas*0.4);
    
echo"Nama saya adalah :$nama <br>";
echo"NIM saya adalah :$nim <br>";
echo"Jurusan :$jurusan <br>";
echo"Nilai Harian :$harian <br>";
echo"Nilai Quiz :$quiz <br>";
echo"Nilai UTS :$uts <br>";
echo"Nilai UAS :$uas <br>"; 
    

    echo "Nilai Total : ".$nilai_total. "<br>";

    if ($nilai_total<=50){
        echo "<div class='alert alert-danger' role='alert'>
        nilai anda E anda tidak lulus 
        </div>"; }
        
    else if ($nilai_total <=65){
        echo "<div class='alert alert-danger' role='alert'> 
        nilai anda D anda tidak lulus 
        </div>";}

    else if ($nilai_total <=72){
        echo "<div class='alert alert-warning' role='alert'> 
        nilai anda C Selamat anda lulus </div>";}
    else if ($nilai_total <=83){
        echo "<div class='alert alert-success' role='alert'>
        nilai anda B Selamat anda lulus </div>";}
    else if ($nilai_total <=100){
        echo "<div class='alert alert-primary' role='alert'>
        nilai anda A <br> Selamat anda lulus </div>";}
    
?>
</center>


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
