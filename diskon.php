<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Counter</title>

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
        <!-- navbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="">BLO-BLO.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">DAFTAR HARGA BARANG</a>
      </li>
    </ul>
  </div>
</nav>
<br>
<Center><h3>DISCOUNT COUNTER</h3></Center>
<br>
    <!-- Tag Form -->
<form action="" method="POST">
<label> Nama Barang:</label>
<input type="text"name="barang" placeholder="Masukkan Nama Barang ">
<label> Harga Barang:</label>
<input type="number"name="harga" placeholder="Masukkan Harga ">
<label> Diskon:</label>
<input type="number"name="diskon" placeholder="Masukkan Diskon % ">

<input type="submit" class="btn btn-primary" name="submit" value="HITUNG">
<br>

<!-- Proses Perhitungan -->
<br>
<?php 
if(isset($_POST['submit'])){
    $barang=$_POST['barang'];
    $harga=$_POST['harga'];
    $diskon=$_POST['diskon'];

    echo"Barang Yang Dibeli :$barang <br>";
    echo"Harga Barang :$harga <br>";
    echo"Diskon :$diskon %<br>";

    if($harga>=400000){
        $harga_diskon=$harga-($harga*$diskon/100);
        echo"Harga Diskon $harga_diskon <br>";
    }else {
        echo"$harga <br>";
    }
}
?>
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
