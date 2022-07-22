<?php 

session_start();
 
include 'koneksi.php';
 

$username = addslashes($_POST['username']);
$password = md5($_POST['password']);

 

$sql = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($sql);

if($cek > 0){
  $data = mysqli_fetch_assoc($sql);


  if($data['level']=="admin"){
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['nama'] =  $data['nama'];
    $_SESSION['level'] = "admin";

    header("location:admin/index.php");

  }else if($data['level']=="petugas"){

    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['level'] = "petugas";

    header("location:petugas/index.php");

  }else if($data['level']=="opeartor"){

    $_SESSION['id_user'] = $data['id'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['level'] = "operator";

    header("location:operator/index.php");

  }else{

    header("location:login.php?alert=gagal");
  } 
}else{
  header("location:login.php?alert=gagal");
}
?>