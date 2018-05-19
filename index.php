<?php
//start session disini-----ada di dalam finction.php------------------
  require 'finction.php';

  if (isset($_POST['masuk'])) {

    // Ngabil data Dari form dengan method post
    //Kalo dia get Maka $_GET['foo']

    $nama = $_POST['user'];
    $pass = $_POST['pass'];

      //Ngecek Jika var $nama dan $pass tidak kosong
      if (!empty($nama) && !empty($pass)) {

        // memanggil funsi di finction.php yang bernama
        //login_model(),berserta parameter yang dibuthkan
        if (login_model($nama,$pass)) {
          // berhasil
          $_SESSION['user'] = "$nama";
          header('Location: dash.php');

        }else{
          //gagal
          echo "gagal login password salah atau user belum ada";
        }
      }else {
        echo "nggak boleh kosong";
      }

  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="form" action="" method="post">
      <input type="text" name="user" required placeholder="name">
      <input type="password" name="pass" placeholder="password" required>

      <input type="submit" name="masuk" value="masuk">
    </form>
  </body>
</html>
