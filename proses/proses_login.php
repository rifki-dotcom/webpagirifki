
<!-- proses login -->
<?php
include "../koneksi/koneksi.php";

  if (isset($_POST['login'])){
      $username=$_POST['username'];
      $password=md5($_POST['password']);

// query
      $login=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' and 
      password='$password'");
    //   pengecekan
    $cek=mysqli_num_rows($login);
    // menampilkan definisi data
    $data=mysqli_fetch_assoc($login);
  
    if($cek>0){
        if($data['level']=="penjual"){
            $_SESSION['username']=$data
            ['username'];
            $_SESSION['level']=$data['level'];
            $_SESSION['status']='login';

            echo"<script>
            window.location.href='../diskon.php';
            </script>";
            }
            
    }else {
        echo"<br>data salah";
    }

    // if($username=='admin'&& $password=='admin123'){
    //     header('location:nilai.php');
    // }
    // else if($username=='siswa'&& $password=='siswa123'){
    //   
    // }
    // else {
    //     echo "username dan password salah";
    

        }
?>