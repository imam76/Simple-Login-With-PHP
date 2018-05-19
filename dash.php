<?php
require_once 'finction.php';
//auth

if (!isset($_SESSION['user'])) {
  // redirect
  header('Location: index.php');
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1>Selamat datang</h1>
     <p><?php echo $_SESSION['user']; ?></p>
   </body>
 </html>
