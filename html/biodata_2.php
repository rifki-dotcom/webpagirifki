<html>
<head><title>Pengolahan form</title></head>
<body>
<form action=""method="post">
<input type="text" name="nama">
<input type="submit" name="tambah"value="input">
</form>




<?php 
    if(isset($_post['tambah'])){
    $nama_saya=$_post['nama'];
    echo"nama saya adalah :$nama_saya";
}
?>
<form action"" method="">
    <label nama ></label>
    <input type="text" name="" Placeholder="Masukkan Nama">

    <label> Email </label>
    <input type="email" placeholder="admin@gmail">

    <label jenis kelamin> </label>
    <input type="radio"name="kamu"> Laki-laki
    <input type="radio"name="kamu"> Perempuan

    <label>Alamat</label>
    <textarea placeholder="Masukkan Alamat" cols="50" rows="5"></textarea>

    <label Tanggal lahir> </label>
    <input type="date"name=""Placeholder="dd/mm/yyyy">

    <label Password> </label>
    <input type="password"name=""Placeholder= "Masukkan Password">
    
    <label No HP> </label>
    <input type="Number"name=""Placeholder= "Masukkan nama hp">

    <label Hobby> </label>
    <input type="checkbox" name="Hobby1" > Mancing
    <input type="checkbox" name="Hobby2" > Main Bola
    <input type="checkbox" name="Hobby3" > Catur

  </form>
  </html>