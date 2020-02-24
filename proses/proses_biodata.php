<?php 
    if(isset($_POST['tambah'])){
    $nama_saya=$_POST['nama'];
    $email_saya=$_POST['email'];
    $jenis_kelamin=$_POST['jk'];
    $alamat=$_POST['alamat'];
    $tanggal=$_POST['tanggal'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $no_hp=$_POST['no_hp'];
    $hobby1=$_POST['hobby1'];
    $hobby2=$_POST['hobby2'];
    $hobby3=$_POST['hobby3'];
    echo"Nama saya adalah :$nama_saya <br>";
    echo"Email saya adalah :$email_saya <br>";
    echo"Saya seorang :$jenis_kelamin <br>";
    echo"Alamat saya di :$alamat <br>";
    echo"Saya lahir pada tanggal :$tanggal<br>";
    echo"Tempat Lahir :$tempat_lahir<br>";
    echo"hubungi saya :$no_hp<br>";
    echo"hobby saya :$hobby1<br>";
    echo"hobby saya :$hobby2<br>";
    echo"hobby saya :$hobby3<br>";
}

?>