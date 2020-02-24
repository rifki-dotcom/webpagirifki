<?php
    $user ="muhammad";
    $pass="123";

    if($user == "admin" && $pass="admin123"){
    echo"ke halaman admin";
    }
    else if($user=="siswa"&& $pass=="siswa123"){
        echo "ke halaman siswa";
    }
    else{
        echo "User Dan Password Salah";
    }
?>
<br>
<br>
<!-- penggunaan isset -->
<?php
$user="";
if (!isset($user)){
    echo"variable tidak ada/belum dimasukkan";
}else{
    echo"variable ada";
}
?>