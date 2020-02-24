<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  

<form action="" method="POST">
<label> Nama:</label>
<input type="text"name="nama" placeholder="masukkan nama">
<label>Email:</label>
<input type="email" name="email" placeholder="masukkan email">
<label>Jenis kelamin:</label>
<input type="radio" name="jk" value="laki-laki">Laki-laki
<input type="radio" name="jk" value="perempuan">Perempuan
<label>Alamat:</label>
<input type="textarea"name="alamat"></input> 
<label>Tanggal Lahir</label>
<input type="date"name=""Placeholder="dd/mm/yyyy">
<label>Tempat Lahir</label>
<input type="text"name="tempat_lahir" placeholder="masukkan tempat lahir">
<label>No.Hp</label>
<input type="Number"name=""Placeholder= "Masukkan nama hp">
<label>Hobby</label>
<input type="checkbox" name="Hobby1" > Mancing
    <input type="checkbox" name="Hobby2" > Main Bola
    <input type="checkbox" name="Hobby3" > Catur

    <input type="submit" name="input" value="upload">
</form>


</body>
</html>
<?php 
    if(isset($_POST['input'])){
    $text=$_POST['nama'];
    $email=$_POST['email'];
    $radio=$_POST['jk'];
    $textarea=$_POST['alamat'];
    $date=$_POST['tanggal'];
    $text=$_POST['tempat_lahir'];
    $number=$_POST['no_hp'];
    $hobby1=$_POST['hobby1'];
    $hobby2=$_POST['hobby2'];
    $hobby3=$_POST['hobby3'];

    echo"Nama saya adalah :$text <br>";
    echo"Email saya adalah :$email <br>";
    echo"Saya seorang :$radio <br>";
    echo"Alamat saya di :$textarea <br>";
    echo"Saya lahir pada tanggal :$date<br>";
    echo"Tempat Lahir :$text<br>";
    echo"hubungi saya :$number<br>";
    echo"hobby saya :$hobby1<br>";
    echo"hobby saya :$hobby2<br>";
    echo"hobby saya :$hobby3<br>";
}

?>
