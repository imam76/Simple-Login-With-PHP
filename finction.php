<?php
//login function
require_once 'db.php';
session_start();

function login_model($nama,$pass)
{
  //ngabil var dari db.php
  //untuk bisa connect to phpmyadmin
  global $link;

  // ini sql nya
  $sql = "SELECT * FROM data_siswa WHERE nama='$nama'";

  $query = mysqli_query($link,$sql);

  // var_dump($query);
  // die();


  //nah ini untuk mengambil hasil dari querynya
   if ($result = mysqli_fetch_assoc($query)) {
    // disimpan sementara di var
    $username = $result['nama'];
    $password = $result['password'];
  }

  //auth sederhananya
  //atau bisa pake password_verify();
  if ($pass == $password) {
    // code...
    return true;
  }else {
    return false;
  }
}

//funsi untuk logout nya
function logout()
{
  // code...
  session_destroy();
}

 ?>
